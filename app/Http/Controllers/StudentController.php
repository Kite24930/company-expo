<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
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
        $data = [
            'record' => Company::where('company_id', $id) -> first(),
        ];
        return view('student.contact', $data);
    }

    public function create(Request $request) {
        DB::beginTransaction();
        try {
            Contact::create([
                'company_id' => $request->companyId,
                'student_number' => $request->studentNumber,
                'student_grade' => $request->studentGrade,
                'student_department' => $request->studentDepartment,
                'student_name' => $request->studentName,
                'student_email' => $request->studentEmail,
                'title' => $request->title,
                'detail' => $request->detail,
            ]);
            DB::commit();
//            メール送信の処理
        } catch (\Exception $e) {
            DB::rollBack();
            return ['msg' => $e];
        }
    }
}
