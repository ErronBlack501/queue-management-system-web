<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PostCounterRequest;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('counters.index', [
            "counters" => Counter::with('service')->latest()->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('counters.create', ["services" => Service::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostCounterRequest $request)
    {
        Counter::create($request->validated());
        return redirect()->route('counters.index')->with('status', 'counter-created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Counter $counter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Counter $counter)
    {
        return view('counters.edit', compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostCounterRequest $request, Counter $counter)
    {
        $counter->update($request->validated());
        return Redirect::route('counters.index')->with('status', 'counter-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Counter $counter)
    {
        $counter->delete();
        return Redirect::route('counters.index')->with('status', 'counter-deleted');
    }
}
