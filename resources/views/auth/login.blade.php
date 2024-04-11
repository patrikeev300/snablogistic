@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<div class="mains">
    <div class="container a-container" id="a-container">
        <form class="form" id="a-form" method="POST" action="{{ route('register') }}">
            @csrf <!-- Защита от CSRF -->
            <h2 class="form__title title">{{ __('Регистрация') }}</h2>
            <div class="form__group">
                <input class="form__input" type="text" placeholder="{{ __('Фамилия') }}" name="surname" value="{{ old('surname') }}" required>
                <input class="form__input" type="text" placeholder="{{ __('Имя') }}" name="name" value="{{ old('name') }}" required>
                <input class="form__input" type="text" placeholder="{{ __('Отчество') }}" name="middlename" value="{{ old('middlename') }}">
                <input class="form__input" type="text" placeholder="{{ __('Телефон') }}" name="phone" value="{{ old('phone') }}" required>
                <input class="form__input" type="email" placeholder="{{ __('Электронная почта') }}" name="email" value="{{ old('email') }}" required>
                <input class="form__input" type="password" placeholder="{{ __('Пароль') }}" name="password" required>
                <input class="form__input" type="password" placeholder="{{ __('Повторите пароль') }}" name="password_confirmation" required>
            </div>
            <button class="form__button button submit" type="submit">{{ __('Зарегистрироваться') }}</button>
        </form>
    </div>
    <div class="container b-container" id="b-container">
        <form class="form" id="b-form" method="POST" action="{{ route('login') }}">
            @csrf <!-- Защита от CSRF -->
            <h2 class="form__title title">{{ __('Вход') }}</h2>
            <div class="form__group">
                <input class="form__input" type="email" placeholder="{{ __('Электронная почта') }}" name="email" value="{{ old('email') }}" required>
                <input class="form__input" type="password" placeholder="{{ __('Пароль') }}" name="password" required>
                <a class="form__link" href="{{ route('password.request') }}">{{ __('Забыли пароль?') }}</a>
            </div>
            <button class="form__button button submit" type="submit">{{ __('Войти') }}</button>
        </form>
    </div>
    <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
            <h2 class="switch__title title">{{ __('Добро пожаловать обратно!') }}</h2>
            <p class="switch__description description">{{ __('Чтобы оставаться с нами, войдите с вашими персональными данными') }}</p>
            <button class="switch__button button switch-btn">{{ __('Войти') }}</button>
        </div>
        <div class="switch__container is-hidden" id="switch-c2">
            <h2 class="switch__title title">{{ __('Привет, друг!') }}</h2>
            <p class="switch__description description">{{ __('Введите ваши персональные данные и начните путешествие с нами') }}</p>
            <button class="switch__button button switch-btn">{{ __('Зарегистрироваться') }}</button>
        </div>
    </div>
</div>

<script>
    let switchCtn = document.querySelector("#switch-cnt");
    let switchC1 = document.querySelector("#switch-c1");
    let switchC2 = document.querySelector("#switch-c2");
    let switchCircle = document.querySelectorAll(".switch__circle");
    let switchBtn = document.querySelectorAll(".switch-btn");
    let aContainer = document.querySelector("#a-container");
    let bContainer = document.querySelector("#b-container");
    let allButtons = document.querySelectorAll(".switch__button");

    let getButtons = (e) => e.preventDefault();

    let changeForm = (e) => {
        switchCtn.classList.add("is-gx");
        setTimeout(function(){
            switchCtn.classList.remove("is-gx");
        }, 1500);

        switchCtn.classList.toggle("is-txr");
        switchCircle[0].classList.toggle("is-txr");
        switchCircle[1].classList.toggle("is-txr");

        switchC1.classList.toggle("is-hidden");
        switchC2.classList.toggle("is-hidden");
        aContainer.classList.toggle("is-txl");
        bContainer.classList.toggle("is-txl");
        bContainer.classList.toggle("is-z200");
    };

    let mainF = () => {
        // Добавляем обработчики событий для всех кнопок отправки формы
        for (let i = 0; i < allButtons.length; i++) {
            allButtons[i].addEventListener("click", getButtons);
        }
        for (let i = 0; i < switchBtn.length; i++) {
            switchBtn[i].addEventListener("click", changeForm);
        }
    };

    window.addEventListener("load", mainF);
</script>

@endsection
