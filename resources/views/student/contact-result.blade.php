<x-template :title="$company_name . ' お問い合わせ完了'">
    <div class="d-flex align-items-center">
        <h1>{{ $company_name }} 問い合わせ完了</h1>
    </div>
    <div class="container-md d-flex justify-content-center align-items-center flex-column my-3">
        <div>
            お問い合わせが完了しました。以下の内容が企業様に送信されています。同様の内容を入力していただいたメールアドレスにも送信してありますので、そちらでもご確認ください。
        </div>
        <ul class="list-group container-md m-o p-3">
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">企業名</p>
                <p class="form-label">{{ $company_name }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">学籍番号</p>
                <p class="form-label">{{ $student_number }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">学部・研究科</p>
                <p class="form-label">{{ $student_department }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">学年</p>
                <p class="form-label">{{ $student_grade }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">氏名</p>
                <p class="form-label">{{ $student_name }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">メールアドレス</p>
                <p class="form-label">{{ $student_email }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">件名</p>
                <p class="form-label">{{ $title }}</p>
            </li>
            <li class="list-group-item">
                <p class="form-text border-bottom d-inline-block">お問い合わせ内容</p>
                <p class="form-label">{{ $detail }}</p>
            </li>
        </ul>
        <div class="text-center">
            <a href="/detail/{{ $company_id }}" class="btn btn-success text-white">{{ $company_name }} 詳細ページに戻る</a>
            <a href="/" class="btn btn-primary text-white">TOPページに戻る</a>
        </div>
    </div>
    @vite(['resources/js/detail.js'])
</x-template>
