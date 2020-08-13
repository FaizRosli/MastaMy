<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;
//use Rule;

class ProfileController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = auth()->user()->id;
        //dd($id);
        $data_profile = \App\User::find($id);
        $data_resume = \App\Resume::find($id);
        $data_portfolio = \App\Portfolio::find($id);  
        // dd($data_resume);
        return view('profile', ['data_profile'=>$data_profile,
                                'data_resume'=>$data_resume,
                                'data_portfolio'=>$data_portfolio,
                                'public_url' => url("/Resume/{$id}"),
                                ]); 

    }

    public function index2()
    {
        //
        $id = auth()->user()->id;
        //dd($id);
        $data_profile = \App\User::find($id);
        $data_resume = \App\Resume::find($id);
        $data_portfolio = \App\Portfolio::find($id);  
        // dd($data_resume);
        return view('profile2', ['data_profile'=>$data_profile,
                                'data_resume'=>$data_resume,
                                'data_portfolio'=>$data_portfolio,
                                'public_url' => url("/Resume/{$id}"),
                                ]); 

    }

    public function PostRegister()
    {
        //
        $id = auth()->user()->id;
        
        $data_profile = \App\User::find($id); 
         \App\company::create([ 'id' =>$id,
                                'name' =>'',
                                'industry' =>'', 
                                'registration_number' =>''
                                ]);

        \App\Resume::create([   'id' => $id,
                                'course' =>'',
                                'year' =>'',
                                'detail_education' =>'',
                                'uni' =>'',
                                'job_title' =>'',
                                'job_company' =>'',
                                'date_start' =>'',
                                'date_end' =>'',
                                'job_description' =>'',
                                'type_skill' =>'',
                                'name_skill' =>'',
                                'percentage' =>'',
                                'user_id' =>$id
                                ]);

        \App\Portfolio::create(['id' => $id,
                                'portfolio_image' =>''
                                ]);

        $data_company = \App\company::find($id); 
        $data_profile->company()->sync($data_company);
        // $data_user_company =\App\users_company::create([
        //                                                 'user_id' =>$id,
        //                                                 'company_id'=>$id]);
        
                        
       
        //return view('profile', ['data_profile'=>$data_profile]); //kalau pakai ni nanti ada url '/postregister' 
        return redirect()->action('ProfileController@index'); // kalau ni xde sbb dia pegi ke controller

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        //
        //dd($request->all());
        $data_profile = \App\User::find($id);
        // dd($data_profile);
        $validate = request()->validate([
                                           'name' => ['required','min:3','max:50'],
                                           'designation' => ['required','min:3','max:191'],
                                           'email'=> ['required','min:3','max:191',Rule::unique('users')->ignore($data_profile->id)],
                                           'phone'=>['required','min:5','max:40'],
                                           'about_me' =>[],
                                           'instagram_link'=>[],
                                           'facebook_link'=>[],
                                           'linkedin_link'=>[]

                                         ]);
                                        

        $data_profile->update($validate);

        if($request->hasFile('profile_picture'))
        {
            $request->file('profile_picture')->move('Admin/ProfilePicture/',$request->file('profile_picture')->getClientOriginalName());
            $data_profile->profile_picture = $request->file('profile_picture')->getClientOriginalName();
            $data_profile->save();
        }

        return redirect ('Profile');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
