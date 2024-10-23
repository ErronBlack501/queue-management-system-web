<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PostServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('services.index', [
            "services" => Service::latest()->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostServiceRequest $request)
    {
        Service::create($request->validated());
        return Redirect::route('services.index')->with('status', 'service-created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostServiceRequest $request, Service $service)
    {
        $service->update($request->validated());
        return Redirect::route('services.index')->with('status', 'service-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return Redirect::route('services.index')->with('status', 'service-deleted');
    }
}
