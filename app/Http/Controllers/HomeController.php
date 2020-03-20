<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');

    }
    public function homePage()
    {
        return view('home');
    }
    public function Category()
    {
        return view('categories.category');
    }

    public function DetailsCategory()
    {
        return view('categories.category-details');
    }

    public function Contact()
    {
        return view('contact.contact-user');
    }

}
