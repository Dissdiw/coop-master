<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory, SoftDeletes;
    protected $casts=[
        // 'birthday' => 'date'
    ];

    public function getFullNameAttribute(){
        return $this->firstname . ' ' . $this->lastname; 
    }

}
