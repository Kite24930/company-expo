<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function edit(Request $request) {
        $id = Auth::id();
        $company = Company::where('company_id', $id);
        $contactCount = Contact::where('company_id', $id)->count();
        $data = [
            'id' => $id,
            'data' => $company -> first(),
            'count' => $company -> get() -> count(),
            'contactCount' => $contactCount,
        ];
        if ($request->old('msg') !== null) {
            $data['msg'] = $request->old('msg');
        } else {
            $data['msg'] = 'メッセージはありません';
        }
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
            $msg = '※正常に登録されました';
            return redirect()->route('companyEdit')->with(compact('msg'));
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
            $msg = '※正常に更新されました';
        } catch (\Exception $e) {
            DB::rollBack();
            $msg = '※更新処理中にエラーが発生しました';
        }

        return redirect()->route('companyEdit')->with('msg', '更新完了');
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
