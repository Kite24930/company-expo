<x-template title="参加企業一覧">
    <div class="container-md">
        <h1>参加企業一覧</h1>
    </div>
    <div class="container-md d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2>【第一部（9:30〜11:30）】</h2>
            <div class="d-flex justify-content-center align-items-center">
                @foreach($first as $record)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">【No.{{ $record -> booth }}】{{ $record -> company_name }}</h5>
                            <p class="card-text">{{ $record -> company_PR }}</p>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    【業種】{{ $record -> category }}
                                </li>
                                <li class="list-group-item">
                                    【募集職種】{{ $record -> recruit_type }}
                                </li>
                                <li class="list-group-item">
                                    【資本金】{{ $record -> capital }}
                                </li>
                                <li class="list-group-item">
                                    【売上高】{{ $record -> sales }}
                                </li>
                            </ul>
                            <a href="/student/detail/{{ $record -> company_id }}" class="btn btn-primary">詳細ページへ</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2>【第二部（12:30〜14:30）】</h2>
            <div class="d-flex justify-content-center align-items-center">
                @foreach($second as $record)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">【No.{{ $record -> booth }}】{{ $record -> company_name }}</h5>
                            <p class="card-text">{{ $record -> company_PR }}</p>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    【業種】{{ $record -> category }}
                                </li>
                                <li class="list-group-item">
                                    【募集職種】{{ $record -> recruit_type }}
                                </li>
                                <li class="list-group-item">
                                    【資本金】{{ $record -> capital }}
                                </li>
                                <li class="list-group-item">
                                    【売上高】{{ $record -> sales }}
                                </li>
                            </ul>
                            <a href="/student/detail/{{ $record -> company_id }}" class="btn btn-primary">詳細ページへ</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @vite(['resources/js/list.js'])
</x-template>
