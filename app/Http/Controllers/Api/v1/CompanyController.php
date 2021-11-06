<?php

namespace App\Http\Controllers\Api\v1;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
class CompanyController extends Controller{
    private $company;

    public function __construct(Company $company){
        $this->company = $company;
    }
    
    public function index(Request $request){
        // Ja esta implementado o filtro no Model
        
        $companies = $this->company->FilterCompany($request->social_reason);
                        


        return response()->json($companies);
    }

    public function store(Request $request){

        $company = $this->company->create($request->all());


        return response()->json($company, 201);

    }

}
