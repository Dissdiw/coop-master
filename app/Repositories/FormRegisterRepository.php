<?php

namespace App\Repositories;

use App\Models\FormRegister;

class FormRegisterRepository
{
    public function store($param=[]){
        $data = new FormRegister();
        return $this->valiable($data, $param);
    }

    public function valiable($data, $param=[]){
        $param = (object) $param;

        !isset($param->year ) ?: $data->year  = $param->year ;
        !isset($param->student_id ) ?: $data->student_id  = $param->student_id ;
        !isset($param->student_image ) ?: $data->student_image  = $param->student_image ;
        !isset($param->company_name ) ?: $data->company_name  = $param->company_name ;
        !isset($param->job_position ) ?: $data->job_position  = $param->job_position ;
        !isset($param->expected_work_from ) ?: $data->expected_work_from  = $param->expected_work_from ;
        !isset($param->expected_work_until ) ?: $data->expected_work_until  = $param->expected_work_until ;
        !isset($param->age ) ?: $data->age  = $param->age ;
        !isset($param->weight ) ?: $data->weight  = $param->weight ;
        !isset($param->height ) ?: $data->height  = $param->height ;
        !isset($param->id_card ) ?: $data->id_card  = $param->id_card ;
        !isset($param->place_of_issue ) ?: $data->place_of_issue  = $param->place_of_issue ;
        !isset($param->due_date ) ?: $data->due_date  = $param->due_date ;
        !isset($param->race ) ?: $data->race  = $param->race ;
        !isset($param->nationality ) ?: $data->nationality  = $param->nationality ;
        !isset($param->religion ) ?: $data->religion  = $param->religion ;
        !isset($param->address_current ) ?: $data->address_current  = $param->address_current ;
        !isset($param->phone1 ) ?: $data->phone1  = $param->phone1 ;
        !isset($param->mobilephone ) ?: $data->mobilephone  = $param->mobilephone ;
        !isset($param->email ) ?: $data->email  = $param->email ;
        !isset($param->permanent_address ) ?: $data->permanent_address  = $param->permanent_address ;
        !isset($param->phone2 ) ?: $data->phone2  = $param->phone2 ;
        !isset($param->emergency_contact ) ?: $data->emergency_contact  = $param->emergency_contact ;
        !isset($param->emergency_phone ) ?: $data->emergency_phone  = $param->emergency_phone ;
        !isset($param->father_name ) ?: $data->father_name  = $param->father_name ;
        !isset($param->father_occupation ) ?: $data->father_occupation  = $param->father_occupation ;
        !isset($param->father_place_work ) ?: $data->father_place_work  = $param->father_place_work ;
        !isset($param->father_phone ) ?: $data->father_phone  = $param->father_phone ;
        !isset($param->mother_name ) ?: $data->mother_name  = $param->mother_name ;
        !isset($param->mother_occupation ) ?: $data->mother_occupation  = $param->mother_occupation ;
        !isset($param->mother_place_work ) ?: $data->mother_place_work  = $param->mother_place_work ;
        !isset($param->mother_phone ) ?: $data->mother_phone  = $param->mother_phone ;
        !isset($param->siblings_no ) ?: $data->siblings_no  = $param->siblings_no ;
        !isset($param->you_are_the ) ?: $data->you_are_the  = $param->you_are_the ;
        !isset($param->GPA ) ?: $data->GPA  = $param->GPA ;
        !isset($param->education_background ) ?: $data->education_background  = $param->education_background ;
        !isset($param->training_background ) ?: $data->training_background  = $param->training_background ;
        !isset($param->student_activities ) ?: $data->student_activities  = $param->student_activities ;
        !isset($param->lan_ability_english ) ?: $data->lan_ability_english  = $param->lan_ability_english ;
        !isset($param->lan_ability_chinese ) ?: $data->lan_ability_chinese  = $param->lan_ability_chinese ;
        !isset($param->lan_ability_other ) ?: $data->lan_ability_other  = $param->lan_ability_other ;
        !isset($param->special_ability ) ?: $data->special_ability  = $param->special_ability ;
        !isset($param->is_drive_car ) ?: $data->is_drive_car  = $param->is_drive_car ;
        !isset($param->is_drive_motorcycle ) ?: $data->is_drive_motorcycle  = $param->is_drive_motorcycle ;
        !isset($param->diver_license_car ) ?: $data->diver_license_car  = $param->diver_license_car ;
        !isset($param->diver_license_motorcycle ) ?: $data->diver_license_motorcycle  = $param->diver_license_motorcycle ;
        !isset($param->sports ) ?: $data->sports  = $param->sports ;
        !isset($param->hobbies ) ?: $data->hobbies  = $param->hobbies ;
        !isset($param->introduct ) ?: $data->introduct  = $param->introduct ;
        !isset($param->interest ) ?: $data->interest  = $param->interest ;
        !isset($param->sickness ) ?: $data->sickness  = $param->sickness ;
        !isset($param->sickness_describe ) ?: $data->sickness_describe  = $param->sickness_describe ;
        !isset($param->company_name2 ) ?: $data->company_name2  = $param->company_name2 ;
        !isset($param->company_contact ) ?: $data->company_contact  = $param->company_contact ;
        !isset($param->company_contact_phone1 ) ?: $data->company_contact_phone1  = $param->company_contact_phone1 ;
        !isset($param->company_contact_phone2 ) ?: $data->company_contact_phone2  = $param->company_contact_phone2 ;
        !isset($param->company_address ) ?: $data->company_address  = $param->company_address ;
        !isset($param->map ) ?: $data->map  = $param->map ;
        !isset($param->location ) ?: $data->location  = $param->location ;
        !isset($param->status ) ?: $data->status  = $param->status ;

        $data->save();
        return $data;
    }

    public function findById($id){
        return FormRegister::query()->findOrFail($id);
    }

    public function getAll()
    {
        return FormRegister::all();
    }

    public function getById($id)
    {
        return FormRegister::where('student_id', $id)->get();
    }
}