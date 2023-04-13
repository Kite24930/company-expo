<x-template title="学内合同企業説明会">
    <div class="title text-center p-3">
        <h4>
            2024年3月　三重大学　卒業・修了予定者向け
        </h4>
        <h1 class="m-0 p-3 text-center d-inline-block rounded">
            学内合同企業説明会
        </h1>
        <br>
        <div class="d-inline-block p-3 mt-3 rounded">
            さまざまな業界の優良・人気企業約〇〇社が三重大に集結！
            <br>
            すべての企業が、まだまだ積極採用中！
            <br>
            ぜひ参加して、内定をつかみ取ろう！
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-column flex-md-row mb-6">
        <div class="md-vertical badge bg-primary fs-3 m-2">
            開催概要
        </div>
        <div>
            <ul class="list-group mx-3 mt-3">
                <li class="list-group-item py-1">
                    <p class="fs-5 m-0">日時：2023/<strong class="fs-2 text-danger">5/26(金)</strong></p>
                    <p class="text-small mb-0 ms-5">第１部 ９：３０〜１１：３０</p>
                    <p class="text-small mb-0 ms-5">第２部 １２：３０〜１４：３０</p>
                </li>
                <li class="list-group-item py-1">
                    <p class="fs-5 m-0">場所：三重大学　三翠ホール１Ｆ</p>
                </li>
                <li class="list-group-item py-1">
                    <p class="fs-5 m-0">【備考】</p>
                    <p class="m-0">登録不要・服装自由・入退場自由</p>
                    <p class="m-0">2024年3月 三重大学 卒業（修了）予定者対象（医学部を除く全学部、全学科対象）</p>
                </li>
            </ul>
        </div>
    </div>
    @if($dateCheck)
    <div class="container-md d-flex flex-column justify-content-center align-items-center">
        @foreach($records as $i => $record)
            <div class="container-fluid d-flex flex-column justify-content-center align-items-center m-0 p-0">
                @switch($i)
                    @case(0)
                        <h2>【第一部（9:30〜11:30）】</h2>
                        @break
                    @case(1)
                        <h2>【第二部（12:30〜14:30）】</h2>
                        @break
                @endswitch
                <div class="container-fluid d-flex justify-content-center align-items-center flex-column flex-md-row flex-md-wrap m-0 p-0">
                    @foreach($record as $data)
                        <div class="card m-3">
                            <div class="card-body">
                                <h4 class="card-title">
                                    @if($data -> booth != null)
                                    【No.{{ $data -> booth }}】
                                    @endif
                                    <span class="text-small">[業種]{{ $data -> category }}</span><br>
                                    {{ $data -> company_name }}
                                </h4>
                                <a href="/detail/{{ $data -> company_id }}" class="btn btn-primary">詳細ページへ</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    @else
        <div class="fs-3 text-center m-3">参加企業リストは4/24(月)より順次公開予定！</div>
    @endif
    @vite(['resources/js/index.js'])
</x-template>
