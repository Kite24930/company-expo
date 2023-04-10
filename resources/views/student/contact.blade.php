<x-template :title="$record -> company_name + 'お問い合わせ'">
    <div class="d-flex align-items-center">
        <h1>{{ $record -> company_name }} 問い合わせフォーム</h1>
    </div>
    <div id="contactForm" class="d-flex justify-content-center align-items-center flex-column">
        <form action="/api/contact" method="POST">
            <input type="hidden" id="companyId" name="companyId" value="{{ $record -> company_id }}">
            <x-company-input id="studentNumber" name="学籍番号" type="text" require="true"></x-company-input>
            <x-company-input id="studentDepartment" name="学部・研究科" type="text" require="true"></x-company-input>
            <x-company-input id="studentGrade" name="学年" type="number" require="true"></x-company-input>
            <x-company-input id="studentName" name="氏名" type="text" require="true"></x-company-input>
            <x-company-input id="studentEmail" name="メールアドレス" type="email" require="true"></x-company-input>
            <x-company-input id="title" name="件名" type="text" require="true"></x-company-input>
            <x-company-textarea id="detail" name="お問い合わせ内容" require="true"></x-company-textarea>
            <div class="text-center">
                <div id="editBtn" class="btn btn-success text-white">登録・更新</div>
            </div>
        </form>
    </div>
</x-template>
