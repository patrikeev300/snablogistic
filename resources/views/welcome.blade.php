@extends('layouts.app')

@section('content')      
<section>
    <div class="container">
        @foreach($statuses as $status)
            @if($status->products->count() > 0)
            <div class="card mb-3">
                <div class="card-header">
                    <h2>{{ $status->Name }}</h2>
                </div>
                <div class="card-body">
                    <div class="card-wrapper"> <!-- Добавлен контейнер для карточек -->
                        @php $count = 0; @endphp
                        @foreach($status->products as $product)
                            @if($count < 4)
                                <div class="card mr-3"> <!-- Добавлен класс mr-3 для отступов между карточками -->
                                    <div class="card-body">
                                    <img src="{{ Storage::url('public/products/' . $product->Photo_path) }}" alt="{{ $product->Name }}" class="smes-korz">

                                        <h5 class="card-title">{{ $product->Name }}</h5>
                                        <p class="card-text">{{ $product->Description }}</p>
                                        <p class="card-text"><strong>{{ $product->Price }} руб.</strong></p>
                                        <a href="{{ route('catalog.show', $product->id) }}" class="btn btn-primary">Добавить в корзину</a>
                                    </div>
                                </div>
                                @php $count++; @endphp
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</section>



        <div class="otstup">
           <section class="bg-opt">
            <div class="conteiner">
                    <div class="pd-vntr">
                    <h2 class="white">Оптовая <span class="yellow">продажа</span></h2>
                    <p class="text white">Партнерство с нами обеспечит вашу компанию высококачественными строительными<br>
                    смесями, соответствующими самым строгим стандартам. Наши оптовые цены, гибкие<br>
                    условия поставок и широкий ассортимент продукции помогут вам удовлетворить<br>
                    потребности в строительных материалах, обеспечивая успешное завершение проектов.</p>
                        <button class="btn" id="open-modal-opt">Отправить сообщение</button>
                    </div>
            </div>
           </section>
        </div>

<!-- Разметка модального окна -->
<div id="modal-opt" class="modal">
    <div class="modal_content-opt">
        <img src="IMG/close (1).png" id="close-opt" alt="close" class="close">
        <div class="form-modal">
            <div class="form">
                <h2 class="center white">Оптовая закупка</h2> <br>
                <form method="post" action="{{ route('email.submit') }}">
                    @csrf
                    <input type="text" name="fio" class="inp-opt" placeholder="ФИО"><br><br>
                    <input type="email" name="email" class="inp-opt" placeholder="Email"><br><br> <!-- Исправлено на type="email" -->
                    <input type="tel" name="tel" class="inp-opt" placeholder="Номер телефона"><br><br>
                    <input type="text" name="address" class="inp-opt" placeholder="Адрес торговой точки"><br><br>
                    <input type="text" name="comments" class="inp-opt" placeholder="Комментарии"><br><br>
                    <div class="imp-fail-opt">
                        <input class="checkbox" type="checkbox" required> <!-- Добавлен атрибут required -->
                        <p class="prozr-text-white">Принимаю условия пользовательского соглашения</p>
                    </div>
                    <input class="otst-verx modal-btn-osob" type="submit" value="Отправить"> <!-- Изменено на type="submit" и добавлено значение -->
                </form>
            </div>
        </div>
    </div>
