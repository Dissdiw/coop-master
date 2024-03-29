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
        'lan_ability_other' => JsonCast::class,
        // 'custom_data' => 'array'
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    // public function setCustomDataAttribute($value)
    // {
    //     if (is_string($value)) {
    //         $value = json_decode($value, true);
    //     }
    //     if (empty($value)) {
    //         $value = array();
    //     }
    //     $this->attributes['custom_data'] = json_encode($value);
    // }

}
 

