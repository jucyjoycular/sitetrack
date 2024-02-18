<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteActivityBlocks extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function block() {
        return $this->hasOne(SiteInfoBlock::class,'id','block_id');
    }
    public function blockInfo() {
        return $this->hasOne(SiteInfoBlockInfo::class,'activity_block_id','id');
    }
}
