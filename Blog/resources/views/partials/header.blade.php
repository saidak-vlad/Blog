<nav class="bg-dark text-white font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6  shadow sm:items-baseline mb-5">
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="text-white nav-link active" href="{{route('posts.index')}}">Главная</a>
        </li>
        <li class="nav-item">
        @auth()
            <a class="text-warning nav-link active" href="{{ route('logout') }}">Выход</a>
        @endauth

        @guest()
                <a class="text-warning nav-link active" href="{{ route('login') }}">Вход</a>
        <li class="nav-item">
            <a class="text-warning nav-link active" href="{{ route('admin.login') }}">Адмін</a>
        </li>
        @endguest


    </ul>
</nav>
