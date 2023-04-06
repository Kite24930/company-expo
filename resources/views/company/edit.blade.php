<x-template title="企業情報編集ページ">
    <h1>企業情報編集ページ</h1>
    <p>Webページに記載する企業情報を登録、編集することができます。</p>
    <form method="POST" action="/api/company">
        <x-company-input id="companyName" name="企業名"
            @if(isset($data))
                data="{{ $data -> company_name }}"
            @endif
        ></x-company-input>
        <div class="mb-3">
            <label for="companyName" class="form-label">企業名</label>
            <input type="text" class="form-control" id="companyName" aria-describedby="companyNameHelp"
            @if(isset($data))
                value="{{ $data -> company_name }}"
            @endif
            >
            <div id="companyNameHelp" class="form-text"></div>
        </div>
    </form>
</x-template>
