<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('lahan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('lahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Lahan $lahan
     * @return Response
     */
    public function show(Lahan $lahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Lahan $lahan
     * @return View
     */
    public function edit(Lahan $lahan): View
    {
        return view('lahan.edit', compact('lahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateLahanRequest $request
     * @param Lahan $lahan
     * @return RedirectResponse
     */
    public function update(UpdateLahanRequest $request, Lahan $lahan)
    {
        $data = $request->validated();
        $lahan->update($data);

        return redirect()->route('lahan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Lahan $lahan
     * @return Response
     */
    public function destroy(Lahan $lahan)
    {
        //
    }
}