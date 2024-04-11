<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SNABLOGISTIK') }}</title>
    <link rel="icon" href="https://icons8.com/icon/SFC6V6WQ1uvH/star-filled" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="{{ asset('js/main.js') }}"> -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66148354a0c6737bd129bfb7/1hr0221jr';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body>
    <div id="app">
    <header class="baner-one">
    <div class="conteiner">
            <nav class="menu">
                <ul class="wrapper">
                    <div class="nav">
                        <div class="logo">
                            <li class="menu-logo"><a href="/" class="menu-logo white">СНАБ<span class="yellow ">ЛОГИСТИК</span></a></li>
                        </div>
                        <div class="menu-boxs">
                            <li class="menu-box"><a href="/" class="menu-text white">Главная</a></li>
                            <li class="menu-box"><a href="/about" class="menu-text white">О нас</a></li>
                            <li class="menu-box"><a href="/catalog" class="menu-text white">Каталог</a></li>
                            <li class="menu-box"><a href="/kontakt" class="menu-text white">Контакты</a></li>
                            <li class="menu-box"><a href="/vacancies" class="menu-text white">Вакансии</a></li>
                           </div>
                        <div class="menu-btn">
                            <li><a href="/deferred" class="menu-box"><img src="/img/Hard.png" alt="hard"></a></li>
                            <li><a href="/basket" class="menu-box"><img src="/img/Basket.png" alt="Basket"></a></li>
                            <li><a href="/personalarea" class="menu-box btn-nav">Личный кабинет</a></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="menu-text white btn-logout">Выход</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </div>
                    </div>
                </ul>
            </nav>
        </div>
        <section class="section">
                <div class="conteiner">
                    <div class="title">
                        <h1 class="title-text"><span class="yellow"></span><br>
                             </h1>
                        <p class="text-title"></p>
                        <a href="/catalog" class="btn">Посмотреть каталог</a>
                    </div>
                </div>
        </section> 
    </header>
    
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Получаем текущий путь страницы
        var currentPath = window.location.pathname;

        // Определяем класс баннера и текст на основе текущего пути
        var bannerClass = '';
        var titleText = '';
        var textTitle = '';
        if (currentPath === '/') {
            bannerClass = 'baner-one';
            titleText = 'Продажа<span class="yellow">строительных</span><br>материалов по всей стране';
            textTitle = 'Наша компания предлагает широкий ассортимент строительных материалов высокого качества по доступным ценам.';
        } else if (currentPath === '/about') {
            bannerClass = 'baner-two';
            titleText = 'Добро пожаловать в<br>компанию Снаблогистик !';
            textTitle = 'Наша компания снабжения и логистики предлагает эффективные решения для поставок, обеспечивая ваш бизнес надежными и своевременными поставками строительных материалов.';
        } else if (currentPath === '/kontakt') {
            bannerClass = 'baner-four';
            titleText = 'Снаблогистик - ваш надежный партнер в строительстве.';
            textTitle = 'Компания Снаблогистик - это логистический оператор, специализирующийся на перевозке и продаже строительных материалов и товаров для строительства.';
        } else if (currentPath === '/vacancies') {
            bannerClass = 'baner-five';
            titleText = 'Присоединяйтесь к нашей команде Снаблогистик';
            textTitle = 'Мы постоянно стремимся к развитию и ищем талантливых профессионалов, готовых внести свой вклад в нашу успешную команду.';
        } else if (currentPath === '/catalog') {
            bannerClass = 'baner-one';
            // Устанавливаем стиль height: 100px для баннера на странице каталога
            var headerSection = document.querySelector('header');
            headerSection.style.height = '100px';
        } else if (currentPath.includes('/catalog/')) {
            bannerClass = 'baner-one';
            // Устанавливаем стиль height: 100px для баннера на странице каталога
            var headerSection = document.querySelector('header');
            headerSection.style.height = '100px';
            // и так далее для других страниц
            }else if (currentPath.includes('/login')) {
                        bannerClass = 'baner-one';
                        // Устанавливаем стиль height: 100px для баннера на странице каталога
                        var headerSection = document.querySelector('header');
                        headerSection.style.height = '100px';
                        // и так далее для других страниц
            }else if (currentPath.includes('/basket')) {
                        bannerClass = 'baner-one';
                        // Устанавливаем стиль height: 100px для баннера на странице каталога
                        var headerSection = document.querySelector('header');
                        headerSection.style.height = '100px';
                        // и так далее для других страниц
            }else if (currentPath.includes('/deferred')) {
                        bannerClass = 'baner-one';
                        // Устанавливаем стиль height: 100px для баннера на странице каталога
                        var headerSection = document.querySelector('header');
                        headerSection.style.height = '100px';
                        // и так далее для других страниц
            }else if (currentPath.includes('/personalarea')) {
                        bannerClass = 'baner-one';
                        // Устанавливаем стиль height: 100px для баннера на странице каталога
                        var headerSection = document.querySelector('header');
                        headerSection.style.height = '100px';
                        // и так далее для других страниц
            }else if (currentPath.includes('/search')) {
                        bannerClass = 'baner-one';
                        // Устанавливаем стиль height: 100px для баннера на странице каталога
                        var headerSection = document.querySelector('header');
                        headerSection.style.height = '100px';
                        // и так далее для других страниц
            }
            else if (currentPath.includes('/filter')) {
                        bannerClass = 'baner-one';
                        // Устанавливаем стиль height: 100px для баннера на странице каталога
                        var headerSection = document.querySelector('header');
                        headerSection.style.height = '100px';
                        // и так далее для других страниц
            }
            else if (currentPath.includes('/sort')) {
                        bannerClass = 'baner-one';
                        // Устанавливаем стиль height: 100px для баннера на странице каталога
                        var headerSection = document.querySelector('header');
                        headerSection.style.height = '100px';
                        // и так далее для других страниц
            }

        // Если текущая страница не каталог, добавляем класс баннера
        if (currentPath !== '/catalog') {
            // Находим секцию header и заменяем ее класс
            var headerSection = document.querySelector('header');
            headerSection.classList.add(bannerClass);

            // Находим заголовок и текст и меняем их содержимое
            var titleElement = document.querySelector('.title-text');
            titleElement.innerHTML = titleText;
            
            var textElement = document.querySelector('.text-title');
            textElement.innerHTML = textTitle;
        }
    });
</script>
@yield('scripts')
<script src="/JS/script.js"></script>
</body>
</html>
