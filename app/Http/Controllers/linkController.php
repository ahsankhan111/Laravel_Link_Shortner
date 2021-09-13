<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\link;
use Illuminate\Support\Facades\Auth;

class linkController extends Controller
{
    //

    function addLinks(Request $req)
    {
        $newLink = new link;

        $newLink->url = $req->url;
        $randi = rand(100,5000);
        $tinyurl = "https://lk/".$randi;
        $newLink->short_url = $tinyurl;
        $newLink->the_user = Auth::user()->name;
        $newLink->save();
       
        return redirect()->route('home');
    }
}
