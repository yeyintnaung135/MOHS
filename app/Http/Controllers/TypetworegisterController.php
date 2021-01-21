<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Typetworegister;

class TypetworegisterController extends Controller
{
    //

    public function createform(){
        return view('type_two_data_insert');

    }



    public function create(Request $request)
    {
        $input=$request->except('_token');
        foreach($input as $key=>$value){
            if($input[$key] == null){
                $input[$key]='';
            }

        }
        $input['created_at']=Carbon::now();
        $input['updated_at']=Carbon::now();
        $input['admin_id']='1';

        Typetworegister::create($input);

            return redirect('type_two_patients_list');




    }
    public function type_two_patient_list(){
        $data=Typetworegister::all();
        return view('type_two_patient_list',['data'=>$data]);
    }
    public function type_two_patient_detail($id){
        $data=Typetworegister::where('id',$id)->first();

        return view('type_two_patient_detail',['data'=>$data]);
    }
    public function delete_type_two_patient(Request $request){
        Typetworegister::where('id',$request->id)->delete();
        return redirect('type_two_patients_list');


    }
}
