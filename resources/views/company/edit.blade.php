<x-template title="企業情報編集ページ">
    <h1>企業情報編集ページ</h1>
    <p>Webページに記載する企業情報を登録、編集することができます。</p>
    <form method="POST" action="/api/company">
        @php
            echo isset($data);
        @endphp
{{--        @if(isset($data))--}}
{{--            <x-company-input-edit id="companyName" name="企業名" :data="$data->company_name"></x-company-input-edit>--}}
{{--        @else--}}
{{--            <x-company-input id="companyName" name="企業名"></x-company-input>--}}
{{--        @endif--}}
    </form>
    @vite(['resources/js/edit.js'])
</x-template>
