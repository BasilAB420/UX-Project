<?php

namespace App\Http\Controllers;

use App\Models\Keyword;
use App\Models\Service;
use Illuminate\Http\Request;

class KeywordController extends Controller
{
    //




    public function create()
    {
        $data = Service::all();
        return view('/add_keyword', compact('data'));
    }


    public function store(Request $request, Keyword $inputs)
    {

        $request->validate([

            'service_id' => 'required',
            'word' => 'required',
            'weight' => 'required',
            'start_date' => 'required',

        ]);

        $inputs->service_id = $request->post('service_id');
        $inputs->word = $request->post('word');
        $inputs->weigth = $request->post('weight');
        $inputs->start_date = $request->post('start_date');
        $inputs->save();

        return redirect()->back()->with('success', 'Keyword added successfully');
    }
}
