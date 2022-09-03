<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //





    public function create()
    {
        return view('/company');
    }


    public function store(Request $request, Company $inputs)
    {

        $request->validate([

            'company_name' => 'required',
            'logo' => 'required',
            'business_type' => 'required',
            'branch' => 'required',
            'country' => 'required',

        ]);

        $logo = $request->file('logo')->getClientOriginalName();

        $path = $request->file('logo')->move(public_path('images'), $logo);

        $inputs->name = $request->post('company_name');
        $inputs->business_type = $request->post('business_type');
        $inputs->branch = $request->post('branch');
        $inputs->country = $request->post('country');
        $inputs->logo = $logo;
        $inputs->save();

        return redirect()->back()->with('success', 'Company added successfully');
    }
}
