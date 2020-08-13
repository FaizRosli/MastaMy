<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;
use Validator;

class ResumeController extends Controller
{
    //
    public function edit(Request $request,$id)
    {
    //     //
    //     //dd($request->all());
        $data_resume = \App\Resume::find($id);
        $validated = request()->validate([
                                           'course' => [],
                                           'year' => [],
                                           'detail_education'=> [],
                                           'uni'=>[],
                                           'job_title' =>[],
                                           'job_company' =>[],
                                           'date_start' =>[],
                                           'date_end' =>[],
                                           'job_description' =>[],
                                           'type_skill' =>[],
                                           'name_skill' =>[],
                                           'percentage' =>[]

                                         ]);
                                        
                                         $data_resume->update($request->all());
                                        
                                         return redirect ('Profile');
    }   
} 
    //     //dd( $validated );
        
        
        
    //         public function addMorePost(Request $request)
    //         {
    //             $rules = [];
        
        
    //             foreach($request->input('course','year','detail_education','uni','job_title','job_company','date_start','date_end','job_description','type_skill','name_skill','percentage') as $key => $value) {
    //                 $rules["course.{$key}"],["year.{$key}"],["detail_education.{$key}"],["job_title.{$key}"],["job_company.{$key}"],["date_start.{$key}"],["date_end.{$key}"],["job_description.{$key}"],["type_skill.{$key}"],["name_skill.{$key}"],["percentage.{$key}"] = 'required';
    //             }
        
        
    //             $validator = Validator::make($request->all(), $rules);
        
        
    //             if ($validator->passes()) {
        
        
    //                 foreach($request->input('course','year','detail_education','uni','job_title','job_company','date_start','date_end','job_description','type_skill','name_skill','percentage') as $key => $value) {
    //                     TagList::create(['course'=>$value],
    //                                     ['year'=>$value],
    //                                     ['detail_education'=>$value],
    //                                     ['uni'=>$value],
    //                                     ['job_title'=>$value],
    //                                     ['job_company'=>$value],
    //                                     ['date_start'=>$value],
    //                                     ['date_end'=>$value],
    //                                     ['job_description'=>$value],
    //                                     ['type_skill'=>$value],
    //                                     ['name_skill'=>$value],
    //                                     ['percentage'=>$value]);
    //                 }
        
        
    //                 return response()->json(['success'=>'done']);
    //             }
        
        
    //             return response()->json(['error'=>$validator->errors()->all()]);
    //         }
    //     }

        
        
    // }


    // public function addMore()
    // {
    //     return view("profile2");
    // }


    // public function addMorePost(Request $request)
    // {
    //     $rules = [];


    //     foreach($request->input('course', 'year', 'detail_education', 'job_title', 'date_start', 'date_end', 'job_description',
    //     'type_skill', 'name_skill', 'percentage') as $key => $value) {
    //         $rules["name.{$key}"] = 'required';
    //     }


    //     $validator = Validator::make($request->all(), $rules);


    //     if ($validator->passes()) {


    //         foreach($request->input('course', 'year', 'detail_education', 'job_title', 'date_start', 'date_end', 'job_description',
    //         'type_skill', 'name_skill', 'percentage') as $key => $value) {
    //             Resume::create(['name'=>$value]);
    //         }


    //         return response()->json(['success'=>'done']);
    //     }


    //     return response()->json(['error'=>$validator->errors()->all()]);
    // }

