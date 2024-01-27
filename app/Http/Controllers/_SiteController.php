<?php

namespace App\Http\Controllers;

use App\Models\MyProfile;
use Illuminate\Http\Request;

class _SiteController extends Controller
{
        public function index(){
            $profiles = MyProfile::latest('name')->paginate(20);


        return view('index', compact('profiles'));
        }
}
