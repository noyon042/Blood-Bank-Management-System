<?php

namespace App\Models;

use App\Models\DonorList;
use App\Models\RecepientList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReceivedDonor extends Model
{
    use HasFactory;
    // public $timestamps=false;
    protected $guarded= [];

    public function donor()
    {
        return $this->belongsTo(DonorList::class);
    }
    public function recepient()
    {
        return $this->belongsTo(RecepientList::class);
    }
}
