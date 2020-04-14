<?php

namespace App\Http\Controllers;

use App\Application;

class ApplicationController extends Controller
{
    /**
     * Show all of the applications.
     *
     * @return void
     */
    public function index()
    {
        return view('pages.applications.index', [
            'applications' => Application::all()
        ]);
    }

    /**
     * Show view to create an application.
     *
     * @return void
     */
    public function create()
    {
        return view('pages.applications.create');
    }
}
