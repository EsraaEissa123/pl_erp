<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [

        'name', 'phone', 'hiring_date', 'work_hours', 'shift', 'gender',
'personal_id','visa_num'

    ];
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function location()
    {
        return $this->hasMany(Location::class);
    }
    public function sector()
    {
        return $this->hasMany(Sector::class);
    }
    public function salary()
    {
        return $this->hasMany(Salary::class);
    }
    public function holiday()
    { 
        return $this->hasMany(Holiday::class);
    }
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
