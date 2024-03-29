<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectWorker extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','vehicle_id', 'remark','project_id'];

}
