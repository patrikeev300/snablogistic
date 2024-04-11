@extends('layouts.app')
@section('content')
<div id="modal" class="modal">
        <div class="modal_content">
            <img src="IMG/close (1).png" id="close" alt="close" class="close">
            <div class="form-modal">
                <div class="form">
                <span class="text white">Остались вопросы?</span><br>
                <h2 class="center white">Заказать обратный <span class="yellow">звонок</span></h2> <br>
                
                    <form  method="post" action="#">
                        <input type="fio" name="fio" class="inp" placeholder="ФИО"><br>
                        <br>
                        <input type="text" name="text" class="inp" placeholder="Описание вопросa"><br>
                        <br>
                        <input type="tel" name="tel" class="inp" placeholder="Номер телефона"><br>
                        <br>
                        <input class="modal-btn-osob" type="submit">
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
                        <h2 >Мы <span class="yellow">рады приветствовать</span>Вас на нашем сайте</h2>
                        <div class="boxs-plus">
                            <p class="text">Добро пожаловать в Снаблогистик – вашего надежного партнера 
                                в мире строительных смесей и интегрированных решений снабжения! Мы гордимся 
                                предоставлением высококачественных строительных материалов, которые станут 
                                надежным фундаментом для успеха ваших проектов.
                            </p>
                        </div>
                        <div class="boxs-plus">
                            <p class="text">Наши инновационные формулы и широкий ассортимент смесей созданы с 
                                учетом самых высоких стандартов качества. Мы стремимся упростить ваш бизнес, 
                                предоставляя не только продукты высочайшего качества, но и персонализированный 
                                подход к вашим потребностям.
                            </p>
                        </div>
                        <div class="boxs-plus">
                            <p class="text">
                            Исследуйте наше портфолио, ознакомьтесь с преимуществами сотрудничества с Снаблогистик, 
                            и доверьтесь нам в поиске оптимальных решений для ваших строительных проектов. Благодарим 
                            за выбор Снаблогистик – вашего надежного партнера в мире строительных смесей и эффективного 
                            снабжения!</p>
                        </div>
                    </div>
                    <div class="box-ply">
                        <img src="img/samolet.png" alt="samolet" class="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="conteiner">
            <div class="otstup">
                <div class="boxs">
                    <div class="box-ply">
                        <img src="img/podemnic.png" alt="samolet" class="img">
                    </div>
                    <div class="box-pl">
                        <h2 >Наша <span class="yellow">продукция</span></h2>
                        <div class="boxs-plus">
                            <p class="text">Наша продукция – это результат высокотехнологичного и инновационного подхода к созданию строительных 
                                смесей, предназначенных для разнообразных строительных задач. В Снаблогистик мы гордимся 
                                предоставлением высококачественных материалов, спроектированных с учетом самых строгих 
                                стандартов индустрии.
                            </p>
                        </div>
                        <div class="boxs-plus">
                            <img src="img/subway_tick.png" alt="subway_tick" class="tick">
                            <p class="text left"> Разнообразие Формул: каждая формула разрабатывается нашей командой экспертов, учитывая требования к прочности, долговечности и экологической устойчивости.</p>
                        </div>
                        <div class="boxs-plus">
                            <img src="img/subway_tick.png" alt="subway_tick">
                            <p class="text left">Высокие Стандарты Качества: Наши строительные смеси соответствуют мировым стандартам и регулятивам, что обеспечивает безопасность и надежность в каждом проекте.</p>
                        </div>
                        <div class="boxs-plus">
                            <img src="img/subway_tick.png" alt="subway_tick">
                            <p class="text left">Индивидуальный Подход: Мы понимаем, что каждый проект уникален, и поэтому предоставляем индивидуальные решения для наших клиентов</p>
                        </div>
                        <div class="boxs-plus">
                            <img src="img/subway_tick.png" alt="subway_tick">
                            <p class="text left">Экологическая Осознанность: В Снаблогистик мы придерживаемся принципов устойчивого развития. Наши строительные смеси разрабатываются с учетом экологических аспектов, минимизируя воздействие на окружающую среду и соответствуя современным требованиям экологической безопасности.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="otstup">
    <section class="bg-rassl">
        <div class="container">
            <div class="pd-vntr">
                <div class="rassl-box">
                    <div class="rassl-boxs">
                        <h2 class="white">Расссылка</h2>
                    </div>
                    <div class="rassl-boxs">
                        <p class="prozr-text-white">Подписывайтесь на рассылку и<br> узнавайте новые тенденции первыми</p>
                    </div>
                </div>
                <form class="otst-fif rassl-box" method="post" action="index.php">
                    <input type="text" name="text" class="obvod-form" placeholder="ФИО"><br>
                    <br>
                    <input type="username" name="username" class="obvod-form" placeholder="Отзыв"><br>
                    <br>
                    <div class="imp-fail">
                        <input class="dop-btn" type="submit">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

    <section>
        <div class="container">
            <div class="otstup">
                <h2 class="text-center"><span class="yellow">Наши </span>специалисты</h2>
                <p class="text kollegi-text">В нашей команде работают высококвалифицированные специалисты в 
                    области логистики,<br> которые обладают богатым опытом в работе с грузами и внимательны к деталям.</p>
                

                    <div class="slider-three">
                        <div class="slider-boxs-three">
                            <div class="slider-box-three">
                                <img src="img/kollega-three.png" alt="kollega" class="kollegi-img">
                                <span class="text">Гениральный директор</span><br>
                                <span class="text-bold">Патрикеев Виталий Викторович</span>
                                <p class="text kollegi-text-slider">Виталий - вдохновляющий лидер, обладающий не 
                                    только глубоким пониманием логистической отрасли, но и 
                                    огромной энергией, неустанно направленной на достижение выдающихся результатов.</p>
                            </div>
                            <div class="slider-box-three">
                                <img src="img/kollega-two.png" alt="kollega" class="kollegi-img">
                                <span class="text">Менеджер по продажам </span><br>
                                <span class="text-bold">Иванова Ольга<br>Сергеевна</span>
                                <p class="text kollegi-text-slider">Ольга — опытный и ответственный менеджер по продажам, 
                                    обладающая выдающимися навыками в области клиентского обслуживания. Ольга эффективно 
                                    решает потребности клиентов.</p>
                            </div>
                            <div class="slider-box-three">
                                <img src="img/specialist.png" alt="kollega" class="kollegi-img">
                                <span class="text">Диспетчер </span><br>
                                <span class="text-bold">Горбунов<br> Артём Даниилович</span>
                                <p class="text kollegi-text-slider">Артем является связующим звеном между клиентами, водителями 
                                    и другими участниками поставочной цепи, обеспечивая непрерывность доставок и удовлетворение 
                                    потребностей клиентов.</p>
                            </div>
                            <div class="slider-box-three">
                                <img src="img/cekretar.png" alt="kollega" class="kollegi-img">
                                <span class="text">Секретарь </span><br>
                                <span class="text-bold">Дружинин<br> Олег Ильич</span>
                                <p class="text kollegi-text-slider">Олег является связующим звеном между клиентами,
                                     водителями и другими участниками поставочной цепи, обеспечивая непрерывность 
                                     доставок и удовлетворение потребностей клиентов.</p>
                            </div>
                            <div class="slider-box-three">
                                <img src="img/logist.png" alt="kollega" class="kollegi-img">
                                <span class="text">Логист</span><br>
                                <span class="text-bold">Леонов Илья<br> Даниилович</span>
                                <p class="text kollegi-text-slider">Илья является связующим звеном между клиентами, 
                                    водителями и другими участниками поставочной цепи, обеспечивая непрерывность доставок 
                                    и удовлетворение потребностей клиентов.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow">
                        <button class="back-two slider-btn">
                            <img src="./img/Arrow 2 (1).png" alt="Arrow" class="arrow-prev">
                        </button>
                        <button class="next-two slider-btn">
                            <img src="./img/Arrow 1 (1).png" alt="Arrow" class="arrow-next">
                        </button>
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
    <script src=".//JS/script-two.js"></script>
@endsection    