<?php

namespace App\Http\Controllers;

use App\Application;
use App\Http\Requests\ApplicationStoreRequest;
use App\Http\Requests\ApplicationUpdateRequest;

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
     * Show application.
     *
     * @return void
     */
    public function show(Application $application)
    {
        return view('pages.applications.show', [
            'application' => $application
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

    /**
     * Create a new application.
     *
     * @return void
     */
    public function store(ApplicationStoreRequest $request)
    {
        Application::create([
            'name' => $request->name,
            'app_id' => (string) \Str::uuid(),
            'active' => true
        ]);

        return redirect(route('applications.index'));
    }

    /**
     * Update an application.
     *
     * @return void
     */
    public function update(ApplicationUpdateRequest $request, Application $application)
    {
        $application->name = $request->name;
        $application->save();

        return redirect()->back();
    }
}
