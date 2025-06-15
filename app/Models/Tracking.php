<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function travelHistory()
    {
        return $this->hasMany(TravelHistory::class);
    }

    public function invoice()
    {
        return $this->hasOne(PrintedDoc::class);
    }
}
