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
        //
    }
}
