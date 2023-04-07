<x-template title="企業詳細">
    <div class="container-md text-center">
        <h1 class="pt-3">企業詳細</h1>
    </div>
    <div class="w-10/12 m-auto">
        <table class="table table-bordered text-center center m-auto w-auto my-4 border bg-light table-striped" style="font-size: clamp(8px, 2.5vw, 16px)">
            <tr>
                <td class="p-2">企業名(ふりがな)</td>
                <td class="p-2">{{$data->company_name }} ({{$data->company_ruby }})</td>
            </tr>
            <tr>
                <td class="p-2">企業住所</td>
                <td class="p-2">{{$data->company_address}}</td>
            </tr>
            <tr>
                <td class="p-2">設立年月日</td>
                <td class="p-2">{{$data->establishment}}</td>
            </tr>
            <tr>
                <td class="p-2">資本金</td>
                <td class="p-2">{{$data->capital}}</td>
            </tr>
            <tr>
                <td class="p-2">売上金</td>
                <td class="p-2">{{$data->sales}}</td>
            </tr>
            <tr>
                <td class="p-2">従業員数</td>
                <td class="p-2">{{$data->employees}}</td>
            </tr>
            <tr>
                <td class="p-2">HP URL</td>
                <td class="p-2">{{$data->company_HP}}</td>
            </tr>
            <tr>
                <td class="p-2">企業カテゴリ</td>
                <td class="p-2">{{$data->category}}</td>
            </tr>
            <tr>
                <td class="p-2">事業内容</td>
                <td class="p-2">{{$data->description}}</td>
            </tr>
            <tr>
                <td class="p-2">企業PR</td>
                <td class="p-2">{{$data->company_PR}}</td>
            </tr>
            <tr>
                <td class="p-2">三重大学同窓生入社人数</td>
                <td class="p-2">{{$data->schoolmate}}</td>
            </tr>
            <tr>
                <td class="p-2">募集職種</td>
                <td class="p-2">{{$data->recruit_type}}</td>
            </tr>
            <tr>
                <td class="p-2">採用予定人数</td>
                <td class="p-2">{{$data->recruit_planned_number}}</td>
            </tr>
            <tr>
                <td class="p-2">勤務地</td>
                <td class="p-2">{{$data->location}}</td>
            </tr>
            <tr>
                <td class="p-2">対象学生</td>
                <td class="p-2">{{$data->target}}</td>
            </tr>
            <tr>
                <td class="p-2">採用窓口部署名</td>
                <td class="p-2">{{$data->recruit_department}}</td>
            </tr>
            <tr>
                <td class="p-2">採用窓口電話番号</td>
                <td class="p-2">{{$data->recruit_tel}}</td>
            </tr>
            <tr>
                <td class="p-2">採用窓口メールアドレス</td>
                <td class="p-2">{{$data->recruit_email}}</td>
            </tr>
        </table>
        <a href="/student/detail" class="btn btn-primary d-grid gap-2 col-4 mx-auto mb-5">お問い合わせ</a>
    </div>
    @vite(['resources/js/detail.js'])
</x-template>
