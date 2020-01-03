<?php include 'header.php' ?>

    <div class="celection">
        <img class="main_img" src="img/Без имени-2.jpg" alt="">
    </div>

    <section class="services">
        <div class="container">
            <div class="services__top">
                <div class="services__title-box">
                    <div class="services__title">
                        Наші послуги
                    </div>
                    <div class="services__text">
                        Комплексный подход к вашему вопросу, своевременная правовую помощь, представление интересов во всех судебных инстанциях.
                    </div>
                </div>
            </div>
            <div class="services__items">
                <div class="services__item">
                    <img src="img/about-1.png" alt="" class="services_img">
                    <div class="services__item-title">
                        Консультація
                    </div>
                    <div class="services__item-text">
                        Безкоштовна консультація фахівців, замір та прорахунок;
                    </div>
                    <div class="services__item-btn">
                        <a data-fancybox data-src="#modal" href="javascript:;" class="services__btn" href="#">
                            <img class="icon_btn" src="img/pencil.png" alt=""> Замовити
                        </a>
                    </div>
                </div>
                <div class="services__item">
                    <img src="img/about-2.png" alt="" class="services_img">
                    <div class="services__item-title">
                        Індивідуальний підхід
                    </div>
                    <div class="services__item-text">
                        Поради фахівців з технічних та дизайнерських новинок, для максимального комфорту, енергозбереження,зручності та функціоналу наших конструкцій індивідуальний підхід та технічна можливість виготовити замовлення будь якої складності за вашими дизайнирськими рішеннями;
                    </div>
                    <div class="services__item-btn">
                        <a data-fancybox data-src="#modal" href="javascript:;" class="services__btn" href="#">
                            <img class="icon_btn" src="img/pencil.png" alt=""> Замовити
                        </a>
                    </div>
                </div>
                <div class="services__item">
                    <img src="img/about-3.png" alt="" class="services_img">
                    <div class="services__item-title">
                        Доставка та монтаж
                    </div>
                    <div class="services__item-text">
                        Професійний монтаж будь-яких віконних, дверних і роздвижних систем доставка та монтаж здійснюються у будь яку частину України
                    </div>
                    <div class="services__item-btn">
                        <a data-fancybox data-src="#modal" href="javascript:;" class="services__btn" href="#">
                            <img class="icon_btn" src="img/pencil.png" alt=""> Замовити
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="about__inner">
                <div class="about__title">
                    Про компанію
                </div>
                <div class="about__text">
                    Власне виробництво металопластикових конструкцій, з високоякісних,сертефікованих та екологічно безпечних профільних систем,Українського виробництва Viknaland. Open Teck. Alutech. Енергозберігаючі металопластикові вікна, двері, розсувні системи,фасадне засклення. Індивідуальний підхід до будь-яких архітектурних та дизайнерських рішень, без посередників. Засклення об'єктів будь-якої складності. Встановлення вікон і дверей в магазини, квартири, будинки, офіси та коттеджі. Професійна якість найвищого рівня за доступними цінами. 10 років гарантія на продукцію та монтаж

                </div>

            </div>
        </div>
    </section>

    <section class="form">
        <div class="container">
            <div class="form__inner">
                <div class="form__content">
                    <div class="form__title-box">
                        <div class="form__title">
                            Отримати консультацію
                        </div>
                        <div class="form__text">
                        </div>
                    </div>
                    <div class="form__box">

                        <form action="telegram.php" method="POST" id="ajax_form" action="">
                            <div class="form__box-inner">
                                <div class="form__box-left">
                                    <label>
                                        E-mail
                                        <input type="text" name="user_email">
                                    </label>
                                    <label>
                                        Контактний телефон
                                        <input type="text" name="user_phone">
                                    </label>

                                </div>
                                <div class="form__box-right">
                                    <label>
                                        Повідомлення
                                        <textarea class="text-area" name="user_name"></textarea>
                                    </label>
                                    <button id="button" class="default-btn" type="submit">Отримати консультацію</button>
                                    <script>
                                        var button = document.getElementById("button");
                                        button.addEventListener('click', function() {
                                            swal("Спасибо за заявку!", "Мы свяжемся с вами в ближайшее время", "success");
                                        });
                                    </script>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer__content">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__info">
                        <div class="footer__title">

                        </div>
                        <div class="footer__text">

                        </div>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="header__btn" href="#">
               Безкоштовна конструкція
            </a>
                        <ul class="footer__list">
                            <li><a class="footer__phone" href="tel:380963092145">+380970563316</a></li>
                            <li><a href="#">vadim.pogyt@gmail.com</a></li>
                            <li><a class="footer__adress" href="#">Вінниця, вул. Виноградна 40</a></li>
                        </ul>
                    </div>
                    <div class="footer__map">

                        <iframe height="250px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.9306715812254!2d28.374367215523577!3d49.22084187932458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5c343447957f%3A0xd7c6841e07eea117!2z0LLRg9C70LjRhtGPINCS0LjQvdC-0LPRgNCw0LTQvdCwLCA0MCwg0JLRltC90L3QuNGG0Y8sINCS0ZbQvdC90LjRhtGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgMjEwMDA!5e0!3m2!1sru!2sua!4v1574784417503!5m2!1sru!2sua" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copy">
            <div class="container">
                <div class="copy__text">
                    © 2019 Template by Guddy. Все права защищены.
                </div>
            </div>
        </div>
    </footer>

    <div id="modal">
        <form>
            <input type="text" placeholder="Ваше имя">
            <input type="text" placeholder="Ваш телефон">
            <input type="submit" value="Отправить">
        </form>
    </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.formstyler.min.js"></script>
    <script src="js/main.js"></script>

    </body>

    </html>