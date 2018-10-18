<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;

class OrganizationController extends Controller
{

    public function index()
    {
        $org = Organization::first();
        return view('organizations.index', compact('org'));
    }

    public function edit($id)
    {
        $org = Organization::find($id);
        return view('organizations.edit', compact('org'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'email' => 'required',
        ]);

        $org = Organization::find($id);

        // No image upload, we keep the old one
        $logo = $request->input('logo') ? $request->input('logo') : $org->logo;
        $cover = $request->input('cover') ? $request->input('cover'): $org->cover;
        
        // Update
        $org->name = $request->input('name');
        $org->description = $request->input('description');
        $org->email = $request->input('email');
        $org->facebook = $request->input('facebook');
        $org->instagram = $request->input('instagram');
        $org->logo = $logo;
        $org->cover = $cover;
        $org->save();

        return redirect(route('organization.index'));
    }
}
