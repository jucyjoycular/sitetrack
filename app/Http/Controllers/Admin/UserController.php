<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use App\Models\User;
use App\Services\User\UserService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function fileImportExport()
    {
        return view('file-import');
    }
    public function fileImport(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return back();
    }
    public function fileExport()
    {
        return Excel::download(new UsersExport, 'users-collection.xlsx');
    }

    protected $userService;
    public function __construct (UserService $userService) {
        $this->userService = $userService;
    }
    public function index()
    {
        $users = User::all();
        return view('admin.pages.master.user.index', compact('users'));
    }
    public function create()
    {
        return view('admin.pages.master.user.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'password' => 'required',
            'joined_date' => 'required',
            'gl_code' => 'required',
            'ic_passport' => 'required',
            'passport_expiry' => 'required',
            'permit_number' => 'required',
            'permit_expiry' => 'required',
            'role' => 'required',
        ]);

        try {
            $check = User::where('gl_code','=',$request->gl_code)->exists();
            if($check) {
                $mesasge = 'GL Code Was Exists';
                $typ = 'error';
                
            } else {
                $mesasge = 'Data added';
                $typ = 'success';
                User::create([
                    'name' => $request->name,
                    'username' => $request->username,
                    'phone_number' => $request->phone_number,
                    'email'    => $request->email,
                    'password' => Hash::make($request->password),
                    'joined_date'    => $request->joined_date,
                    'gl_code' => $request->gl_code,
                    'ic_passport'    => $request->ic_passport,
                    'passport_expiry'    => $request->passport_expiry,
                    'permit_number'    => $request->permit_number,
                    'permit_expiry'    => $request->permit_expiry,
                    'role' => $request->role,
                ]);
        
        
            }
            return redirect()->back()->with($typ,$mesasge);
        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }

        /*User::create([
            'name' => $request->name,
            'username' => $request->username,
            'phone_number' => $request->phone_number,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'joined_date'    => $request->joined_date,
            'gl_code' => $request->gl_code,
            'ic_passport'    => $request->ic_passport,
            'passport_expiry'    => $request->passport_expiry,
            'permit_number'    => $request->permit_number,
            'permit_expiry'    => $request->permit_expiry,
            'role' => $request->role,
        ]);

        if ($request->close == 'true') {
            return redirect()->back()->with('success','Data added');
        }else{
            return redirect(route('admin.master.user.index'));
        }*/
    }
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
    public function edit(string $id)
    {
        $data = User::find($id);

        if (!$data) {
            return abort(404);
        }

        return view('admin.pages.master.user.edit', compact('data'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $data  = User::findOrFail($id);
        $user = User::where('id','=',$id)->first();


        try {
            $check = User::where('gl_code','=',$request->gl_code)->exists();
            if($user->gl_code==$request->gl_code) {
                $mesasge = 'Data added';
                $typ = 'success';
                if ($request->password == null) {
                    $data->update([
                        'name' => $request->name,
                        'username' => $request->username,
                        'phone_number' => $request->phone_number,
                        'email'    => $request->email,
                        'joined_date'    => $request->joined_date,
                        'gl_code' => $request->gl_code,
                        'ic_passport'    => $request->ic_passport,
                        'passport_expiry'    => $request->passport_expiry,
                        'permit_number'    => $request->permit_number,
                        'permit_expiry'    => $request->permit_expiry,
                        'role' => $request->role,
                    ]);
                } else {
                    $data->update([
                        'name' => $request->name,
                        'username' => $request->username,
                        'phone_number' => $request->phone_number,
                        'email'    => $request->email,
                        'password' => Hash::make($request->password),
                        'joined_date'    => $request->joined_date,
                        'gl_code' => $request->gl_code,
                        'ic_passport'    => $request->ic_passport,
                        'passport_expiry'    => $request->passport_expiry,
                        'permit_number'    => $request->permit_number,
                        'permit_expiry'    => $request->permit_expiry,
                        'role' => $request->role,
                    ]);
                }
        
            } else if($check){
                    $mesasge = 'GL Code Was Exists';
                    $typ = 'error';
                    
             
            } else {
                $mesasge = 'Data added';
                $typ = 'success';
                if ($request->password == null) {
                    $data->update([
                        'name' => $request->name,
                        'username' => $request->username,
                        'phone_number' => $request->phone_number,
                        'email'    => $request->email,
                        'joined_date'    => $request->joined_date,
                        'gl_code' => $request->gl_code,
                        'ic_passport'    => $request->ic_passport,
                        'passport_expiry'    => $request->passport_expiry,
                        'permit_number'    => $request->permit_number,
                        'permit_expiry'    => $request->permit_expiry,
                        'role' => $request->role,
                    ]);
                } else {
                    $data->update([
                        'name' => $request->name,
                        'username' => $request->username,
                        'phone_number' => $request->phone_number,
                        'email'    => $request->email,
                        'password' => Hash::make($request->password),
                        'joined_date'    => $request->joined_date,
                        'gl_code' => $request->gl_code,
                        'ic_passport'    => $request->ic_passport,
                        'passport_expiry'    => $request->passport_expiry,
                        'permit_number'    => $request->permit_number,
                        'permit_expiry'    => $request->permit_expiry,
                        'role' => $request->role,
                    ]);
                }

            }
            return redirect()->back()->with($typ,$mesasge);
        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }

       
        /*if ($request->close == 'true') {
            return redirect()->back()->with('success','Data added');
        }else{
            return redirect(route('admin.master.user.index'));
        }*/
    }
}
