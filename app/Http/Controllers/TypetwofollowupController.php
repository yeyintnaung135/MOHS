<?php

namespace App\Http\Controllers;

use App\Typetwofollowup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Typetworegister;


class TypetwofollowupController extends Controller
{
    //
    public function type_two_followup_insert_form(){
        $id=Typetworegister::all();

        return view('type_two_followup_insert',['id'=>$id]);
    }


    public function type_two_followup_insert(Request $request){
        $input=$request->except('_token');
        foreach($input as $key=>$value){
            if($input[$key] == null){
                $input[$key]='';
            }

        }
        $input['created_at']=Carbon::now();
        $input['updated_at']=Carbon::now();
        Typetwofollowup::create($input);


        return redirect('type_two_followup_list');
    }
    public function type_two_followup_list(Request $request){
        $data=Typetwofollowup::all();
        return view('type_two_followup_list',['data'=>$data]);
    }
    public function type_two_followup_detail($id){
        $data=Typetwofollowup::where('id',$id)->first();

        return view('type_two_followup_detail',['data'=>$data]);

    }
    public function delete_type_two_followup(Request $request){
        Typetwofollowup::where('id',$request->id)->delete();
        return redirect('type_two_followup_list');


    }

}
