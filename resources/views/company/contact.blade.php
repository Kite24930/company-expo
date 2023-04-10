<x-template title="企業問い合わせ一覧">
    <div class="container-md">
        <h1>問い合わせ一覧</h1>
        <p>届いた問い合わせを一覧表示します。</p>
    </div>
    <div class="container-md text-end">
        <a href="{{ route('companyEdit') }}" class="btn btn-warning">企業情報登録・編集</a>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-column flex-md-row flex-md-wrap">
        @foreach($records as $record)
            <div class="card m-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $record->student_department }} {{ $record->student_name }}</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="form-text">学籍番号</p>
                            <p class="form-label">{{ $record->student_number }}</p>
                        </li>
                        <li class="list-group-item">
                            <p class="form-text">学部・研究科</p>
                            <p class="form-label">{{ $record->student_department }}</p>
                        </li>
                        <li class="list-group-item">
                            <p class="form-text">学年</p>
                            <p class="form-label">{{ $record->student_grade }}</p>
                        </li>
                        <li class="list-group-item">
                            <p class="form-text">氏名</p>
                            <p class="form-label">{{ $record->student_name }}</p>
                        </li>
                        <li class="list-group-item">
                            <p class="form-text">メールアドレス</p>
                            <p class="form-label"><a href="mailto:{{ $record->student_email }}">{{ $record->student_email }}</a></p>
                        </li>
                        <li class="list-group-item">
                            <p class="form-text">件名</p>
                            <p class="form-label">{{ $record->title }}</p>
                        </li>
                        <li class="list-group-item">
                            <p class="form-text">お問い合わせ内容</p>
                            <p class="form-label">{{ $record->detail }}</p>
                        </li>
                        <li class="list-group-item">
                            <p class="form-text">対応状況</p>
                            <select name="status-{{ $record->id }}" id="status-{{ $record->id }}" class="form-select" data-bs-target="{{ $record->id }}">
                                @switch($record->status)
                                    @case(1)
                                    <option value="1" selected>未対応</option>
                                    <option value="2">対応中</option>
                                    <option value="3">対応完了</option>
                                    @break
                                    @case(2)
                                    <option value="1">未対応</option>
                                    <option value="2" selected>対応中</option>
                                    <option value="3">対応完了</option>
                                    @break
                                    @case(3)
                                    <option value="1">未対応</option>
                                    <option value="2">対応中</option>
                                    <option value="3" selected>対応完了</option>
                                    @break
                                @endswitch
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
    @vite(['resources/js/reply.js'])
</x-template>
