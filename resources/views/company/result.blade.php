<x-template title="企業情報編集ページ">
    <div class="container-md">
        <h1>企業情報編集ページ</h1>
        <p>Webページに記載する企業情報を登録、編集することができます。</p>
    </div>
    <hr>
    <div class="bg-info container-md text-center fs-4">
        {{ $msg }}
        <br>
        {{ date('Y-m-d H:i:s') }}
    </div>
    <hr>
    <div class="text-center m-3">
        <a href="{{ route('companyEdit') }}" class="btn btn-success">編集ページに戻る</a>
    </div>
    @vite(['resources/js/result.js'])
</x-template>
