<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteActivity extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jobActivity() {
        return $this->hasOne(JobActivity::class , 'id','job_activity_id');
    }

    public function activityBlocks() {
        return $this->hasMany(SiteActivityBlocks::class , 'site_activity_id','id');
    }

}
