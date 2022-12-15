<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = "schedule";
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
    public function class()
    {
        return $this->belongsTo(Grade::class);
    }
}
