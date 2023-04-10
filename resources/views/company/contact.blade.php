<x-template title="企業問い合わせ一覧">
    <div class="container-md">
        <h1>問い合わせ一覧</h1>
        <p>届いた問い合わせを一覧表示します。</p>
    </div>
    <div class="container-md text-end">
        <a href="{{ route('companyEdit') }}" class="btn btn-warning">企業情報登録・編集</a>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        @foreach($records as $record)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>
    @vite(['resources/js/reply.js'])
</x-template>
