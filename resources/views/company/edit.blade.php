<x-template title="企業情報編集ページ">
    <div class="container-md">
        <h1>企業情報編集ページ</h1>
        <p>Webページに記載する企業情報を登録、編集することができます。</p>
    </div>
    <form id="companyForm" method="POST" action="/api/company" class="container-md my-3">
        @csrf
        <input type="hidden" id="companyId" name="companyId" value="{{ $id }}">
        @if($count === 0)
            <x-company-input id="companyName" name="企業名" type="text" require="true"></x-company-input>
            <x-company-input id="companyRuby" name="企業名（ふりがな）" type="text" require="true"></x-company-input>
            <x-company-input id="companyAddress" name="本社所在地" type="text" require="true"></x-company-input>
            <x-company-input id="establishment" name="設立年月日" type="date" require="true"></x-company-input>
            <x-company-input id="capital" name="資本金" type="number" require="true">単位：百万円※数字のみ入力してください（例：資本金4000万円→40）</x-company-input>
            <x-company-input id="sales" name="売上高" type="number" require="true">単位：百万円※数字のみ入力してください（例：売上高1億7000万円→170）</x-company-input>
            <x-company-input id="employees" name="従業員数" type="number" require="true">単位：人※数字のみ入力してください</x-company-input>
            <x-company-input id="companyHP" name="会社HP等" type="url" require="true">会社のHPや採用ページのURLを入力してください。</x-company-input>
            <x-company-input id="category" name="業種・業態" type="text" require="true"></x-company-input>
            <x-company-textarea id="description" name="事業内容" require="true"></x-company-textarea>
            <x-company-textarea id="companyPR" name="企業PR" require="true"></x-company-textarea>
            <x-company-input id="schoolmate" name="三重大学卒業生入社人数" type="number" require="true">単位：人※数字のみ入力してください</x-company-input>
            <x-company-input id="recruitType" name="募集職種" type="text" require="true"></x-company-input>
            <x-company-input id="recruitPlannedNumber" name="採用予定人数" type="number">単位：人※数字のみ入力してください</x-company-input>
            <x-company-input id="location" name="勤務地" type="text" require="true"></x-company-input>
            <x-company-input id="target" name="対象学生" type="text">※理系学部生、文系学部生、理系院生、文系院生より入力してください</x-company-input>
            <x-company-input id="recruitDepartment" name="採用窓口部署名" type="text"></x-company-input>
            <x-company-input id="recruitName" name="採用窓口担当者" type="text" require="true"></x-company-input>
            <x-company-input id="recruitRuby" name="採用窓口担当者（ふりがな）" type="text" require="true"></x-company-input>
            <x-company-input id="recruitTel" name="採用窓口電話番号" type="tel"></x-company-input>
            <x-company-input id="recruitEmail" name="採用窓口メールアドレス" type="email" require="true"></x-company-input>
        @else
            @method('patch')
            @foreach($data['records'] as $key => $value)
                【key:{{ $key }}】value:{{ $value }}<br>
            @endforeach
{{--            <x-company-input-edit id="companyName" name="企業名" :data="$data->company_name"></x-company-input-edit>--}}
{{--            <x-company-input-edit id="companyRuby" name="企業名（ふりがな）" type="text" require="true" :data="$data->company_ruby"></x-company-input-edit>--}}
{{--            <x-company-input-edit id="companyAddress" name="本社所在地" type="text" require="true" :data="$data->company_address"></x-company-input-edit>--}}
{{--            <x-company-input-edit id="establishment" name="設立年月日" type="date" require="true" :data="$data->establishment"></x-company-input-edit>--}}
{{--            <x-company-input-edit id="capital" name="資本金" type="number" require="true" :data="$data->capital">単位：百万円※数字のみ入力してください（例：資本金4000万円→40）</x-company-input-edit>--}}
{{--            <x-company-input-edit id="sales" name="売上高" type="number" require="true" :data="$data->sales">単位：百万円※数字のみ入力してください（例：売上高1億7000万円→170）</x-company-input-edit>--}}
{{--            <x-company-input-edit id="employees" name="従業員数" type="number" require="true" :data="$data->employees">単位：人※数字のみ入力してください</x-company-input-edit>--}}
{{--            <x-company-input-edit id="companyHP" name="会社HP等" type="url" require="true" :data="$data->company_HP">会社のHPや採用ページのURLを入力してください。</x-company-input-edit>--}}
{{--            <x-company-input-edit id="category" name="業種・業態" type="text" require="true" :data="$data->category"></x-company-input-edit>--}}
{{--            <x-company-textarea-edit id="description" name="事業内容" require="true" :data="$data->description"></x-company-textarea-edit>--}}
{{--            <x-company-textarea-edit id="companyPR" name="企業PR" require="true" :data="$data->company_PR"></x-company-textarea-edit>--}}
{{--            <x-company-input-edit id="schoolmate" name="三重大学卒業生入社人数" type="number" require="true" :data="$data->schoolmate">単位：人※数字のみ入力してください</x-company-input-edit>--}}
{{--            <x-company-input-edit id="recruitType" name="募集職種" type="text" require="true" :data="$data->recruit_type"></x-company-input-edit>--}}
{{--            <x-company-input-edit id="recruitPlannedNumber" name="採用予定人数" type="number" :data="$data->recruit_planned_number">単位：人※数字のみ入力してください</x-company-input-edit>--}}
{{--            <x-company-input-edit id="location" name="勤務地" type="text" require="true" :data="$data->location"></x-company-input-edit>--}}
{{--            <x-company-input-edit id="target" name="対象学生" type="text" :data="$data->target">※理系学部生、文系学部生、理系院生、文系院生より入力してください</x-company-input-edit>--}}
{{--            <x-company-input-edit id="recruitDepartment" name="採用窓口部署名" type="text" :data="$data->recruit_department"></x-company-input-edit>--}}
{{--            <x-company-input-edit id="recruitName" name="採用窓口担当者" type="text" require="true" :data="$data->recruit_name"></x-company-input-edit>--}}
{{--            <x-company-input-edit id="recruitRuby" name="採用窓口担当者（ふりがな）" type="text" require="true" :data="$data->recruit_ruby"></x-company-input-edit>--}}
{{--            <x-company-input-edit id="recruitTel" name="採用窓口電話番号" type="tel" :data="$data->recruit_tel"></x-company-input-edit>--}}
{{--            <x-company-input-edit id="recruitEmail" name="採用窓口メールアドレス" type="email" require="true" :data="$data->recruit_email"></x-company-input-edit>--}}
        @endif
        <div class="text-center">
            <div id="editBtn" class="btn btn-success text-white">登録・更新</div>
        </div>
    </form>
    @vite(['resources/js/edit.js'])
</x-template>