</div>


    <section>
        <div class="conteiner">
            <div class="otstup">
                <div class="boxs">
                    <div class="box">
                        <img src="img/img1.png" alt="camaz" class="img">
                    </div>
                    <div class="box">
                        <span class="yellow text">Наша команда</span>
                        <h2>СНАБЛОГИСТИК</h2>
                        <p class="text">Компания Снаблогистик специализируется на продаже высококачественных сухих смесей для строительства и ремонта. Наш ассортимент включает в себя широкий выбор строительных смесей для любых видов работ. Мы работаем только с надежными производителями, что гарантирует нам постоянное качество и надежность товаров.<br>
                        <br>
                        Наша команда профессионалов всегда готова помочь в выборе . С нами вы можете быть уверены в качестве и эффективности всех приобретаемых материалов для строительства и ремонта
                        </p>
                        <a href="/about" class="btn">Узнать подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="conteiner">
            <div class="otstup">
                <div class="boxs">
                    <div class="box-pl">
                        <h2 class="h2">Почему <span class="yellow"> мы?</span></h2><br>
                        <div class="boxs-plus">
                            <img src="img/subway_tick.png" alt="subway_tick" class="tick">
                            <p class="text left"> Качество: Мы предлагаем высококачественные сухие смеси от надежных производителей.</p>
                        </div>
                        <div class="boxs-plus">
                            <img src="img/subway_tick.png" alt="subway_tick">
                            <p class="text left">Большой выбор: У нас широкий ассортимент смесей для любых видов строительных работ.</p>
                        </div>
                        <div class="boxs-plus">
                            <img src="img/subway_tick.png" alt="subway_tick">
                            <p class="text left">Оперативная доставка: Мы гарантируем быструю доставку продукции в удобное для вас время.</p>
                        </div>
                        <div class="boxs-plus">
                            <img src="img/subway_tick.png" alt="subway_tick">
                            <p class="text left">Конкурентные цены: Мы предлагаем конкурентные цены на все наши товары.</p>
                        </div>
                        <div class="boxs-plus">
                            <img src="img/subway_tick.png" alt="subway_tick">
                            <p class="text left">Индивидуальный подход: Наша команда всегда готова помочь вам подобрать оптимальную смесь для вашего проекта.</p>
                        </div>
                        <div class="boxs-plus">
                            <img src="img/subway_tick.png" alt="subway_tick">
                            <p class="text left">Надежность: Мы являемся надежным партнером, заботимся о качестве и удовлетворении потребностей наших клиентов.</p>
                        </div>
                    </div>
                    <div class="box-ply">
                        <img src="img/img2.png" alt="camaz" class="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="otstup">
        <section class="bg-one">
            <div class="conteiner">
                <div class="pd-vntr">
                    <h2 class="title-news">Актуальные <span class="yellow">новости</span></h2>
                    <p class="text text-news">Наша компания постоянно совершенствуется и внедряет новые<br> технологии в свою работу и хочет поделится ими с Вами.</p>
                    
                    
                    <div class="slider">
                        <div class="slider-boxs">
                            <div class="slider-box">
                                <img src="img/slider1.png" alt="gruzovic" class="img">
                                <p class="text text-slider-one">Компания Снаблогистик обновила свой ассортимент 
                                    сухих смесей для строительства и ремонта! Теперь у нас представлены новые 
                                    виды штукатурок, клеев для плитки и грунтовок от ведущих производителей. Мы 
                                    продолжаем радовать наших клиентов высоким качеством материалов и разнообразием выбора.  </p>
                            </div>
                            <div class="slider-box">
                                <img src="img/Group 23 (1).png" alt="gruzovic" class="img">
                                <p class="text text-slider-one">Компания Снаблогистик рада объявить о расширении 
                                    своей сети складов! Новые современные складские помещения оборудованы по последнему 
                                    слову техники, что позволяет нам хранить большой ассортимент строительных материалов, 
                                    включая сухие смеси, в оптимальных условиях.</p></div>
                            <div class="slider-box">
                                <img src="img/slider2.png" alt="gruzovic" class="img">
                                <p class="text text-slider-one">Компания Снаблогистик запускает новый онлайн-магазин для 
                                    удобства своих клиентов! Теперь вы можете легко и быстро приобрести все необходимые 
                                    строительные материалы, включая сухие смеси, прямо из дома или офиса. Наш новый 
                                    интернет-магазин предлагает удобный поиск, подробные описания товаров и оперативную 
                                    доставку по всей стране. </p>
                            </div>
                            <div class="slider-box">
                                <img src="img/novost-four.png" alt="novost" class="img">
                                <p class="text text-slider-one">Ведущая логистическая компания Снаблогистик 
                                    продолжает вести успешную деятельность, основанную на инновационных достижениях 
                                    и стратегии расширения своих глобальных операций. В течение последних лет Снаблогистик 
                                    активно внедрял передовые технологии и решения в сфере строительства, чтобы обеспечить 
                                    эффективную и надежную поставку товаров для своих клиентов. </p>
                            </div>
                            <div class="slider-box">
                                <img src="img/slider5.png" alt="novost" class="img-slider">
                                <p class="text text-slider-one">Компания Снаблогистик рада объявить о новом стратегическом 
                                    партнерстве с крупным производителем сухих смесей! Это партнерство значительно расширяет 
                                    наш ассортимент и позволяет предложить клиентам еще больший выбор качественных материалов 
                                    для строительства и ремонта. </p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow">
                        <button class="back slider-btn">
                            <img src="./img/Arrow 2.png" alt="Arrow" class="arrow-prev">
                        </button>
                        <button class="next slider-btn">
                            <img src="./img/Arrow 1.png" alt="Arrow" class="arrow-next">
                        </button>
                    </div> 
                
                </div>
            </div>
        </section>

        <section>
            <div class="conteiner">
                <div class="otstup">
                    <h2 class="text-center">Наши <span class="yellow">преимущества</span></h2>
                    <div class="preim-boxs">
                        <div class="preim-box">
                            <div class="preim-card">
                                <div class="preim-text">
                                <svg class="svg-preim"  width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M69.3337 19.3327L36.0003 2.66602L2.66699 19.3327V52.666L36.0003 69.3327L69.3337 52.666V19.3327Z" stroke="currentColor" stroke-width="4" stroke-linejoin="round"/>
                                <path d="M2.66699 19.3333L36.0003 36M36.0003 36V69.3333M36.0003 36L69.3337 19.3333M52.667 11L19.3337 27.6667" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                    <h3>Высокое качество  <span class="yellow">товаров</span></h3><br>
                                    <p class="text_osob card-text">Мы сотрудничаем с проверенными производителями сухих смесей, что гарантирует высокое качество каждого продукта в нашем ассортименте. Наши товары проходят строгий контроль качества перед поставкой клиентам.</p>
                                </div>
                            </div>
                            <div class="preim-card">
                                <div class="preim-text">
                                <svg class="svg-preim" width="64" height="61" viewBox="0 0 64 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M61.9671 51.9669L45.5005 35.5002L38.4338 42.5669L54.9005 59.0335C56.8671 61.0002 60.0338 61.0002 61.9671 59.0335C63.9005 57.0669 
                                63.9005 53.9002 61.9671 51.9669ZM50.8338 25.3335C57.2671 25.3335 62.5005 20.1002 62.5005 13.6669C62.5005 11.7335 61.9671 9.93352 61.1338 
                                8.33352L52.1338 17.3335L47.1671 12.3669L56.1671 3.36685C54.5671 2.53352 52.7671 2.00018 50.8338 2.00018C44.4005 2.00018 39.1671 7.23352 
                                39.1671 13.6669C39.1671 15.0335 39.4338 16.3335 39.8671 17.5335L33.7005 23.7002L27.7671 17.7669C28.0761 17.4585 28.3213 17.0922 28.4886 
                                16.6889C28.6558 16.2857 28.7419 15.8534 28.7419 15.4169C28.7419 14.9803 28.6558 14.548 28.4886 14.1448C28.3213 13.7415 28.0761 13.3752 27.7671 
                                13.0669L25.4005 10.7002L32.4671 3.63352C30.5921 1.76085 28.0505 0.708984 25.4005 0.708984C22.7505 0.708984 20.2088 1.76085 18.3338 3.63352L8.9338 
                                13.0669C8.62479 13.3752 8.37963 13.7415 8.21236 14.1448C8.04509 14.548 7.95899 14.9803 7.95899 15.4169C7.95899 15.8534 8.04509 16.2857 8.21236 
                                16.6889C8.37963 17.0922 8.62479 17.4585 8.9338 17.7669L11.3005 20.1335H2.8338C2.20047 20.1335 1.60047 20.3669 1.16714 20.8335C0.945405 
                                21.0508 0.769252 21.3101 0.648996 21.5963C0.528739 21.8825 0.466797 22.1898 0.466797 22.5002C0.466797 22.8106 0.528739 23.1179 
                                0.648996 23.4041C0.769252 23.6903 0.945405 23.9496 1.16714 24.1669L9.6338 32.6335C9.85106 32.8553 10.1104 33.0314 10.3966 33.1517C10.6827 
                                33.2719 10.99 33.3339 11.3005 33.3339C11.6109 33.3339 11.9182 33.2719 12.2044 33.1517C12.4906 33.0314 12.7499 32.8553 12.9671 32.6335C13.4005 
                                32.2002 13.6671 31.6002 13.6671 30.9669V22.5002L16.0005 24.8335C17.3005 26.1335 19.4005 26.1335 20.7005 24.8335L26.6338 30.7669L5.46714 
                                51.9335C4.9995 52.3955 4.62822 52.9457 4.37482 53.5522C4.12142 54.1587 3.99093 54.8095 3.99093 55.4669C3.99093 56.1242 4.12142 56.775 4.37482 
                                57.3815C4.62822 57.988 4.9995 58.5382 5.46714 59.0002C7.4338 60.9669 10.6005 60.9669 12.5338 59.0002L46.9338 24.6335C48.1671 25.0669 49.4671 25.3335 50.8338 25.3335Z" fill="currentColor"/>
                                </svg>
                                        
                                    <h3><span class="yellow">Широкий выбор </span>продукции</h3><br>
                                    <p class="text_osob card-text">Мы предлагаем широкий ассортимент сухих смесей для любых видов строительных работ - от штукатурки и клеев для плитки до финишной отделки. Наш ассортимент позволяет клиентам выбирать оптимальные материалы для своих проектов.</p>
                                </div>
                            </div>
                        </div>
                        <div class="preim-box">
                            <div class="preim-card">
                                <div class="preim-text">
                                <svg class="svg-preim" width="80" height="90" viewBox="0 0 80 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M53.333 41.25C58.8663 41.25 63.2997 36.225 63.2997 30C63.2997 23.775 58.8663 18.75 53.333 18.75C47.7997 18.75 43.333 
                                23.775 43.333 30C43.333 36.225 47.7997 41.25 53.333 41.25ZM26.6663 41.25C32.1997 41.25 36.633 36.225 36.633 30C36.633 23.775 
                                32.1997 18.75 26.6663 18.75C21.133 18.75 16.6663 23.775 16.6663 30C16.6663 36.225 21.133 41.25 26.6663 41.25ZM26.6663 48.75C18.8997 
                                48.75 3.33301 53.1375 3.33301 61.875V67.5C3.33301 69.5625 4.83301 71.25 6.66634 71.25H46.6663C48.4997 71.25 49.9997 69.5625 49.9997 
                                67.5V61.875C49.9997 53.1375 34.433 48.75 26.6663 48.75ZM53.333 48.75C52.3663 48.75 51.2663 48.825 50.0997 48.9375C50.1663 48.975 
                                50.1997 49.05 50.233 49.0875C54.033 52.2 56.6663 56.3625 56.6663 61.875V67.5C56.6663 68.8125 56.433 70.0875 56.0663 71.25H73.333C75.1663 
                                71.25 76.6663 69.5625 76.6663 67.5V61.875C76.6663 53.1375 61.0997 48.75 53.333 48.75Z" fill="currentColor"/>
                                </svg>                                  
                                    <h3><span class="yellow">Профессиональные</span> консультации</h3><br>
                                    <p class="text_osob card-text">Наша команда специалистов всегда готова помочь вам в выборе подходящей смеси, поделиться рекомендациями и оказать профессиональную консультацию по использованию материалов в строительстве и ремонте.  </p>
                                </div>
                            </div>
                            <div class="preim-card">
                                <div class="preim-text">
                                <svg class="svg-preim" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M59.9997 61.6673C58.6736 61.6673 57.4018 61.1405 56.4641 60.2028C55.5265 59.2652 54.9997 57.9934 54.9997 
                                56.6673C54.9997 55.3412 55.5265 54.0695 56.4641 53.1318C57.4018 52.1941 58.6736 51.6673 59.9997 51.6673C61.3258 
                                51.6673 62.5975 52.1941 63.5352 53.1318C64.4729 54.0695 64.9997 55.3412 64.9997 56.6673C64.9997 57.9934 64.4729 
                                59.2652 63.5352 60.2028C62.5975 61.1405 61.3258 61.6673 59.9997 61.6673ZM64.9997 31.6673L71.533 40.0007H56.6663V31.6673M19.9997 
                                61.6673C18.6736 61.6673 17.4018 61.1405 16.4641 60.2028C15.5265 59.2652 14.9997 57.9934 14.9997 56.6673C14.9997 55.3412 15.5265 
                                54.0695 16.4641 53.1318C17.4018 52.1941 18.6736 51.6673 19.9997 51.6673C21.3258 51.6673 22.5975 52.1941 23.5352 53.1318C24.4729 
                                54.0695 24.9997 55.3412 24.9997 56.6673C24.9997 57.9934 24.4729 59.2652 23.5352 60.2028C22.5975 61.1405 21.3258 61.6673 19.9997 
                                61.6673ZM66.6663 26.6673H56.6663V13.334H9.99967C6.29967 13.334 3.33301 16.3007 3.33301 20.0007V56.6673H9.99967C9.99967 59.3195 
                                11.0532 61.863 12.9286 63.7384C14.804 65.6138 17.3475 66.6673 19.9997 66.6673C22.6518 66.6673 25.1954 65.6138 27.0707 63.7384C28.9461 
                                61.863 29.9997 59.3195 29.9997 56.6673H49.9997C49.9997 59.3195 51.0532 61.863 52.9286 63.7384C54.804 65.6138 57.3475 66.6673 59.9997 
                                66.6673C62.6518 66.6673 65.1954 65.6138 67.0707 63.7384C68.9461 61.863 69.9997 59.3195 69.9997 56.6673H76.6663V40.0007L66.6663 26.6673Z" fill="currentColor"/>
                                </svg>

                                    <h3>Удобная <span class="yellow"> доставка</span></h3><br>
                                    <p class="text_osob card-text">Мы предлагаем оперативную доставку продукции по всей стране, что позволяет нашим клиентам получать необходимые материалы в удобное для них время. Надежные партнеры по доставке и организованная логистика гарантируют своевременное выполнение заказов.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="otstup">
           <section class="bg-two">
            <div class="conteiner">
                <div class="pd-vntr">
                <h2 class="white">Остались <span class="yellow">вопросы</span>?</h2>
                <p class="text white">Отправьте заявку на обратный звонок!<br>
                    Наши специалисты свяжуться с Вами<br>
                    и ответят на все интересующие Вас<br> вопросы.</p>
                    <button class="btn" id="open-modal">Обратный звонок</button>
                </div>
            </div>
           </section>
        </div>   
        
    <div id="modal" class="modal">
        <div class="modal_content">
            <img src="IMG/close (1).png" id="close" alt="close" class="close">
            <div class="form-modal">
                <div class="form">
                <span class="text white">Остались вопросы?</span><br>
                <h2 class="center white">Заказать обратный <span class="yellow">звонок</span></h2> <br>
                
                    <form  method="post" action="kontakt.php">
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
    <div class="container">
        <div class="otstup">
            <h2 class="text-center"><span class="yellow">Отзывы</span> довольных клиентов</h2>

            <div class="slider-two">
                <div class="slider-container">
                    @if(isset($reviews) && $reviews->count() > 0)
                        @foreach($reviews as $review)
                            <div class="slider-box-two">
                                <div class="review-rating" style="display: flex; justify-content: center;">
                                    @for($i = 0; $i < $review->rating; $i++)
                                        <img src="img/yellow-star.png" alt="star" class="star-icon" style="width: 20px; margin-right: 5px;">
                                    @endfor
                                </div>
                                <div class="review-content" style="text-align: center;">
                                    <div class="review-photo-container" style="margin-bottom: 15px;">
                                        @if($review->photo_path)
                                            <img src="{{ asset('images/' . $review->photo_path) }}" alt="review-photo" class="review-photo" style="max-width: 500px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                                        @else
                                            <img src="img/otxv.png" alt="default-photo" class="review-photo" style="max-width: 500px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                                        @endif
                                    </div>
                                    <p class="slider-span review-fullname" style="margin-bottom: 15px; text-align:center;">{{ $review->description }}</p>
                                    <p class="review-price" style="margin-bottom: 5px;">{{ $review->price }}</p>
                                    <p class="text yellow" style="font-weight: bold; margin-bottom: 5px;">{{ $review->FullName }}</p>
                                  
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p style="text-align: center;">Отзывы отсутствуют</p>
                    @endif
                </div>
            </div>

            <div class="slider-arrow" style="display: flex; justify-content: center; margin-top: 20px;">
                <button class="back-one slider-btn" style="background-color: transparent; border: none; cursor: pointer;">
                    <img src="./img/Arrow 2 (1).png" alt="Arrow" class="arrow-prev" style="width: 200px;"> <!-- Увеличенный размер стрелочки назад -->
                </button>
                <button class="next-one slider-btn" style="background-color: transparent; border: none; cursor: pointer;">
                    <img src="./img/Arrow 1 (1).png" alt="Arrow" class="arrow-next" style="width: 200px;"> <!-- Увеличенный размер стрелочки вперед -->
                </button>
            </div> 
        </div>
    </div>
