<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Contact;

class StudentController extends Controller
{
    public function edit() {

    }

    public function list() {
        $data = [
            'first' => Company::where('section', 1) -> orderBy('booth') -> get(),
            'second' => Company::where('section', 2) -> orderBy('booth') -> get()
        ];
        return view('student.list', $data);
    }

    public function detail($id) {
        $data = [
            'record' => Company::where('company_id', $id) -> first(),
        ];
        return view('student.detail', $data);
    }

    public function contact($id) {

    }
}
