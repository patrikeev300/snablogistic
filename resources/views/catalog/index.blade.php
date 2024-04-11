@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<section>
    <div class="container">
        <div class="otstup">
            <div class="poisk-box">
                <form action="{{ route('search') }}" method="GET">
                    <div class="poisk-boxs">
                        <input type="text" name="search" class="poisk_inp" placeholder="Поиск...">
                        <button class="poik" type="submit"><img class="poisk-img" src="IMG/poisk.png" alt="поиск"></button>
                    </div>
                </form>
            </div>
            <div class="poisk-box">
                <form action="{{ route('sort') }}" method="GET">
                    <div class="poisk-boxs">
                        <select class="menu-poisk-filtr option" name="sort">
                            <option value="price_asc">Сортировка по цене (по возрастанию)</option>
                            <option value="price_desc">Сортировка по цене (по убыванию)</option>
                        </select>
                        <input type="hidden" name="page" value="{{ $products->currentPage() }}">
                        <button class="poik" type="submit">Применить сортировку</button>
                    </div>
                </form>
            </div>
            <div class="poisk-box">
                <form action="{{ route('filter') }}" method="GET">
                    <div class="poisk-boxs">
                        <select class="menu-poisk-filtr option" name="filter">
                            <option value="">Выберите назначение состава</option>
                            @foreach($assignments as $assignment)
                                <option value="{{ $assignment->id }}">{{ $assignment->name }}</option>
                            @endforeach
                        </select>
                        <input type="hidden" name="page" value="{{ $products->currentPage() }}">
                        <button class="poik" type="submit">Применить фильтр</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="otstup">
            <div class="triger-box">
                @foreach ($products as $product)
                <a href="{{ route('catalog.show', $product->id) }}" class="card-link">
                    <div class="card">
                        <div class="card-header">
                            <form action="{{ route('addToFavorites', ['product' => $product->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="favorite-button" style="border: navajowhite;
    background: none;
    position: relative;">
                                    <img src="img/hard-yellow.png" alt="favorite">
                                </button>
                            </form>
                        </div>
                        <div class="card-body">
                        <img src="{{ Storage::url('public/products/' . $product->Photo_path) }}" alt="{{ $product->Name }}" class="smes-korz">
                            <h3 class="smes-title">{{ $product->Name }}</h3>
                            <p class="smes-text" style="padding-bottom: 10px;">{{ $product->Description }}</p>
                            <strong class="smes-assignment" style="padding-bottom: 30px; color: #000;">{{ $product->assignment->name }}</strong>
                            <div class="smes-footer">
                                <span class="smes-price">{{ $product->Price }} руб.</span>
                                <button class="btn">Добавить в корзину</button>
                            </div>
                        </div>
                    </div>
                </a>
                @if ($loop->iteration % 4 == 0)
                </div><div class="otstup triger-box"> <!-- Закрываем и открываем новый контейнер для каждой строки с отступом -->
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="ctr">
            <!-- Пагинация -->
            <div class="pagination-links">
                {{ $products->links() }}
            </div>
            <div class="pagination-arrows">
                <!-- Стрелка "назад" -->
                <a href="{{ $products->previousPageUrl() }}">
                    <i class="fas fa-arrow-left"></i>
                </a>
                
                <!-- Стрелка "вперед" -->
                <a href="{{ $products->nextPageUrl() }}">
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>


<div class="otstup">
    <footer class="bg-three">
        <div class="container">
            <div class="pd-vntr">
                <div class="footer-box">
                    <div class="footer-carg">
                        <span class="footer-title white">О нас</span>
                        <p class="footer-text white">Наша миссия - обеспечить быструю, надежную и 
                            эффективную доставку качественных материалов, чтобы помочь нашим клиентам 
                            достигать своих целей в области строительства.</p>
                    </div>
                    <div class="footer-carg">
                        <span class="footer-title white">Каталог </span>
                        <p class="footer-text white">Выберете понравившиеся вам товары и закажите 
                            их сразу через карзину</p>
                    </div>
                    <div class="footer-carg">
                        <span class="footer-title white">Контакты</span>
                        <p class="footer-text white">
                            +8 895 987 56 43<br>
                            sv-snablogistic@mail.ru</p>
                    </div>
                    <div class="footer-carg">
                        <span class="footer-title white">Вакансии</span>
                        <p class="footer-text white">Компания Снаблогистик предоставляет множество 
                            возможностей для тех, кто ищет работу в области логистики. Наша компания 
                            постоянно расширяется и мы ищем профессионалов, готовых внести свой вклад 
                            в нашу команду.</p>
                    </div>
                </div>
                <div class="footer-box">
                    <p class="menu-logo white">СНАБ<span class="yellow">ЛОГИСТИК</span></p>
                    <p class="menu-logo white">Следи за нами <span class="yellow">#SNABLOGISTIK</span></p>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
