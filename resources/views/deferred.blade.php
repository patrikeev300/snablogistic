@extends('layouts.app')

@section('content')      
<section>
    <div class="container">
        <div class="otstup">
            <h1 class="title-text-black">Отложенные</h1>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="otstup">
            <div class="triger-box">
            @foreach ($deferredProducts as $deferredProduct)
    <a href="{{ route('catalog.show', $deferredProduct->product->id) }}" class="card-link">
        <div class="card">
            <div class="card-header">
                <form action="{{ route('removeFromFavorites', ['product' => $deferredProduct->product->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="favorite-button" style="border: navajowhite; background: none; position: relative;">
                        <img src="img/hard-yellow.png" alt="favorite">
                    </button>
                </form>
            </div>
            <div class="card-body">
                <img src="{{ Storage::url('public/products/' . $deferredProduct->product->Photo_path) }}" alt="{{ $deferredProduct->product->Name }}" class="smes-korz">
                <h3 class="smes-title">{{ $deferredProduct->product->Name }}</h3>
                <p class="smes-text" style="padding-bottom: 10px;">{{ $deferredProduct->product->Description }}</p>
                <strong class="smes-assignment" style="padding-bottom: 30px; color: #000;">
                    {{ $deferredProduct->product->assignment ? $deferredProduct->product->assignment->name : 'Нет назначения' }}
                </strong>
                <p class="card-text"><strong>{{ $deferredProduct->product->Price }} руб.</strong></p>
            </div>
        </div>
    </a>
@endforeach
            </div>
        </div>
    </div>
</section>

    <div class="otstup">
            <footer class="bg-three">
                <div class="conteiner">
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
    </div>
@endsection
