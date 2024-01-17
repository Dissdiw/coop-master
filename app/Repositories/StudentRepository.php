<?php

namespace App\Repositories;

use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentRepository
{
    public function store($param=[]){
        $data = new Student;
        return $this->valiable($data, $param);
    }

    public function valiable($data, $param=[]){
        $param = (object) $param;

        !isset($param->student_code ) ?: $data->student_code  = $param->student_code ;
        !isset($param->firstname) ?: $data->firstname = $param->firstname;
        !isset($param->lastname) ?: $data->lastname = $param->lastname;
        !isset($param->firstname_en) ?: $data->firstname_en = $param->firstname_en;
        !isset($param->lastname_en) ?: $data->lastname_en = $param->lastname_en;
        !isset($param->gender) ?: $data->gender = $param->gender;
        !isset($param->birthday) ?: $data->birthday = $param->birthday;
        !isset($param->phone) ?: $data->phone = $param->phone;
        !isset($param->password) ?: $data->password = Hash::make($param->password);
        !isset($param->status) ?: $data->status = $param->status;
        !isset($param->email ) ?: $data->email  = $param->email ;
        !isset($param->image ) ?: $data->image  = $param->image ;

        $data->save();
        return $data;
    }
}