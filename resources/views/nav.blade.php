<nav class="navbar navbar-expand navbar-dark blue-gradient">
    <a href="/" class="navbar-brand"><i class="far fa-sticky-note mr-1"></i>memo</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="" class="nav-link">ユーザー登録</a></li>
        <li class="nav-item"><a href="" class="nav-link">ログイン</a></li>
        <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-pen mr-1"></i>投稿する</a></li>
        <!--Doropdown-->
        <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle"></i></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <button class="dropdown-item" type="button" onclick="location.href=''">
                    マイページ
                </button>
                <div class="dropdown-divider"></div>
                <button class="dropdown-item" form="logout-button" type="submit">
                    ログアウト
                </button>
            </div>
        </li>
        <form action="" id="logout-button" method="POST"></form>
    </ul>
</nav>
