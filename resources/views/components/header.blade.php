<header class="container-fluid d-flex justify-content-between align-items-center bg-primary position-sticky top-0 start-0">
    <div class="headerLink">
        <a href="/" class="text-white text-decoration-none fs-1">
            <i class="bi bi-building"></i>学内合同企業説明会
        </a>
    </div>
    @auth
        <div class="logout">
            <form method="POST" action="{{ route('logout) }}">
                @csrf
                <button type="submit" class="btn btn-warning">ログアウト</button>
            </form>
        </div>
    @endauth
</header>
