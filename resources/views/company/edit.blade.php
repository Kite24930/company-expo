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
{{--        <div class="mb-3">--}}
{{--            <label for="companyRuby" class="form-label">企業名（ふりがな）</label>--}}
{{--            <input type="text" class="form-control" id="companyRuby" aria-describedby="companyRubyHelp"--}}
{{--            @if(isset($data))--}}
{{--                value="{{ $data -> company_ruby }}"--}}
{{--            @endif--}}
{{--            >--}}
{{--            <div id="companyRubyHelp" class="form-text"></div>--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label for="companyAddress" class="form-label">本社所在地</label>--}}
{{--            <input type="text" class="form-control" id="companyAddress" aria-describedby="companyAddressHelp"--}}
{{--            @if(isset($data))--}}
{{--                value="{{ $data -> company_address }}"--}}
{{--            @endif--}}
{{--            >--}}
{{--            <div id="companyAddressHelp" class="form-text"></div>--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label for="establishment" class="form-label">設立年月日</label>--}}
{{--            <input type="text" class="form-control" id="establishment" aria-describedby="cestablishmentHelp"--}}
{{--            @if(isset($data))--}}
{{--                value="{{ $data -> company_address }}"--}}
{{--            @endif--}}
{{--            >--}}
{{--            <div id="establishmentHelp" class="form-text"></div>--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label for="companyHP" class="form-label">会社HP等</label>--}}
{{--            <input type="url" class="form-control" id="companyHP" aria-describedby="companyHPHelp"--}}
{{--            @if(isset($data))--}}
{{--                value="{{ $data -> company_HP }}"--}}
{{--            @endif--}}
{{--            >--}}
{{--            <div id="companyHPHelp" class="form-text">HPのURLや採用ページ等のURLを入力してください</div>--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label for="category" class="form-label">業種・業態</label>--}}
{{--            <input type="text" class="form-control" id="category" aria-describedby="categoryHelp"--}}
{{--            @if(isset($data))--}}
{{--                value="{{ $data -> category }}"--}}
{{--            @endif--}}
{{--            >--}}
{{--            <div id="categoryHelp" class="form-text"></div>--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label for="description" class="form-label">事業内容</label>--}}
{{--            <textarea type="text" class="form-control" id="description" aria-describedby="descriptionHelp">--}}
{{--                @if(isset($data))--}}
{{--                    {{ $data -> description }}--}}
{{--                @endif--}}
{{--            </textarea>--}}
{{--            <div id="descriptionHelp" class="form-text"></div>--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label for="companyPR" class="form-label">企業PR</label>--}}
{{--            <textarea type="text" class="form-control" id="companyPR" aria-describedby="companyPRHelp">--}}
{{--                @if(isset($data))--}}
{{--                    {{ $data -> company_PR }}--}}
{{--                @endif--}}
{{--            </textarea>--}}
{{--            <div id="companyPRHelp" class="form-text"></div>--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label for="category" class="form-label">三重大学卒業生入社人数</label>--}}
{{--            <input type="text" class="form-control" id="category" aria-describedby="categoryHelp"--}}
{{--                @if(isset($data))--}}
{{--                    value="{{ $data -> category }}"--}}
{{--                @endif--}}
{{--            >--}}
{{--            <div id="categoryHelp" class="form-text"></div>--}}
{{--        </div>--}}
    </form>
</x-template>
