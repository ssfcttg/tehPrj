<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Тех Поддержка</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/cart.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
        <script src="js/script.js" defer></script>
        <script src="js/cart.js" defer></script>
    </head>
    <body>
    <?php include ('header.html'); ?>
        <div class="wrapper">
            <section class="head">
                <div class="head__container container">
                    <ul class="head__catalog">
                        <li class="head__catalog-item"><a href="products.php" class="head__catalog-link">Компьютеры, Ноутбуки, Планшеты</a></li>
                        <li class="head__catalog-item"><a href="#" class="head__catalog-link">Серверы и хранение</a></li>
                        <li class="head__catalog-item"><a href="#" class="head__catalog-link">Портативная электроника</a></li>
                        <li class="head__catalog-item"><a href="#" class="head__catalog-link">Оргтехника, периферия</a></li>
                        <li class="head__catalog-item"><a href="#" class="head__catalog-link">Расходные материалы</a></li>
                        <li class="head__catalog-item"><a href="#" class="head__catalog-link">Комплектующие</a></li>
                        <li class="head__catalog-item"><a href="#" class="head__catalog-link">Носители информации</a></li>
                        <button id="head__catalog-button" class="head__catalog-item">Открыть полный каталог</button>
                    </ul>
                    <div class="head__sliders">
                        <div class="head__slider swiper-container">
                            <div class="head__slider-wrapper swiper-wrapper">
                                <div class="head__slider-slide swiper-slide">
                                    <div class="head__slider-content">
                                        <div class="head__slider-overlay"></div>
                                        <img src="/img/head_slide1.jpg" alt="" class="head__slider-img" />
                                    </div>
                                </div>
                                <div class="head__slider-slide swiper-slide">
                                    <div class="head__slider-content">
                                        <div class="head__slider-overlay"></div>
                                        <img src="/img/head_slide2.jpg" alt="" class="head__slider-img" />
                                    </div>
                                </div>
                                <div class="head__slider-slide swiper-slide">
                                    <div class="head__slider-content">
                                        <div class="head__slider-overlay"></div>
                                        <img src="/img/head_slide3.jpg" alt="" class="head__slider-img" />
                                    </div>
                                </div>
                                <div class="head__slider-slide swiper-slide">
                                    <div class="head__slider-content">
                                        <div class="head__slider-overlay"></div>
                                        <img src="/img/head_slide4.jpg" alt="" class="head__slider-img" />
                                    </div>
                                </div>
                                <div class="head__slider-slide swiper-slide">
                                    <div class="head__slider-content">
                                        <div class="head__slider-overlay"></div>
                                        <img src="/img/head_slide5.jpg" alt="" class="head__slider-img" />
                                    </div>
                                </div>
                                <div class="head__slider-slide swiper-slide">
                                    <div class="head__slider-content">
                                        <div class="head__slider-overlay"></div>
                                        <img src="/img/head_slide6.jpg" alt="" class="head__slider-img" />
                                    </div>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <img class="head__slider-prev" src="img/prev.svg" alt="" />
                            <img class="head__slider-next" src="img/next.svg" alt="" />

                            <!-- <div class="head__slider-pagination swiper-pagination"></div> -->
                        </div>
                        <div class="head__subslider swiper-container">
                            <div class="head__subslider-wrapper swiper-wrapper">
                                <div class="head__subslider-slide swiper-slide">
                                    <div class="head__subslider-content">
                                        <p class="head__subslider-text">
                                            Ноутбуки
                                        </p>
                                    </div>
                                </div>
                                <div class="head__subslider-slide swiper-slide">
                                    <div class="head__subslider-content">
                                        <p class="head__subslider-text">
                                            Процессоры
                                        </p>
                                    </div>
                                </div>
                                <div class="head__subslider-slide swiper-slide">
                                    <div class="head__subslider-content">
                                        <p class="head__subslider-text">
                                            Телевизоры
                                        </p>
                                    </div>
                                </div>
                                <div class="head__subslider-slide swiper-slide">
                                    <div class="head__subslider-content">
                                        <p class="head__subslider-text">
                                            SSD
                                        </p>
                                    </div>
                                </div>
                                <div class="head__subslider-slide swiper-slide">
                                    <div class="head__subslider-content">
                                        <p class="head__subslider-text">
                                            Смартфоны
                                        </p>
                                    </div>
                                </div>
                                <div class="head__subslider-slide swiper-slide">
                                    <div class="head__subslider-content">
                                        <p class="head__subslider-text">
                                            Картриджи
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="head__subslider-pagination swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="head__brends">
                        <img class="head__brends-item" src="img/apple.svg" alt="" />
                        <img class="head__brends-item" src="img/HONOR.svg" alt="" />
                        <img class="head__brends-item" src="img/hp.svg" alt="" />
                        <img class="head__brends-item" src="img/intel.svg" alt="" />
                        <img class="head__brends-item" src="img/samsung.svg" alt="" />
                        <img class="head__brends-item" src="img/mi.svg" alt="" />
                    </div>
                </div>
            </section>
            <section class="advantages">
                <div class="advantages__container container">
                    <div class="advantages__item">
                        <img src="img/money_adv.svg" alt="" class="advantages__image" />
                        <p class="advantages__text">
                            2 способа оплаты QR-код выставленный счет
                        </p>
                    </div>
                    <div class="advantages__item">
                        <img src="img/diagram_adv.svg" alt="" class="advantages__image" />
                        <p class="advantages__text">
                            Более 8 лет на рынке IT оборудования
                        </p>
                    </div>
                    <div class="advantages__item">
                        <img src="img/like_adv.svg" alt="" class="advantages__image" />
                        <p class="advantages__text">
                            Гарантия на товар и удобные условия возарата
                        </p>
                    </div>
                    <div class="advantages__item">
                        <img src="img/truck_adv.svg" alt="" class="advantages__image" />
                        <p class="advantages__text">
                            Доставка осуществляется компанией СДЭК
                        </p>
                    </div>
                    <div class="advantages__item">
                        <img src="img/support_adv.svg" alt="" class="advantages__image" />
                        <p class="advantages__text">
                            Консультация и помощь от наших менеджеров
                        </p>
                    </div>
                    <div class="advantages__item">
                        <img src="img/trolley_adv.svg" alt="" class="advantages__image" />
                        <p class="advantages__text">
                            Большой ассортимент товара
                        </p>
                    </div>
                </div>
            </section>
            <section class="categories">
                <!-- широкий контейнер для стрелок -->
                <div class="categories__container">
                    <div class="categories__title">
                        <h2 class="categories__title-text">
                            Популярные категории
                        </h2>
                    </div>
                    <!-- нормальный контейнер для слайдера -->
                    <div class="categories__slider container swiper">
                        <div class="categories__slider-wrapper swiper-wrapper">
                            <div class="categories__slider-slide swiper-slide">
                                <div class="categories__slider-content">
                                    <p class="categories__slider-text">Компьютеры</p>
                                    <img src="img/ctg_pc.png" alt="" class="categories__slider-image" />
                                </div>
                            </div>
                            <div class="categories__slider-slide swiper-slide">
                                <div class="categories__slider-content">
                                    <p class="categories__slider-text">Смартфоны</p>
                                    <img src="img/ctg_phone.png" alt="" class="categories__slider-image" />
                                </div>
                            </div>
                            <div class="categories__slider-slide swiper-slide">
                                <div class="categories__slider-content">
                                    <p class="categories__slider-text">Телевизоры</p>
                                    <img src="img/ctg_tv.png" alt="" class="categories__slider-image" />
                                </div>
                            </div>
                            <div class="categories__slider-slide swiper-slide">
                                <div class="categories__slider-content">
                                    <p class="categories__slider-text">Ноутбуки</p>
                                    <img src="img/ctg_laptop.png" alt="" class="categories__slider-image" />
                                </div>
                            </div>
                            <div class="categories__slider-slide swiper-slide">
                                <div class="categories__slider-content">
                                    <p class="categories__slider-text">Офисное оборудование</p>
                                    <img src="img/ctg_xerox.png" alt="" class="categories__slider-image" />
                                </div>
                            </div>
                            <div class="categories__slider-slide swiper-slide">
                                <div class="categories__slider-content">
                                    <p class="categories__slider-text">Сетевое оборудование</p>
                                    <img src="img/ctg_wifi.png" alt="" class="categories__slider-image" />
                                </div>
                            </div>
                            <div class="categories__slider-slide swiper-slide">
                                <div class="categories__slider-content">
                                    <p class="categories__slider-text">Ручной инструмент</p>
                                    <img src="img/ctg_hand.png" alt="" class="categories__slider-image" />
                                </div>
                            </div>
                            <div class="categories__slider-slide swiper-slide">
                                <div class="categories__slider-content">
                                    <p class="categories__slider-text">Бытовая техника</p>
                                    <img src="img/ctg_appliance.png" alt="" class="categories__slider-image" />
                                </div>
                            </div>
                        </div>
                        <button id="head__catalog-button" class="categories__button">
                            Перейти в каталог
                        </button>
                    </div>
                    <img class="categories__slider-next" src="img/dark_next.svg" alt="" />
                    <img class="categories__slider-prev" src="img/dark_prev.svg" alt="" />
                </div>
            </section>
            <section class="appliances">
                <div class="appliances__title">
                    <h2 class="appliances__title-text">Бытовая техника</h2>
                </div>
                <div class="appliances__bg">
                    <!-- основной контейнер -->
                    <div class="appliances__container container">
                        <div class="appliances__slider-container">
                            <div class="appliances__slider swiper">
                                <div class="appliances__slider-wrapper swiper-wrapper">
                                    <div class="appliances__slider-slide swiper-slide">
                                        <div class="appliances__slider-content">
                                            <img src="img/apl_blender.jpg" alt="" class="appliances__slider-img" />
                                        </div>
                                    </div>
                                    <div class="appliances__slider-slide swiper-slide">
                                        <div class="appliances__slider-content">
                                            <img src="img/apl_pastor.jpg" alt="" class="appliances__slider-img" />
                                        </div>
                                    </div>
                                    <div class="appliances__slider-slide swiper-slide">
                                        <div class="appliances__slider-content">
                                            <img src="img/apl_schmid.jpg" alt="" class="appliances__slider-img" />
                                        </div>
                                    </div>
                                    <div class="appliances__slider-slide swiper-slide">
                                        <div class="appliances__slider-content">
                                            <img src="img/apl_combain.jpg" alt="" class="appliances__slider-img" />
                                        </div>
                                    </div>
                                    <div class="appliances__slider-slide swiper-slide">
                                        <div class="appliances__slider-content">
                                            <img src="img/apl_grill.jpg" alt="" class="appliances__slider-img" />
                                        </div>
                                    </div>
                                    <div class="appliances__slider-slide swiper-slide">
                                        <div class="appliances__slider-content">
                                            <img src="img/apl_cond.jpg" alt="" class="appliances__slider-img" />
                                        </div>
                                    </div>
                                </div>
                                <img class="appliances__slider-prev swiper-button-prev" src="img/prev.svg" alt="" />
                                <img class="appliances__slider-next swiper-button-next" src="img/next.svg" alt="" />
                            </div>
                        </div>
                        <div class="appliances__subslider swiper">
                            <div class="appliances__subslider-wrapper swiper-wrapper">
                                <div class="appliances__subslider-slide swiper-slide">
                                    <p class="appliances__subslider-text">
                                        Блендеры и измельчители
                                    </p>
                                </div>
                                <div class="appliances__subslider-slide swiper-slide">
                                    <p class="appliances__subslider-text">
                                        Варочные панели
                                    </p>
                                </div>
                                <div class="appliances__subslider-slide swiper-slide">
                                    <p class="appliances__subslider-text">
                                        Кофемолки <br />
                                        Кофемашины
                                    </p>
                                </div>
                                <div class="appliances__subslider-slide swiper-slide">
                                    <p class="appliances__subslider-text">
                                        Кухонные комбайны
                                    </p>
                                </div>
                                <div class="appliances__subslider-slide swiper-slide">
                                    <p class="appliances__subslider-text">
                                        Аерогрили электрогрили
                                    </p>
                                </div>
                                <div class="appliances__subslider-slide swiper-slide">
                                    <p class="appliances__subslider-text">
                                        Климатическая техника
                                    </p>
                                </div>
                            </div>
                            <div class="appliances__subslider-pagination swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="tabs">
                <div class="tabs__container container">
                    <input class="tabs__input" name="tabs" type="radio" id="tab-1" />
                    <label class="tabs__label" for="tab-1">
                        Гарантия
                        <svg id="tabs__arrow" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.76314 0.736862L9.01314 5.5L0.76314 10.2631L0.76314 0.736862Z" fill="white" />
                        </svg>
                    </label>
                    <div class="tab__content">
                        <p class="tab__content-text">Все товары в интернет магазине новые и имеют свой срок гарантийного обслуживания.</p>
                        <p class="tab__content-text">Гарантия и обслуживание устанавливается производителем.</p>
                        <p class="tab__content-text">Гарантийное обслуживание товаров выполняется производителем.</p>
                        <p class="tab__content-text"><strong>Как воспользоваться гарантией?</strong></p>
                        <p class="tab__content-text">Обратиться напрямую в авторизованный сервисный центр.</p>
                        <p class="tab__content-text">Обратиться в наш магазин.</p>
                        <p class="tab__content-text">Обязательно иметь при себе чек или накладную.</p>
                        <span class="tab__content-span">В случае невозможности поставки товара денежные средства возвращаются покупателю по заявлению в течении срока, установленного законами РФ.</span>
                    </div>
                    <input class="tabs__input" name="tabs" type="radio" id="tab-2" />
                    <label class="tabs__label" for="tab-2">
                        Доставка
                        <svg id="tabs__arrow" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.76314 0.736862L9.01314 5.5L0.76314 10.2631L0.76314 0.736862Z" fill="white" />
                        </svg>
                    </label>
                    <div class="tab__content">
                        <p class="tab__content-text">Доставка товара осуществляется через транспортные компании.</p>
                        <p class="tab__content-text">Расчет стоимости производится при оформлении заказа с помощью калькулятора расчета доставки на сайте или менеджером при необходимости.</p>
                        <p class="tab__content-text">Условия и стоимость доставки может быть изменена менеджером только после согласования с клиентом.</p>
                        <p class="tab__content-text">Клиент вправе выбрать любую транспортную компанию, которая одновременно присутствует в населенном пункте отправителя и получателя.</p>
                        <p class="tab__content-text">Самовывоз не осуществляется.</p>
                    </div>
                    <input class="tabs__input" name="tabs" type="radio" id="tab-3" />
                    <label class="tabs__label" for="tab-3">
                        О нас
                        <svg id="tabs__arrow" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.76314 0.736862L9.01314 5.5L0.76314 10.2631L0.76314 0.736862Z" fill="white" />
                        </svg>
                    </label>
                    <div class="tab__content">
                        <p class="tab__content-text">Команда «ТехПо» успешно работает в сфере поставок IT оборудования более 8 лет</p>
                        <p class="tab__content-text">Наши основные преимущества:</p>
                        <p class="tab__content-text">Приятная цена</p>
                        <p class="tab__content-text">Удобная доставка</p>
                        <p class="tab__content-text">На рынке с 2015 года</p>
                        <p class="tab__content-text">Широкий ассортимент товаров</p>
                    </div>
                    <input class="tabs__input" name="tabs" type="radio" id="tab-4" />
                    <label class="tabs__label" for="tab-4">
                        Юридическим лицам
                        <svg id="tabs__arrow" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.76314 0.736862L9.01314 5.5L0.76314 10.2631L0.76314 0.736862Z" fill="white" />
                        </svg>
                    </label>
                    <div class="tab__content">
                        <p class="tab__content-text"><strong>Условия сотрудничества</strong></p>
                        <p class="tab__content-text">Все цены на товары включают НДС 20%.</p>
                        <p class="tab__content-text">Документы на товар можно получить по ЭДО («Контур Диадок»), почтой или вместе с товаром.</p>
                        <p class="tab__content-text">При оформлении заказа выберите способ оплаты «Счёт на оплату», Укажите ваши реквизиты и выберите способ доставки. Отправка товара ТК осуществляется после получения оплаты.</p>
                        <p class="tab__content-text">Если вам нужен договор поставки, то вы можете обратиться по телефону или на почту 1@techpo.ru.</p>
                    </div>
                    <input class="tabs__input" name="tabs" type="radio" id="tab-5" />
                    <label class="tabs__label" for="tab-5">
                        Оплата
                        <svg id="tabs__arrow" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.76314 0.736862L9.01314 5.5L0.76314 10.2631L0.76314 0.736862Z" fill="white" />
                        </svg>
                    </label>
                    <div class="tab__content">
                        <p class="tab__content-text">Оплата товара производится предварительно и полностью одним из доступных способов</p>
                        <p class="tab__content-text">C помощью QR-кода</p>
                        <p class="tab__content-text">по выставленному счету</p>
                        <span class="tab__content-span">Условия оплаты могут быть изменены менеджером по согласованию с клиентом.</span>
                    </div>
                    <input class="tabs__input" name="tabs" type="radio" id="tab-6" />
                    <label class="tabs__label" for="tab-6">
                        Контакты
                        <svg id="tabs__arrow" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.76314 0.736862L9.01314 5.5L0.76314 10.2631L0.76314 0.736862Z" fill="white" />
                        </svg>
                    </label>
                    <div class="tab__content">
                        <p class="tab__content-text"><strong>Юридический адрес</strong></p>
                        <p class="tab__content-text">248010, Калужская обл, г Калуга, ул Высокая, д. 2а, кв. 114</p>
                        <p class="tab__content-text"><strong>Реквизиты:</strong></p>
                        <span class="tab__content-span">
                            ООО "АРМАДА" <br />
                            ИНН: 4028073447 <br />
                            КПП: 402801001 <br />
                            ОГРН: 1224000008957 <br />
                            Расчетный счет: <br />
                            40702810822240010228 <br />
                            Банк: <br />
                            КАЛУЖСКОЕ ОТДЕЛЕНИЕ N8608 ПАО СБЕРБАНК <br />
                            БИК: 042908612<br />
                            Корр. счет: 30101810100000000612
                        </span>
                        <div class="tab__contact">
                            <div class="tab__contact-item">
                                <img src="img/mail.svg" alt="" class="tab__contact-img" />
                                <a href="" class="tab__contact-link">1@techpo.ru</a>
                            </div>
                            <div class="tab__contact-item">
                                <img src="img/phone.svg" alt="" class="tab__contact-img" />
                                <a href="" class="tab__contact-link">8-910-00-00</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include ('catalog.php'); ?>
        <?php include ('cart.php'); ?>
        <?php include ('footer.php'); ?>
    </body>
</html>
