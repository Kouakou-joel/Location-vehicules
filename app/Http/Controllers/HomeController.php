<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("client.index");
    }

    public function contact()
    {
        return view("client.contact");
    }

    public function about()
    {
        return view("client.about-us");
    }

    public function categories()
    {
        return view("client.categorie");
    }
    public function faq()
    {
        return view("client.faq");
    }
    public function listing()
    {
        return view("client.listing");
    }

    public function offers()
    {
        return view("client.offers");
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
