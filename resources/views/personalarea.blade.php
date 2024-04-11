@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="otstup">
            <h1 class="title-text-black">Личный кабинет</h1>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="otstup">
            <div class="card-korzina-itog">
                <div class="profil">
                    <img src="img/profil.png" alt="profil">
                    <form method="POST" action="{{ route('profile.update') }}" class="profil-form">
                        @csrf
                        <div class="profil-box">
                            <p class="profil-title">Имя</p>
                            <input type="text" name="name" value="{{ Auth::user()->name }}" readonly class="profil-input">
                        </div>
                        <div class="profil-box">
                            <p class="profil-title">Фамилия</p>
                            <input type="text" name="surname" value="{{ Auth::user()->surname }}" readonly class="profil-input">
                        </div>
                        <div class="profil-box">
                            <p class="profil-title">Отчество</p>
                            <input type="text" name="middlename" value="{{ Auth::user()->middlename }}" readonly class="profil-input">
                        </div>
                        <div class="profil-box">
                            <p class="profil-title">Email</p>
                            <input type="email" value="{{ Auth::user()->email }}" readonly class="profil-input" required>
                        </div>
                        <div class="profil-box">
                            <p class="profil-title">Телефон</p>
                            <input type="phone" name="phone" value="{{ Auth::user()->phone }}" readonly class="profil-input">
                        </div>

                        <button type="button" onclick="enableEdit()" class="btn-os mesto">Изменить</button>
                        <button type="submit" class="btn-os mesto" style="display: none;">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="otstup">
            <h2 class="text-center">Информация об аккаунте</h2>
            <div class="inf-profil">
                <div class="inf-profil-box">
                    <img src="img/money.png" alt="money">
                    <p class="inf-profil-box-text">Общая сумма заказов : {{ $totalAmount }} руб.</p>
                </div>
                <div class="inf-profil-box">
                    <img src="img/galk.png" alt="galk">
                    <p class="inf-profil-box-text">Активные заказы : {{ $activeOrdersCount }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="otst-fif">
            <div class="rassl-box">
                <div class="rassl-boxs">
                    <h2>Заказы</h2>
                </div>
                <div class="rassl-boxs">
                    <p class="prozr-text">Срок хранения заказа с момента поступления на пункт выдачи: 10 дней</p>
                </div>
            </div>
        </div>
        @foreach($orders as $order)
            <div class="card-korzina-itog-profil">
                <div class="card-korzina-chast">
                    <div class="card-korzina-left">
                        <img src="{{ Storage::url('public/products/' . $order->product->Photo_path) }}" alt="{{ $order->product->Name }}" class="smes-korz">
                        <div class="korzina-info">
                            <p class="smes-title">{{ $order->product->Name }}</p>
                            <p class="smes-text">{{ $order->product->Description }}</p>
                            <p class="smes-title">Ремонтный состав: {{ $order->product->Weight }} кг.</p>
                            <p class="card-korzina-itog-text">Количество: {{ $order->Quantity }} шт.</p>
                        </div>
                    </div>
                </div>
                <div class="card-korzina-chast">
                    <div class="card-korzina-right">
                        <p class="smes-title">Стоимость заказа: {{ $order->Cost }} руб.</p>
                        <p class="smes-title">Номер заказа: {{ $order->Number }}</p>
                        <p class="smes-title">Дата заказа: {{ $order->Data }}</p>
                        <p class="smes-title">Адрес доставки: {{ $order->Address }}</p>
                        <p class="smes-title">Статус: {{ $order->status->Name }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>



<script>
    function enableEdit() {
        var inputs = document.querySelectorAll('.profil-input');
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].readOnly = false;
            inputs[i].classList.add('active');
        }
        var saveButton = document.querySelector('button[type="submit"]');
        var editButton = document.querySelector('button[type="button"]');
        saveButton.style.display = 'block';
        editButton.style.display = 'none';
    }
</script>

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