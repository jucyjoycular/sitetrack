<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class JobActivity extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];

    public function siteActivity() {
        return $this->hasOne(SiteActivity::class , 'job_activity_id','id');
    }

    public function blocks() {
        return $this->hasMany(SiteInfoBlock::class , 'activity_id','id');
    }
}
