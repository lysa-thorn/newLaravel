<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function action(){
        $action = "Action";
        return view('pages.action', compact('action'));
    }
    public function about(){
        $about = "About";
        return view('pages.about', compact('about'));
    }
    public function join(){
        $join = "Join";
        return view('pages.join', compact('join'));
    }
    public function contact(){
        $contact = "Contact";
        return view('pages.contact', compact('contact'));
    }
    public function news(){
        $news = "News";
        return view('pages.news', compact('news'));
    }
    public function showCustomer(){
        $customer = array("Chandaraty", "Maly", "Samphas", "Donat");
        return view('pages.customer', compact('customer'));
    }
}
