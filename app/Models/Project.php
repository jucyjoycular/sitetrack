<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\CarVoteWinner;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];
    const STATUS_PENDING='PENDING';
    const STATUS_ON_GOING='ON_GOING';
    const STATUS_FINISHED='FINISHED';


    protected $fillable = ['name','start_date','end_date','location','status'];

}
