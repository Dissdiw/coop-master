<?php

namespace App\Repositories;

use App\Models\Report;


class ReportRepository
{
    public function store($param=[]){
        $data = new Report();
        return $this->valiable($data, $param);
    }

    public function valiable($data, $param=[]){
        $param = (object) $param;

        !isset($param->student_id ) ?: $data->student_id  = $param->student_id ;
        !isset($param->semester ) ?: $data->semester  = $param->semester ;
        !isset($param->report ) ?: $data->report  = $param->report ;
      
        $data->save();
        return $data;
    }

    public function findById($id){
        return Report::query()->findOrFail($id);
    }

    public function getAll()
    {
        return Report::all();
    }

    public function getById($id)
    {
        return Report::where('student_id', $id)->get();
    }
}