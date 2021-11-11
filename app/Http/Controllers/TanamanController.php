<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTanamanRequest;
use App\Models\Tanaman;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('tanaman.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('tanaman.create');
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
     * @param Tanaman $Tanaman
     * @return Response
     */
    public function show(Tanaman $tanaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tanaman $tanaman
     * @return View
     */
    public function edit(Tanaman $tanaman): View
    {
        return view('tanaman.edit', compact('tanaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTanamanRequest $request
     * @param Tanaman $tanaman
     * @return Response
     */
    public function update(UpdateTanamanRequest $request, Tanaman $tanaman)
    {
        $data = $request->validated();
        $tanaman->update($data);

        return redirect()->route('tanaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tanaman $tanaman
     * @return Response
     */
    public function destroy(Tanaman $tanaman)
    {
        //
    }
}
