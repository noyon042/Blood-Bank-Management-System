<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    use HasFactory;

    protected $guarded= [];
    // protected $table = ('blood_types');

    public function recepientlist()
    {
        return $this->belongsTo(RecepientList::class);
    }
    public function donorlist()
    {
        return $this->belongsTo(DonorList::class);
    }
}