</section>






<section>
    <div class="container">
        <div class="otstup">
            <div class="form-box">
                <div class="form-img">
                    <img src="img/img3.png" alt="korobka" class="img-form">
                </div>
                <div class="form">
                    <h2>Написать <span class="yellow">отзыв</span></h2>
                    <p class="text text-form">Поделитесь своим мнением, а мы улучшим качество и прислушаемся к рекомендациям </p>
                    <form method="post" action="{{ route('reviews.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="FullName" class="text-imp" placeholder="ФИО" value="@if(Auth::check()){{ Auth::user()->surname }} {{ Auth::user()->name }} {{ Auth::user()->middlename }}@endif"><br>
                        <br>
                        <textarea name="description" class="text-imp" placeholder="Описание товара"></textarea><br>
                        <br>
                        <input type="number" name="price" class="name-inp" placeholder="Оценка (от 0 до 5)" min="0" max="5"><br>
                        <br>
                        <div class="imp-fail">
                            <input type="file" name="photo_path" class="fail-imp" placeholder="Выбрать файл"><br>
                            <p class="prozr-text">Выберите не более 1 файла</p>
                        </div>
                        <br>
                        <div class="imp-fail">
                            <input class="checkbox" type="checkbox">
                            <p class="prozr-text">Принимаю условия пользовательского соглашения</p>
                        </div>
                        <br>
                        <div class="imp-fail">
                            <img src="img/pust-zvezd.png" alt="zvezd">
                            <input class="btn" type="submit">
                        </div>
                    </form>


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
<!-- Добавляем скрипт после разметки слайдера -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Получаем все элементы слайдера
    var slider = document.querySelector('.slider-two');
    var prevButton = document.querySelector('.back-one');
    var nextButton = document.querySelector('.next-one');
    var sliderContainer = document.querySelector('.slider-container');
    var slides = slider.querySelectorAll('.slider-box-two');

    // Устанавливаем начальный индекс слайда
    var currentSlideIndex = 0;
    var slidesToShow = 3; // Количество отображаемых карточек

    // Показываем первые карточки
    showSlide(currentSlideIndex);

    // Функция для показа определенного набора карточек
    function showSlide(index) {
        var offset = -index * (slides[0].offsetWidth + 20); // 20 - это расстояние между карточками
        sliderContainer.style.transform = 'translateX(' + offset + 'px)';
    }

    // Обработчик для кнопки "назад"
    prevButton.addEventListener('click', function() {
        currentSlideIndex--;
        if (currentSlideIndex < 0) {
            currentSlideIndex = slides.length - slidesToShow;
        }
        showSlide(currentSlideIndex);
    });

    // Обработчик для кнопки "вперед"
    nextButton.addEventListener('click', function() {
        currentSlideIndex++;
        if (currentSlideIndex + slidesToShow > slides.length) {
            currentSlideIndex = 0;
        }
        showSlide(currentSlideIndex);
    });
});

</script>

    <script src="./JS/modal.js"></script>
    <script src="./JS/modal-opt.js"></script>
@endsection
