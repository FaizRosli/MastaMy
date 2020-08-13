<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function index ($id)
    {
        $data_profile = \App\User::find($id);
        return view('Pages.resume', ['data_profile' => $id]);
    }
}
