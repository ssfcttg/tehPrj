<section class="cart">
            <div class="cart__container container">
                <div class="cart__column">
                    <div class="cart__cart" id="cart">
                        <div class="cart__header">
                            <div class="cart__header-name">
                                <div class="cart__header-title">Корзина</div>
                                <div class="cart__header-num"> <span id="cart__header-numCount"></span></div>
                            </div>
                            <div class="cart__header-arc">
                                <div class="cart__header-arc-text">
                                    артикул
                                </div>
                            </div>
                            <div class="cart__header-cant">
                                <div class="cart__header-cant-text">
                                    кол-во
                                </div>
                            </div>
                            <div class="cart__header-price">
                                <div class="cart__header-price-text">
                                    1 товар
                                </div>
                            </div>
                            <div class="cart__header-priceX">
                                <div class="cart__header-priceX-text">
                                    x-товар
                                </div>
                            </div>
                            <div class="cart__header-delete">
                                <button class="cart__delete-all">
                                    Очистить <br>корзину
                                </button>
                            </div>
                        </div>
                        <div class="cart__product">
                            <div class="cart__product-img">
                                <img src="img/products-slide.jpg" alt="">
                                <span class="cart__product-name">Ноутбук CBR LP-15102 15.6"</span>
                            </div>
                            <div class="cart__product-artice">
                                <span class="cart__product-artice-text">
                                    (арт. 115654)
                                </span>
                            </div>
                            <div class="cart__product-cunt">
                                <div class="cart__product-cunt-content">
                                    <button class="cart__product-cuntRemove">
                                        <img src="img/count_remove.svg" alt="">
                                    </button>
                                    <span class="cart__product-cuntNum">1</span>
                                    <button class="cart__product-cuntAdd">
                                        <img src="img/count_add.svg" alt="">
                                    </button>
                                </div>
                            </div>
                            <div class="cart__product-price">
                                <span class="cart__product-price-text">
                                    5 525
                                </span>
                                <img src="/img/r.svg" alt="">
                            </div>
                            <div class="cart__product-priceX">
                                <span class="cart__product-priceX-text">
                                    11 050
                                </span>
                                <img src="/img/r.svg" alt="">
                            </div>
                            <div class="cart__product-delete">
                                <button class="cart__product-deleteButton"> 
                                    удалить
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="cart__form">
                        <h4 class="cart__form-title">
                            Оформление заказа
                        </h4>
                        <div class="cart__form-body">
                        <div class="cart__form-row">
                        <div class="cart__form-column">
                            <form action="" class="cart__form-form">
                                <label>
                                Физ. лицо
                                <input class="cart__form-checkbox" type="checkbox" name="personType" value="fiz" checked onchange="toggleFormFields(this)"/>
                                </label>
                                <span>ФИО</span>
                                <input type="text" placeholder="Иванов Павел Сергеевич" name="fio">
                                <span>Почта</span>
                                <input type="text" placeholder="1256@mail.ru" name="email">
                                <span>Телефон</span>
                                <input type="text" placeholder="8-310-00-00" name="phone">
                            </form>
                            </div>
                            <div class="cart__form-column">
                            <form action="" class="cart__form-form">
                                <label>
                                Юр. Лицо
                                <input class="cart__form-checkbox" type="checkbox" name="personType" value="jur" onchange="toggleFormFields(this)"/>
                                </label>
                                <span>ИНН (автозаполнение)</span>
                                <input type="text" placeholder="Иванов Павел Сергеевич" name="inn" disabled>
                                <span>Компания</span>
                                <input type="text" placeholder="1256@mail.ru" name="company" disabled>
                                <span>КПП</span>
                                <input type="text" placeholder="8-310-00-00" name="kpp" disabled>
                                <span>Юр. адрес</span>
                                <input type="text" placeholder="8-310-00-00" name="address" disabled>
                            </form>
                            </div>
                            </div>
                            <div class="cart__form-row">
                                <h4 class="cart__form-title">
                                    Доставка
                                </h4>
                                <div class="cart__form-column">
                                    <span>Город</span>
                                    <input type="text" placeholder="Москва">
                                </div>
                                <span>Способ получения</span>
                                <div class="cart__form-columnRow">
                                    <div class="cart__form-columnColumn">
                                        <label>
                                            Пункт выдачи
                                            <input class="cart__form-checkbox" type="checkbox" />
                                        </label>
                                        <button class="cart__form-columnColumn-button">
                                            Карта
                                            <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 9L0.803849 -9.78799e-07L11.1962 -7.02746e-08L6 9Z" fill="#CE3E28"/>
                                            </svg>
                                        </button>
                                        <div class="cart__form-map">
                                            <div class="cart__form-map-map">

                                            </div>
                                            <div class="cart__form-map-content">
                                                <span class="cart__form-map-contentTitle">Выбранный пункт выдачи</span>
                                                <span class="cart__form-map-contentStreet">улица Березовская, 101</span>
                                                <span class="cart__form-map-contentSumm">450 руб</span>
                                                <button class="cart__form-map-contentButton">Выбрать другой<br>пункт выдачи</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__form-columnColumn">
                                        <label>
                                            Курьером
                                            <input class="cart__form-columnColumn-checkbox" type="checkbox" />
                                        </label>
                                        <span class="cart__form-adres">Мой адрес</span>
                                        <input class="cart__form-adresInput" type="text" placeholder="Введите значение">
                                        <div class="cart__form-columnInputs">
                                            <input type="text" placeholder="дом">
                                            <input type="text" placeholder="подъезд">
                                            <input type="text" placeholder="квартира">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="cart__form-title sbp">
                                Оплата
                            </h4>
                            <div class="cart__form-row last">
                                <div class="cart__form-column">
                                    <label class="sbp">
                                        СБП
                                        <input class="cart__form-columnColumn-checkbox" type="checkbox" />
                                    </label>
                                    <span>Поясняющий текст как в подробностях происходит оплата</span>
                                </div>
                                <div class="cart__form-column">
                                    <label class="sbp">
                                        Выслать счет
                                        <input class="cart__form-columnColumn-checkbox" type="checkbox" />
                                    </label>
                                    <span>Поясняющий текст как в подробностях происходит оплата</span>
                                </div>
                            </div>
                            <div class="cart__way">
                                <div class="cart__way-path"></div>
                                <div class="cart__way-path"></div>
                                <div class="cart__way-path"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="cart__buy">
                    <div class="cart__buy__contaier">
                        <div class="cart__buy-body">
                            <div class="cart__buy-head">
                                <div class="cart__buy-row">
                                    <span class="cart__buyProductsSumm">2 товара</span>
                                    <span id="cart__buySumm">22 100 ₽</span>
                                </div>
                                <div class="cart__buy-row">
                                    <span>Доставка</span>
                                    <span>СДЭК</span>
                                </div>
                            </div>
                            <div class="cart__buy-summ">
                                <span>К оплате:</span>
                                <span id="cart__buy-summCunt">22 100 ₽</span>
                            </div>
                        </div>
                        <button class="cart__buy-button">
                            Оформить заказ
                        </button>
                        <span class="cart__buy-submit">
                            Нажимая на кнопку "Оформить" Вы подтверждаете своё согласие на обработку персональных данных.
                        </span>
                    </div>
                </aside>
            </div>
        </section>