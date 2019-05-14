<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
  public function list()
  {
    $companies = Company::all();

    return view('internals.company', compact('companies'));
  }

  public function store()
  {
    $data =request()->validate([
      'name'=>'required|min:3',
      'phone'=>'required',
    ]);

    Company::create($data);

    return back();
  }
}
