<x-template title="企業情報編集ページ">
    <h1>企業情報編集ページ</h1>
    <p>Webページに記載する企業情報を登録、編集することができます。</p>
    <form id="companyForm" method="POST" action="/api/company" class="container-md">
        @csrf
        @if($count === 0)
            <x-company-input id="companyName" name="企業名" type="text" require="true"></x-company-input>
            <x-company-input id="companyRuby" name="企業名（ふりがな）" type="text" require="true"></x-company-input>
            <x-company-input id="companyAddress" name="本社所在地" type="text" require="true"></x-company-input>
            <x-company-input id="establishment" name="設立年月日" type="date" require="true"></x-company-input>
            <x-company-input id="capital" name="資本金" type="tel" require="true"></x-company-input>
            <x-company-input id="sales" name="売上高" type="tel" require="true"></x-company-input>
            <x-company-input id="employees" name="従業員数" type="tel" require="true"></x-company-input>
            <x-company-input id="companyHP" name="会社HP等" type="url" require="true">会社のHPや採用ページのURLを入力してください。</x-company-input>
            <x-company-input id="category" name="業種・業態" type="text" require="true"></x-company-input>
            <x-company-textarea id="description" name="事業内容" require="true"></x-company-textarea>
            <x-company-textarea id="companyPR" name="企業PR" require="true"></x-company-textarea>
            <x-company-input id="schoolmate" name="三重大学卒業生入社人数" type="tel" require="true"></x-company-input>
            <x-company-input id="recruitType" name="募集職種" type="text" require="true"></x-company-input>
            <x-company-input id="recruitPlannedNumber" name="採用予定人数" type="tel"></x-company-input>
            <x-company-input id="location" name="勤務地" type="text" require="true"></x-company-input>
            <x-company-input id="target" name="対象学生" type="text"></x-company-input>
            <x-company-input id="recruitDepartment" name="採用窓口部署名" type="text"></x-company-input>
            <x-company-input id="recruitName" name="採用窓口担当者" type="text" require="true"></x-company-input>
            <x-company-input id="recruitRuby" name="採用窓口担当者（ふりがな）" type="text" require="true"></x-company-input>
            <x-company-input id="recruitTel" name="採用窓口電話番号" type="tel"></x-company-input>
            <x-company-input id="recruitEmail" name="採用窓口メールアドレス" type="email" require="true"></x-company-input>
        @else
            @method('patch')
            <x-company-input-edit id="companyName" name="企業名" :data="$data->company_name"></x-company-input-edit>
        @endif
        <button id="editBtn" class="btn btn-success text-white">登録・更新</button>
    </form>
    @vite(['resources/js/edit.js'])
</x-template>
