<?php

namespace App\Services\User;

use App\Models\Vehicle;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class VehicleService {
   public function getAll() { 
    return Vehicle::findAll();
   }

 }
