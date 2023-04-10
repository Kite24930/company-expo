<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function edit() {
        $id = Auth::id();
        $company = Company::where('company_id', $id);
        $contactCount = Contact::where('company_id', $id)->count();
        $data = [
            'id' => $id,
            'data' => $company -> first(),
            'count' => $company -> get() -> count(),
            'contactCount' => $contactCount,
        ];
        return view('company.edit', $data);
    }

    public function contact() {
        $id = Auth::id();
        $contact = Contact::where('company_id', $id) -> get();
        $data = [
            'id' => $id,
            'records' => $contact,
            'count' => $contact -> count()
        ];
        return view('company.contact', $data);
    }

    public function create(Request $request)
    {
        DB::beginTransaction();
        try {
            Company::create([
                'company_id' => $request->companyId,
                'company_name' => $request->companyName,
                'company_ruby' => $request->companyRuby,
                'company_address' => $request->companyAddress,
                'company_HP' => $request->companyHP,
                'recruit_department' => $request->recruitDepartment,
                'recruit_name' => $request->recruitName,
                'recruit_ruby' => $request->recruitRuby,
                'recruit_tel' => $request->recruitTel,
                'recruit_email' => $request->recruitEmail,
                'establishment' => $request->establishment,
                'capital' => $request->capital,
                'sales' => $request->sales,
                'employees' => $request->employees,
                'schoolmate' => $request->schoolmate,
                'recruit_type' => $request->recruitType,
                'recruit_planned_number' => $request->recruitPlannedNumber,
                'location' => $request->location,
                'target' => $request->target,
                'description' => $request->description,
                'company_PR' => $request->companyPR,
                'category' => $request->category,
            ]);
            DB::commit();
            return redirect(route('companyEdit'));
        } catch (\Exception $e) {
            DB::rollBack();
            return ['msg' => $e];
        }
    }


    public function fix(Request $request) {
        DB::beginTransaction();
        try {
            Company::where('company_id', $request -> companyId)->update([
                'company_name' => $request -> companyName,
                'company_ruby' => $request -> companyRuby,
                'company_address' => $request -> companyAddress,
                'company_HP' => $request -> companyHP,
                'recruit_department' => $request -> recruitDepartment,
                'recruit_name' => $request -> recruitName,
                'recruit_ruby' => $request -> recruitRuby,
                'recruit_tel' => $request -> recruitTel,
                'recruit_email' => $request -> recruitEmail,
                'establishment' => $request -> establishment,
                'capital' => $request -> capital,
                'sales' => $request -> sales,
                'employees' => $request -> employees,
                'schoolmate' => $request -> schoolmate,
                'recruit_type' => $request -> recruitType,
                'recruit_planned_number' => $request -> recruitPlannedNumber,
                'location' => $request -> location,
                'target' => $request -> target,
                'description' => $request -> description,
                'company_PR' => $request -> companyPR,
                'category' => $request -> category,
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }

        return redirect(route('companyEdit'));
    }

    public function replyStatus(Request $request) {
        DB::beginTransaction();
        try {
            Contact::find($request->target)->update([
                'status' => $request -> status,
            ]);
            DB::commit();
            return ['msg' => 'ok'];
        } catch (\Exception $e) {
            DB::rollBack();
            return ['msg' => $e];
        }
    }
}
