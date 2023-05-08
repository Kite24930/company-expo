<x-template title="企業詳細">
    <div class="container-md text-center">
        <h1 class="pt-3">{{ htmlspecialchars($record -> company_name) }}　詳細</h1>
    </div>
    <div id="detailList" class="d-flex justify-content-center align-items-center flex-column">
        <ul class="list-group container-md m-0 p-3">
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">企業名 <span class="text-small">（ふりがな）</span></p>
                <p class="form-label">{{ htmlspecialchars($record -> company_name) }} <span class="text-small">({{ htmlspecialchars($record -> company_ruby) }})</span></p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">業種・業態</p>
                <p class="form-label">{{ htmlspecialchars($record -> category) }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">HP or 採用ページ</p>
                <p class="form-label"><a href="{{ htmlspecialchars($record -> company_HP) }}">{{ htmlspecialchars($record -> company_HP) }}</a></p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">事業内容</p>
                <p class="form-label">{{ htmlspecialchars($record -> description) }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">企業PR</p>
                <p class="form-label">{{ htmlspecialchars($record -> company_PR) }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">本社所在地</p>
                <p class="form-label">{{ htmlspecialchars($record -> company_address) }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">設立年月</p>
                <p class="form-label">{{ \Carbon\Carbon::createFromDate($record->establishment) -> format('Y年m月') }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">資本金</p>
                <p class="form-label">{{ $record -> capital }} <span class="text-small">(百万円)</span></p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">売上金</p>
                <p class="form-label">{{ $record -> sales }} <span class="text-small">(百万円)</span></p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">従業員数</p>
                <p class="form-label">{{ $record -> employees }} <span class="text-small">(人)</span></p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">三重大学OB・OG入社人数</p>
                <p class="form-label">{{ $record -> schoolmate }} <span class="text-small">(人)</span></p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">対象学生</p>
                <p class="form-label">{{ htmlspecialchars($record -> target) }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">募集職種</p>
                <p class="form-label">{{ htmlspecialchars($record -> recruit_type) }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">採用予定人数</p>
                <p class="form-label">{{ $record -> recruit_planned_number }} <span class="text-small">(人)</span></p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">勤務地</p>
                <p class="form-label">{{ htmlspecialchars($record -> location) }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">採用窓口部署名</p>
                <p class="form-label">{{ htmlspecialchars($record -> recruit_department) }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">採用窓口担当者名 <span class="text-small">(ふりがな)</span></p>
                <p class="form-label">{{ htmlspecialchars($record -> recruit_name) }} <span class="text-small">({{ htmlspecialchars($record -> recruit_ruby) }})</span></p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">採用窓口電話番号</p>
                <p class="form-label"><a href="tel:{{ $record->recruit_tel }}">{{ $record->recruit_tel }}</a></p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">採用窓口メールアドレス</p>
                <p class="form-label"><a href="mailto:{{ htmlspecialchars($record->recruit_email) }}">{{ htmlspecialchars($record->recruit_email) }}</a></p>
            </li>
        </ul>
        <a href="/contact/{{ $record -> company_id }}" class="btn btn-primary mb-3">お問い合わせフォーム</a>
    </div>
    @vite(['resources/js/detail.js'])
</x-template>
