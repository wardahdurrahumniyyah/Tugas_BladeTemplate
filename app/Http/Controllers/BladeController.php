<?php

namespace App\Http\Controllers;

use Illuminate\Request;

class BladeController extends Controller
{
    public function index()
    {
        $fruits = array(
            0 => 'Mangga',
            1 => 'Apel',
            2 => 'Jambu',
            3 => 'Nanas',

        );

        $name = array(
            0 => 'Wardah'

        );
        return view('pages.home', compact('name', 'fruits'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
