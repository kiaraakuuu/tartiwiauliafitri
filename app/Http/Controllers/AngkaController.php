<?php

namespace App\Http\Controllers;

use App\Models\angka;
use Illuminate\Http\Request;

class AngkaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $angka = ['Angka'];
        return view ('angka', compact('angka'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(angka $angka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(angka $angka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, angka $angka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(angka $angka)
    {
        //
    }
}
