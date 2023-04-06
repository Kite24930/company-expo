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
    <div class="d-flex justify-content-center align-items-center flex-column flex-md-row">
        <div class="md-vertical badge bg-primary fs-3 m-2">
            開催概要
        </div>
        <div>
            <ul class="list-group mx-3 mt-3">
                <li class="list-group-item py-1">
                    <p class="fs-5 m-0">日時：2023/<strong class="fs-2 text-danger">5/26(金)</strong></p>
                    <p class="text-small mb-0 ms-5">第１部 ９：３０〜１１：３０</p>
                    <p class="text-small mb-0 ms-5">第２部 １２：３０〜１５：３０</p>
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
    <div class="d-flex justify-content-center align-items-center flex-column flex-md-row">
        <div class="text-center border border-success rounded pages m-2 p-2">
            <h3>学生用ページ</h3>
            <p>参加企業の検索や詳細が確認できます。<br>企業への問い合わせ等も可能です。</p>
            @guest
                <div class="btn-group-vertical">
                    <a href="/register?type=student" class="btn btn-outline-success">新規登録</a>
                    <a href="/login?type=student" class="btn btn-outline-success">ログイン</a>
                </div>
            @endguest
            @auth
                @if($status === 1)
                    <div class="btn-group">
                        <a href="/student/list" class="btn btn-success">企業一覧</a>
                    </div>
                @endif
            @endauth
        </div>
        <div class="text-center border border-primary rounded pages m-2 p-2">
            <h3>企業用ページ</h3>
            <p>企業情報等の登録、編集を行うことができます。</p>
            @guest
                <div class="btn-group-vertical">
                    <a href="/register?type=company" class="btn btn-outline-primary">新規登録</a>
                    <a href="/login?type=company" class="btn btn-outline-primary">ログイン</a>
                </div>
            @endguest
            @auth
                @if($status === 2)
                    <div class="btn-group">
                        <a href="/company/edit/{{ $id }}" class="btn btn-primary">企業一覧</a>
                    </div>
                @endif
            @endauth
        </div>
    </div>
    @vite(['resources/js/index.js'])
</x-template>
