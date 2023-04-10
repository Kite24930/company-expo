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
            $company = Company::where('company_id', $request->companyId)->first();
//            メール送信の処理
            $to = $request->studentEmail;
            $subject = '【自動送信】'.$company->company_name.' お問い合わせ内容';
            $message = $request->studentDepartment.' '.$request->studentName."様\r\n\r\n";
            $message .= 'この度はお問い合わせいただきありがとうございます。'."\r\n".'お問い合わせいただいた内容をご確認ください。'."\r\n".'後日、お問い合わせいただいた企業よりご回答が送信される予定です。'."\r\n".'もし時間を置いてもご返答がない場合は、直接企業様の採用担当窓口へご連絡ください。'."\r\n\r\n";
            $message .= '【お問い合わせ内容】'."\r\n".'[お問い合わせ企業様]'.$company->company_name."\r\n".'[学籍番号]'.$request->studentNumber."\r\n".'[学部・研究科]'.$request->studentDepartment."\r\n".'[学年]'.$request->studentGrade."\r\n".'[氏名]'.$request->studentName."\r\n".'[メールアドレス]このメールが届いているメールアドレス'."\r\n".'[件名]'.$request->title."\r\n".'[お問い合わせ内容]'.$request->detail."\r\n\r\n".'※このメールは送信専用ですので、ご返信いただいていも返信できません。'."\r\n\r\n".'2023年5月 学内合同企業説明会';
            $headers = 'From:no-reply@company-expo.mie-projectm.com';
            mb_send_mail($to, $subject, $message, $headers);
            $to = $company->recruit_email;
            $subject = '【自動送信】学生より'.$company->company_name.'様へのお問い合わせ内容';
            $message = $company->company_name.' '.$company->recruit_name."様\r\n\r\n";
            $message .= '2023年5月に開催致しました三重大学工学部同窓会主催 学内合同企業説明会にて、学生より問い合わせがございました。'."\r\n".'お問い合わせいただいた内容をご確認ください。'."\r\n".'お手数をおかけ致しますが、問い合わせ内容のご返答をよろしくお願い致します。'."\r\n\r\n";
            $message .= '【お問い合わせ内容】'."\r\n".'[お問い合わせ企業様]'.$company->company_name."\r\n".'[学籍番号]'.$request->studentNumber."\r\n".'[学部・研究科]'.$request->studentDepartment."\r\n".'[学年]'.$request->studentGrade."\r\n".'[氏名]'.$request->studentName."\r\n".'[メールアドレス]このメールが届いているメールアドレス'."\r\n".'[件名]'.$request->title."\r\n".'[お問い合わせ内容]'.$request->detail."\r\n\r\n".'※このメールは送信専用ですので、ご返信いただいていも返信できません。'."\r\n\r\n".'2023年5月 学内合同企業説明会';
            $headers = 'From:no-reply@company-expo.mie-projectm.com';
            mb_send_mail($to,  $subject, $message, $headers);
            return redirect('/result/'.$request->companyId.'/'.$company->company_name.'/'.$request->studentNumber.'/'.$request->studentDepartment.'/'.$request->studentGrade.'/'.$request->studentName.'/'.$request->studentEmail.'/'.$request->title.'/'.$request->detail);
        } catch (\Exception $e) {
            DB::rollBack();
            return ['msg' => $e];
        }
    }

    public function result($company_id, $company_name, $student_number, $student_department, $student_grade, $student_name, $student_email, $title, $detail) {
        $data = [
            'company_id' => $company_id,
            'company_name' => $company_name,
            'student_number' => $student_number,
            'student_department' => $student_department,
            'student_grade' => $student_grade,
            'student_name' => $student_name,
            'student_email' => $student_email,
            'title' => $title,
            'detail' => $detail,
        ];
        return view('student.contact-result', $data);
    }
}
