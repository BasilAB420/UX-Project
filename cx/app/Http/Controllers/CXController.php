<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CX;
use App\Models\Service;
use Illuminate\Http\Request;

class CXController extends Controller
{
    public function input_file(Request $request)
    {
        $request->validate([
            'service_name'=>'required|not_in:0',
            'company_name'=>'required|not_in:0',
            'feed_text'=>'required|mimes:txt|max:6144',
        ]);

        if(file_exists($request->feed_text)){

            $file = fopen($request->file('feed_text'), "r");
            $newArray =[];
            while(($line=fgets($file))!==false) { array_push($newArray , $line); }
            for ($i=0; $i <count($newArray) ; $i++) { 
                $newArray[$i]= array_map('trim', explode(',', $newArray[$i]));
            }
            array_shift($newArray);
            $final_array = [];
            foreach ($newArray as $key => $value) {
                $final_array[$key] = array('client_id'=>$value[1] ,'feedback_date'=>$value[2] ,'feedback'=> $value[3],'feedback_source'=>$value[4] ,'service_id'=>$request->service_name );
            }

            $insert_data = CX::insert($final_array);
            if($insert_data){
                return redirect('/text-feed')->with('success','file has been added successfully');
            }else{
                return redirect('/text-feed')->with('fail','file has not added , please try again');
            }

        }else{
            echo "file does not exist ";
        }

    }

    public function fetchAllCompany()
    {
        $companies = Company::all();
        return response()->json([
            'companies'=>$companies,
        ]);
    }

    public function fetchAllService($company_id)
    {
        $services = Service::where('company_id',$company_id)->get();
        return response()->json([
            'services'=>$services
        ]);
    }
}
