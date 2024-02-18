<?php

namespace App\Services\User;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class UserService {
   public function getAll() { 
    return User::findAll();
   }

 }
