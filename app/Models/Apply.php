<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function memberPost()
    {
        return $this->belongsTo(MemberPost::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
