<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillabel = [
        'fristname',
        'lastname',
        'active'
    ]; 
    public function salary()
    {
        return $this->hasMany(Salary::class);
    }
}
