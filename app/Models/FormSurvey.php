<?php

namespace App\Models;

use App\Casts\JsonCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormSurvey extends Model
{
    use HasFactory;

    protected $casts=[
        // 'gallery' => JsonCast::class,
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
