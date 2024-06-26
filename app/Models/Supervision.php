<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervision extends Model
{
    use HasFactory;

    public function RoleTeachers(){
        return $this->belongsTo(User::class)->where('role_id', 2);
    }
}
