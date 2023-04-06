<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Contact;

class CompanyController extends Controller
{
    public function edit() {
        $id = Auth::id();
        $data = Company::where('company_id', $id) -> get();
        $count = $data -> count();
        return view('company.edit', compact('id', 'data', 'count'));
    }

    public function contact($id) {

    }
}
