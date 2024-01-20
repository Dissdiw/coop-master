<?php

namespace App\Repositories;

use App\Models\Company;

class CompanyRepository
{
    public function getAll()
    {
        return Company::all();
    }
}
