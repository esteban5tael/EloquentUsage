<?php

namespace App\Http\Controllers;

use App\Models\MyProfile;
use Illuminate\Http\Request;

class _SiteController extends Controller
{
        public function index(){
            $profiles = MyProfile::latest('name')->paginate(20);
            // $profiles = MyProfile::count('id');
            // return $profiles;

        return view('index', compact('profiles'));
        }
}
