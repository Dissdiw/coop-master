<?php

namespace App\Repositories;

use App\Models\FormSurvey;

class FormSurveyRepository
{
    public function store($param=[]){
        $data = new FormSurvey();
        return $this->valiable($data, $param);
    }

    public function valiable($data, $param=[]){
        $param = (object) $param;

        !isset($param->student_id ) ?: $data->student_id  = $param->student_id ;
        !isset($param->rest ) ?: $data->rest  = $param->rest ;
        !isset($param->company_name ) ?: $data->company_name  = $param->company_name ;
        !isset($param->address ) ?: $data->address  = $param->address ;
        !isset($param->type ) ?: $data->type  = $param->type ;
        !isset($param->employee_ammount ) ?: $data->employee_ammount  = $param->employee_ammount ;
        !isset($param->week_ammount ) ?: $data->week_ammount  = $param->week_ammount ;
        !isset($param->working_ammount ) ?: $data->working_ammount  = $param->working_ammount ;
        !isset($param->day_start ) ?: $data->day_start  = $param->day_start ;
        !isset($param->day_end ) ?: $data->day_end  = $param->day_end ;
        !isset($param->job_position ) ?: $data->job_position  = $param->job_position ;
        !isset($param->job_description ) ?: $data->job_description  = $param->job_description ;
        !isset($param->mentor_name ) ?: $data->mentor_name  = $param->mentor_name ;
        !isset($param->mentor_phone ) ?: $data->mentor_phone  = $param->mentor_phone ;
        !isset($param->mentor_mentor_positionhone ) ?: $data->mentor_position  = $param->mentor_position ;
        !isset($param->number_care ) ?: $data->number_care  = $param->number_care ;
        !isset($param->salary ) ?: $data->salary  = $param->salary ;
        !isset($param->salary_type ) ?: $data->salary_type  = $param->salary_type ;
        !isset($param->rest_option ) ?: $data->rest_option  = $param->rest_option ;
        !isset($param->rent_ammount ) ?: $data->rent_ammount  = $param->rent_ammount ;
        !isset($param->is_shuttle ) ?: $data->is_shuttle  = $param->is_shuttle ;
        !isset($param->benefit ) ?: $data->benefit  = $param->benefit ;
        !isset($param->gallery ) ?: $data->gallery  = $param->gallery ;
        !isset($param->status ) ?: $data->status  = $param->status ;

        $data->save();
        return $data;
    }

    public function findById($id){
        return FormSurvey::query()->findOrFail($id);
    }
}