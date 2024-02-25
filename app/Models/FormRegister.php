<?php

namespace App\Models;

use App\Casts\JsonCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormRegister extends Model
{
    use HasFactory;

    protected $casts=[
        'education_background' => JsonCast::class,
        'training_background' => JsonCast::class,
        'student_activities' => JsonCast::class,
        'special_ability' => JsonCast::class,
        'lan_ability_english' => JsonCast::class,
        'lan_ability_chinese' => JsonCast::class,
        'lan_ability_other' => JsonCast::class
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
