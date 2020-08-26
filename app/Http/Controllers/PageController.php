<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $title = "Welcome to main page of site !";
        $info = "This site is under-construction";

        //return view('pages.index', compact('title', $title));
        return view('pages.index')->with('title', $title)->with('info', $info);
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {

        $data = array(
            "title" => "Welcome to service page",
            "services" => array("Web design", "UI/UX design", "SEO", "Digital Marketing")
        );

        return view('pages.services')->with('data', $data);
    }
}
