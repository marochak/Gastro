<?php

namespace App\Http\Controllers\Company;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $company = Auth::user()->company;
        return view('company.company-profile.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:13',
            'Fax' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:13',
            'email' => 'nullable|email|max:255',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i|after:start_time',
            'logo' => 'nullable|mimes:jpeg,bmp,png|max:4096',
        ]);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo');
            $logoName = $logoPath->getClientOriginalName();

            $path = $request->file('logo')->storeAs('uploads', $logoName, 'public');

            $company-> logo = '/storage/'.$path;
        }

        $company-> name = $request->get('name');
        $company-> description= $request->get('description');
        $company-> address = $request->get('address');
        $company-> city= $request->get('city');
        $company-> country= $request->get('country');
        $company-> phone= $request->get('phone');
        $company-> Fax= $request->get('Fax');
        $company-> email= $request->get('email');
        $company-> start_time= $request->get('start_time');
        $company-> end_time= $request->get('end_time');


        $company->update();
        return redirect()->back()->with('message','Le profile de votre entreprise a été bien modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
