<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserLevel;
use App\Providers\RouteServiceProvider;
use App\Services\Twilio\TwilioServices;
use App\Services\User\UserService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|max:16|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        //    'referal_code' => 'sometimes|string'
        ]);

        // initiate data user
        $userInitiate = [
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ];


        // if user have referal code
        if ($request->referal_code) {
            $upperLine = UserService::getUserByReferalCode($request->referal_code);
            if ($upperLine == null  ) {
                throw new \Exception('Register user failed : Referal code not found');
            }

           $userInitiate['upper_line_id'] = $upperLine->id ;
        }

        $userInitiate['referal_code'] = uniqid();

        $user= User::create($userInitiate);
       // validate if user level


        event(new Registered($user));

        Auth::login($user);

        return redirect('/result');
    }

    public function testSendOtp() {
        $recipients = "+601125457898";
        $message ="Testing message from laravel";

        TwilioServices::sendTwilioWa($message, $recipients);
    }

}
