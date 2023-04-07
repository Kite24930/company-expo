<x-template title="企業詳細">
    <div class="container-md text-center">
        <h1 class="pt-3">企業詳細</h1>
    </div>
    <div class="w-10/12 m-auto">
        <table class="table table-bordered text-center center m-4 border bg-light table-striped container-md" style="font-size: clamp(8px, 2.5vw, 16px)">
            <tr class="fs-5">
                <td class="p-2">企業名<br>(ふりがな)</td>
                <td class="p-2">{{ $record->company_name }}<br>({{ $record->company_ruby }})</td>
            </tr>
            <tr>
                <td class="p-2">企業住所</td>
                <td class="p-2">{{ $record->company_address }}</td>
            </tr>
            <tr>
                <td class="p-2">設立年月</td>
                <td class="p-2">{{ \Carbon\Carbon::createFromDate($record->establishment)->format('Y年m月') }}</td>
            </tr>
            <tr>
                <td class="p-2">資本金</td>
                <td class="p-2">{{ $record->capital }}<span class="text-small">(百万円)</span></td>
            </tr>
            <tr>
                <td class="p-2">売上金</td>
                <td class="p-2">{{ $record->sales }}<span class="text-small">(百万円)</span></td>
            </tr>
            <tr>
                <td class="p-2">従業員数</td>
                <td class="p-2">{{ $record->employees }}<span class="text-small">(人)</span></td>
            </tr>
            <tr>
                <td class="p-2">HP URL</td>
                <td class="p-2"><a href="{{ $record->company_HP }}">{{ $record->company_HP }}</a></td>
            </tr>
            <tr>
                <td class="p-2">企業カテゴリ</td>
                <td class="p-2">{{ $record->category }}</td>
            </tr>
            <tr>
                <td class="p-2">事業内容</td>
                <td class="p-2">{{ $record->description }}</td>
            </tr>
            <tr>
                <td class="p-2">企業PR</td>
                <td class="p-2">{{ $record->company_PR }}</td>
            </tr>
            <tr>
                <td class="p-2">三重大学同窓生入社人数</td>
                <td class="p-2">{{ $record->schoolmate }}<span class="text-small">(人)</span></td>
            </tr>
            <tr>
                <td class="p-2">募集職種</td>
                <td class="p-2">{{ $record->recruit_type }}</td>
            </tr>
            <tr>
                <td class="p-2">採用予定人数</td>
                <td class="p-2">{{ $record->recruit_planned_number }}<span class="text-small">(人)</span></td>
            </tr>
            <tr>
                <td class="p-2">勤務地</td>
                <td class="p-2">{{ $record->location }}</td>
            </tr>
            <tr>
                <td class="p-2">対象学生</td>
                <td class="p-2">{{ $record->target }}</td>
            </tr>
            <tr>
                <td class="p-2">採用窓口部署名</td>
                <td class="p-2">{{ $record->recruit_department }}</td>
            </tr>
            <tr>
                <td class="p-2">採用窓口電話番号</td>
                <td class="p-2"><a href="tel:{{ $record->recruit_tel }}">{{ $record->recruit_tel }}</a></td>
            </tr>
            <tr>
                <td class="p-2">採用窓口メールアドレス</td>
                <td class="p-2"><a href="mailto:{{ $record->recruit_email }}">{{ $record->recruit_email }}</a></td>
            </tr>
        </table>
        <a href="/student/detail" class="btn btn-primary d-grid gap-2 col-4 mx-auto mb-5">お問い合わせ</a>
    </div>
    @vite(['resources/js/detail.js'])
</x-template>
