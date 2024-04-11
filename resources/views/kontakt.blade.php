@extends('layouts.app')

@section('content')      
<section>
        <div class="conteiner">
            <div class="otstup">
                <div class="boxs">
                    <div class="box-pl">
                    <h2><span class="yellow">Контактные </span> данные</h2>
                        <p class="text">Спасибо за ваш интерес к компании Снаблогистик! Мы всегда 
                            готовы помочь вам в вопросах продаже и доставки строительных материалов. 
                            Ниже приведены наши контактные данные:</p>
                        <p class="text">Телефон: +8 880 800 88 00 <br>
                            Email: sv-snablogistic@mail.ru</p>
                    </div>
                    <div class="box">
                        <img src="img/pogruz.png" alt="pogruz" class="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="conteiner">
            <div class="otstup">
                <div class="boxs">
                    <div class="box">
                        <img src="img/red-doroga.png" alt="doroga" class="img">
                    </div>
                    <div class="box-pl">
                        <h2>Запись на <span class="yellow"> обратный звонок</span></h2>
                        <p class="text">Мы рады ответить на любые ваши вопросы, предоставить дополнительную 
                            информацию о наших услугах или уладить любые возникающие вопросы. Наша команда 
                            профессионалов готова предоставить вам высококлассное обслуживание и индивидуальный 
                            подход к вашим потребностям.<br>
                        <br>
                        Вы также можете заполнить форму ниже, чтобы отправить нам сообщение. Мы обязательно 
                        свяжемся с вами в ближайшее время.</p>
                        
                        <button class="btn" id="open-modal">Обратный звонок</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="modal" class="modal">
    <div class="modal_content">
        <img src="IMG/close (1).png" id="close" alt="close" class="close">
        <div class="form-modal">
            <div class="form">
                <span class="text white">Остались вопросы?</span><br>
                <h2 class="center white">Заказать обратный <span class="yellow">звонок</span></h2> <br>
                <form method="post" action="{{ route('contact.submit') }}"> <!-- Изменено действие на маршрут контроллера для отправки контактной формы -->
                    @csrf
                    <input type="text" name="fio" class="inp" placeholder="ФИО"><br>
                    <br>
                    <input type="text" name="text" class="inp" placeholder="Описание вопроса"><br>
                    <br>
                    <input type="tel" name="tel" class="inp" placeholder="Номер телефона"><br>
                    <br>
                    <input class="modal-btn-osob" type="submit" value="Отправить">
                </form>
            </div>
        </div>
    </div>
</div>


    <section>
        <div class="conteiner">
            <div class="otstup">
                <div class="boxs">
                    <div class="box-pl">
                        <h2>Мы находимся <span class="yellow">по адресу:</span></h2>
                        <p class="text">109382, город Москва, улица Нижние Поля, дом 31, строение 1, этаж 3, помещение VI, комната 6А<br>
                        <br>
                        Снаблогистик - ваш надежный партнер в продаже строительных материалов. Обратитесь к нам сегодня, и мы поможем вам 
                        достичь успеха в ваших строительных потребностях.
                    </p><br>
                    <br>
                    <br>
                    <h2><span class="yellow">Часы</span> работы:</h2>
                        <p class="text">Пн-Пт  с 8:00 до 20:00<br>
                            Сб с 9:00 до 18:00<br>
                            Вс - выходной день</p>
                    </div>
                    <div class="box">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A33d9b8fffb9fbdd12a78290b714f7d37acc98654d15e855e4bc1fd1a23d9d21c&amp;width=650&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
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

    <script src="./JS/modal.js"></script>
@endsection
