<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Планшеты</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/products.css" />
        <link rel="stylesheet" href="css/cart.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
        <script src="js/script.js" defer></script>
        <script src="js/count.js" defer></script>
        <script src="js/cart.js" defer></script>
    </head>
    <body>
        <?php include ('header.html'); ?>

        <div class="products">
            <div class="products__header container">
                <div class="products__way">
                    <a href="#">Каталог/</a>
                    <a href="#">Компьютеры/</a>
                    <a href="#">Планшеты</a>
                </div>
                <div class="products__pageName">
                    <h1 class="products__pageTitle">
                        Планшеты
                    </h1>
                    <span class="products__pageText products__num">63</span>
                    <span class="products__pageText">Товара</span>
                </div>
                <div class="products__headerButton">
                    <button class="products__headerButton-buttonLine">
                        <svg width="32" height="27" viewBox="0 0 32 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="32" height="7" rx="3" fill="#D9D9D9" />
                            <rect y="20" width="32" height="7" rx="3" fill="#D9D9D9" />
                            <rect y="10" width="32" height="7" rx="3" fill="#D9D9D9" />
                        </svg>
                    </button>
                    <button class="products__headerButton-buttonBlock">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="12" height="12" fill="#C91111" fill-opacity="0.35" />
                            <rect y="15" width="12" height="12" fill="#C91111" fill-opacity="0.35" />
                            <rect x="15" y="15" width="12" height="12" fill="#C91111" fill-opacity="0.35" />
                            <rect x="15" width="12" height="12" fill="#C91111" fill-opacity="0.35" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="products__container container">
                <aside class="products__filter">
                    <div class="products__filter-container">
                        <div class="filter__price">
                            <button class="filter__price-button">
                                Цена
                                <svg id="tabs__arrow" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.76314 0.736862L9.01314 5.5L0.76314 10.2631L0.76314 0.736862Z" fill="#000"></path>
                                </svg>
                            </button>
                            <div class="filter__price-inputs">
                                <input type="number" id="priceFrom" placeholder="От 150" />
                                <input type="number" id="priceTo" placeholder="До 500 000" />
                                <input type="range" id="priceRange" min="150" max="500000" step="3 333,3" oninput="priceTo.value = priceRange.value" />
                            </div>
                        </div>
                        <div class="filter__brend">
                            <button class="filter__brend-button">
                                Бренд
                                <svg id="tabs__arrow" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.76314 0.736862L9.01314 5.5L0.76314 10.2631L0.76314 0.736862Z" fill="#000"></path>
                                </svg>
                            </button>
                            <div class="filter__brend-item" style="display: none;">
                                <ul class="filter__brend-list">
                                    <label>
                                        Apple
                                        <input type="checkbox" />
                                    </label>
                                    <label>
                                        Hp
                                        <input type="checkbox" />
                                    </label>
                                    <label>
                                        Samsung
                                        <input type="checkbox" />
                                    </label>
                                    <label>
                                        Lenovo
                                        <input type="checkbox" />
                                    </label>
                                    <label>
                                        OPPO
                                        <input type="checkbox" />
                                    </label>
                                </ul>
                                <button class="filter__show-more-button">показать еще ..</button>
                            </div>
                        </div>
                        <div class="filter__categories">
                            <button class="filter__categories-button">
                                Категории
                                <svg id="tabs__arrow" width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.76314 0.736862L9.01314 5.5L0.76314 10.2631L0.76314 0.736862Z" fill="#000"></path>
                                </svg>
                            </button>
                            <div class="filter__categories-item" style="display: none;">
                                <ul class="filter__categories-list">
                                    <label>
                                        Ноутбуки
                                        <input type="checkbox" />
                                    </label>
                                    <label>
                                        Планшеты
                                        <input type="checkbox" />
                                    </label>
                                    <label>
                                        Компьютеры
                                        <input type="checkbox" />
                                    </label>
                                    <label>
                                        Неттопы
                                        <input type="checkbox" />
                                    </label>
                                    <label>
                                        Аксессуары к ноутбукам
                                        <input type="checkbox" />
                                    </label>
                                    <label>
                                        Моноблоки
                                        <input type="checkbox" />
                                    </label>
                                    <label>
                                        Аксессуары к планшетам
                                        <input type="checkbox" />
                                    </label>
                                </ul>
                                <button class="categories-show-more-button">показать еще ..</button>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="product__page">
                    <div class="products__page-container">
                        <div class="products__item" id="product1">
                            <div class="products__item-slider">
                                <div class="products__slider-preview swiper thumbs">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider main container -->
                                <div class="products__slider swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <img class="card__prev" src="img/card_prev.svg" alt="" />
                                    <img class="card__next" src="img/card_next.svg" alt="" />
                                </div>
                            </div>

                            <div class="products__item-column">
                                <span class="products__price">23 300 <img src="img/r.svg" alt="" /></span>
                                <h4 class="products__title">Хуюктер Apple Mac mini 2023</h4>
                                <p class="price__accessories">
                                    [MNH73LL/A] silver M2 Pro 10C CPU 16C GPU/16GB/512GB SSD
                                </p>
                                <span class="products__article">(арт. 115654)</span>
                                <div class="price__rate">
                                    <div class="price__stars">
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_none.svg" alt="" class="price__star" />
                                    </div>
                                    <span>4.0</span>
                                </div>
                                <span class="price__desc" available="true">В наличии</span>
                            </div>
                            <div class="products__item-column">
                                <span class="products__price-button">23 300 <img src="img/r.svg" alt="" /></span>
                                <button class="price__button" data-index="0" onclick="addToCart(0)">В корзину</button>
                                <div class="price__button-active hide">
                                    <button class="price__button-click">В корзине</button>
                                    <div class="price__counter">
                                        <button onclick="removeFromCart(0)" class="price__counter-add" data-index="0">
                                            <img src="img/count_remove.svg" alt="" />
                                        </button>
                                        <div id="price__amount" class="price__amount">0</div>
                                        <button onclick="addToCart(0)" class="price__counter-remove" data-index="0">
                                            <img src="img/count_add.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products__item" id="product2">
                            <div class="products__item-slider">
                                <div class="products__slider-preview swiper thumbs">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider main container -->
                                <div class="products__slider swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <img class="card__prev" src="img/card_prev.svg" alt="" />
                                    <img class="card__next" src="img/card_next.svg" alt="" />
                                </div>
                            </div>

                            <div class="products__item-column">
                                <span class="products__price">23 300 <img src="img/r.svg" alt="" /></span>
                                <h4 class="products__title">Компьютер Apple Mac mini 2023</h4>
                                <p class="price__accessories">
                                    [MNH73LL/A] silver M2 Pro 10C CPU 16C GPU/16GB/512GB SSD
                                </p>
                                <span class="products__article">(арт. 115654)</span>
                                <div class="price__rate">
                                    <div class="price__stars">
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_none.svg" alt="" class="price__star" />
                                    </div>
                                    <span>4.0</span>
                                </div>
                                <span class="price__desc" available="true">В наличии</span>
                            </div>
                            <div class="products__item-column">
                                <span class="products__price-button">23 300 <img src="img/r.svg" alt="" /></span>
                                <button class="price__button" data-index="1" onclick="addToCart(1)">В корзину</button>
                                <div class="price__button-active hide">
                                    <button class="price__button-click">В корзине</button>
                                    <div class="price__counter">
                                        <button onclick="removeFromCart(1)" class="price__counter-add" data-index="1">
                                            <img src="img/count_remove.svg" alt="" />
                                        </button>
                                        <div id="price__amount" class="price__amount">0</div>
                                        <button onclick="addToCart(1)" class="price__counter-remove" data-index="1">
                                            <img src="img/count_add.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products__item" id="product3">
                            <div class="products__item-slider">
                                <div class="products__slider-preview swiper thumbs">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider main container -->
                                <div class="products__slider swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <img class="card__prev" src="img/card_prev.svg" alt="" />
                                    <img class="card__next" src="img/card_next.svg" alt="" />
                                </div>
                            </div>

                            <div class="products__item-column">
                                <span class="products__price">23 300 <img src="img/r.svg" alt="" /></span>
                                <h4 class="products__title">Компьютер Apple Mac mini 2023</h4>
                                <p class="price__accessories">
                                    [MNH73LL/A] silver M2 Pro 10C CPU 16C GPU/16GB/512GB SSD
                                </p>
                                <span class="products__article">(арт. 115654)</span>
                                <div class="price__rate">
                                    <div class="price__stars">
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_none.svg" alt="" class="price__star" />
                                    </div>
                                    <span>4.0</span>
                                </div>
                                <span class="price__desc" available="true">В наличии</span>
                            </div>
                            <div class="products__item-column">
                                <span class="products__price-button">23 300 <img src="img/r.svg" alt="" /></span>
                                <button class="price__button" data-index="2" onclick="addToCart(2)">В корзину</button>
                                <div class="price__button-active hide">
                                    <button class="price__button-click">В корзине</button>
                                    <div class="price__counter">
                                        <button onclick="removeFromCart(2)" class="price__counter-add" data-index="2">
                                            <img src="img/count_remove.svg" alt="" />
                                        </button>
                                        <div id="price__amount" class="price__amount">0</div>
                                        <button onclick="addToCart(2)" class="price__counter-remove" data-index="2">
                                            <img src="img/count_add.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products__item" id="product4">
                            <div class="products__item-slider">
                                <div class="products__slider-preview swiper thumbs">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider main container -->
                                <div class="products__slider swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <img class="card__prev" src="img/card_prev.svg" alt="" />
                                    <img class="card__next" src="img/card_next.svg" alt="" />
                                </div>
                            </div>

                            <div class="products__item-column">
                                <span class="products__price">23 300 <img src="img/r.svg" alt="" /></span>
                                <h4 class="products__title">Компьютер Apple Mac mini 2023</h4>
                                <p class="price__accessories">
                                    [MNH73LL/A] silver M2 Pro 10C CPU 16C GPU/16GB/512GB SSD
                                </p>
                                <span class="products__article">(арт. 115654)</span>
                                <div class="price__rate">
                                    <div class="price__stars">
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_none.svg" alt="" class="price__star" />
                                    </div>
                                    <span>4.0</span>
                                </div>
                                <span class="price__desc" available="true">В наличии</span>
                            </div>
                            <div class="products__item-column">
                                <span class="products__price-button">23 300 <img src="img/r.svg" alt="" /></span>
                                <button class="price__button" data-index="3" onclick="addToCart(3)">В корзину</button>
                                <div class="price__button-active hide">
                                    <button class="price__button-click">В корзине</button>
                                    <div class="price__counter">
                                        <button onclick="removeFromCart(3)" class="price__counter-add" data-index="3">
                                            <img src="img/count_remove.svg" alt="" />
                                        </button>
                                        <div id="price__amount" class="price__amount">0</div>
                                        <button onclick="addToCart(3)" class="price__counter-remove" data-index="3">
                                            <img src="img/count_add.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products__item" id="product5">
                            <div class="products__item-slider">
                                <div class="products__slider-preview swiper thumbs">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider main container -->
                                <div class="products__slider swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <img class="card__prev" src="img/card_prev.svg" alt="" />
                                    <img class="card__next" src="img/card_next.svg" alt="" />
                                </div>
                            </div>

                            <div class="products__item-column">
                                <span class="products__price">23 300 <img src="img/r.svg" alt="" /></span>
                                <h4 class="products__title">Компьютер Apple Mac mini 2023</h4>
                                <p class="price__accessories">
                                    [MNH73LL/A] silver M2 Pro 10C CPU 16C GPU/16GB/512GB SSD
                                </p>
                                <span class="products__article">(арт. 115654)</span>
                                <div class="price__rate">
                                    <div class="price__stars">
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_none.svg" alt="" class="price__star" />
                                    </div>
                                    <span>4.0</span>
                                </div>
                                <span class="price__desc" available="true">В наличии</span>
                            </div>
                            <div class="products__item-column">
                                <span class="products__price-button">23 300 <img src="img/r.svg" alt="" /></span>
                                <button class="price__button" data-index="4" onclick="addToCart(4)">В корзину</button>
                                <div class="price__button-active hide">
                                    <button class="price__button-click">В корзине</button>
                                    <div class="price__counter">
                                        <button onclick="removeFromCart(4)" class="price__counter-add" data-index="4">
                                            <img src="img/count_remove.svg" alt="" />
                                        </button>
                                        <div id="price__amount" class="price__amount">0</div>
                                        <button onclick="addToCart(4)" class="price__counter-remove" data-index="4">
                                            <img src="img/count_add.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products__item" id="product6">
                            <div class="products__item-slider">
                                <div class="products__slider-preview swiper thumbs">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider main container -->
                                <div class="products__slider swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <img class="card__prev" src="img/card_prev.svg" alt="" />
                                    <img class="card__next" src="img/card_next.svg" alt="" />
                                </div>
                            </div>

                            <div class="products__item-column">
                                <span class="products__price">23 300 <img src="img/r.svg" alt="" /></span>
                                <h4 class="products__title">Компьютер Apple Mac mini 2023</h4>
                                <p class="price__accessories">
                                    [MNH73LL/A] silver M2 Pro 10C CPU 16C GPU/16GB/512GB SSD
                                </p>
                                <span class="products__article">(арт. 115654)</span>
                                <div class="price__rate">
                                    <div class="price__stars">
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_none.svg" alt="" class="price__star" />
                                    </div>
                                    <span>4.0</span>
                                </div>
                                <span class="price__desc" available="true">В наличии</span>
                            </div>
                            <div class="products__item-column">
                                <span class="products__price-button">23 300 <img src="img/r.svg" alt="" /></span>
                                <button class="price__button" data-index="5" onclick="addToCart(5)">В корзину</button>
                                <div class="price__button-active hide">
                                    <button class="price__button-click">В корзине</button>
                                    <div class="price__counter">
                                        <button onclick="removeFromCart(5)" class="price__counter-add" data-index="5">
                                            <img src="img/count_remove.svg" alt="" />
                                        </button>
                                        <div id="price__amount" class="price__amount">0</div>
                                        <button onclick="addToCart(5)" class="price__counter-remove" data-index="5">
                                            <img src="img/count_add.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- HIDE -->

                        <div class="products__item" id="product7">
                            <div class="products__item-slider">
                                <div class="products__slider-preview swiper thumbs">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider main container -->
                                <div class="products__slider swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <img class="card__prev" src="img/card_prev.svg" alt="" />
                                    <img class="card__next" src="img/card_next.svg" alt="" />
                                </div>
                            </div>

                            <div class="products__item-column">
                                <span class="products__price">23 300 <img src="img/r.svg" alt="" /></span>
                                <h4 class="products__title">Компьютер Apple Mac mini 2023</h4>
                                <p class="price__accessories">
                                    [MNH73LL/A] silver M2 Pro 10C CPU 16C GPU/16GB/512GB SSD
                                </p>
                                <span class="products__article">(арт. 115654)</span>
                                <div class="price__rate">
                                    <div class="price__stars">
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_none.svg" alt="" class="price__star" />
                                    </div>
                                    <span>4.0</span>
                                </div>
                                <span class="price__desc" available="true">В наличии</span>
                            </div>
                            <div class="products__item-column">
                                <span class="products__price-button">23 300 <img src="img/r.svg" alt="" /></span>
                                <button class="price__button" data-index="6" onclick="addToCart(6)">В корзину</button>
                                <div class="price__button-active hide">
                                    <button class="price__button-click">В корзине</button>
                                    <div class="price__counter">
                                        <button onclick="removeFromCart(6)" class="price__counter-add" data-index="6">
                                            <img src="img/count_remove.svg" alt="" />
                                        </button>
                                        <div id="price__amount" class="price__amount">0</div>
                                        <button onclick="addToCart(6)" class="price__counter-remove" data-index="6">
                                            <img src="img/count_add.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products__item" id="product8">
                            <div class="products__item-slider">
                                <div class="products__slider-preview swiper thumbs">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider main container -->
                                <div class="products__slider swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <img class="card__prev" src="img/card_prev.svg" alt="" />
                                    <img class="card__next" src="img/card_next.svg" alt="" />
                                </div>
                            </div>

                            <div class="products__item-column">
                                <span class="products__price">23 300 <img src="img/r.svg" alt="" /></span>
                                <h4 class="products__title">Компьютер Apple Mac mini 2023</h4>
                                <p class="price__accessories">
                                    [MNH73LL/A] silver M2 Pro 10C CPU 16C GPU/16GB/512GB SSD
                                </p>
                                <span class="products__article">(арт. 115654)</span>
                                <div class="price__rate">
                                    <div class="price__stars">
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_none.svg" alt="" class="price__star" />
                                    </div>
                                    <span>4.0</span>
                                </div>
                                <span class="price__desc" available="true">В наличии</span>
                            </div>
                            <div class="products__item-column">
                                <span class="products__price-button">23 300 <img src="img/r.svg" alt="" /></span>
                                <button class="price__button" data-index="7" onclick="addToCart(7)">В корзину</button>
                                <div class="price__button-active hide">
                                    <button class="price__button-click">В корзине</button>
                                    <div class="price__counter">
                                        <button onclick="removeFromCart(7)" class="price__counter-add" data-index="7">
                                            <img src="img/count_remove.svg" alt="" />
                                        </button>
                                        <div id="price__amount" class="price__amount">0</div>
                                        <button onclick="addToCart(7)" class="price__counter-remove" data-index="7">
                                            <img src="img/count_add.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products__item" id="product9">
                            <div class="products__item-slider">
                                <div class="products__slider-preview swiper thumbs">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider main container -->
                                <div class="products__slider swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <img class="card__prev" src="img/card_prev.svg" alt="" />
                                    <img class="card__next" src="img/card_next.svg" alt="" />
                                </div>
                            </div>

                            <div class="products__item-column">
                                <span class="products__price">23 300 <img src="img/r.svg" alt="" /></span>
                                <h4 class="products__title">Компьютер Apple Mac mini 2023</h4>
                                <p class="price__accessories">
                                    [MNH73LL/A] silver M2 Pro 10C CPU 16C GPU/16GB/512GB SSD
                                </p>
                                <span class="products__article">(арт. 115654)</span>
                                <div class="price__rate">
                                    <div class="price__stars">
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_none.svg" alt="" class="price__star" />
                                    </div>
                                    <span>4.0</span>
                                </div>
                                <span class="price__desc" available="true">В наличии</span>
                            </div>
                            <div class="products__item-column">
                                <span class="products__price-button">23 300 <img src="img/r.svg" alt="" /></span>
                                <button class="price__button" data-index="8" onclick="addToCart(8)">В корзину</button>
                                <div class="price__button-active hide">
                                    <button class="price__button-click">В корзине</button>
                                    <div class="price__counter">
                                        <button onclick="removeFromCart(8)" class="price__counter-add" data-index="8">
                                            <img src="img/count_remove.svg" alt="" />
                                        </button>
                                        <div id="price__amount" class="price__amount">0</div>
                                        <button onclick="addToCart(8)" class="price__counter-remove" data-index="8">
                                            <img src="img/count_add.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products__item" id="product10">
                            <div class="products__item-slider">
                                <div class="products__slider-preview swiper thumbs">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider main container -->
                                <div class="products__slider swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <img class="card__prev" src="img/card_prev.svg" alt="" />
                                    <img class="card__next" src="img/card_next.svg" alt="" />
                                </div>
                            </div>

                            <div class="products__item-column">
                                <span class="products__price">23 300 <img src="img/r.svg" alt="" /></span>
                                <h4 class="products__title">Компьютер Apple Mac mini 2023</h4>
                                <p class="price__accessories">
                                    [MNH73LL/A] silver M2 Pro 10C CPU 16C GPU/16GB/512GB SSD
                                </p>
                                <span class="products__article">(арт. 115654)</span>
                                <div class="price__rate">
                                    <div class="price__stars">
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_none.svg" alt="" class="price__star" />
                                    </div>
                                    <span>4.0</span>
                                </div>
                                <span class="price__desc" available="true">В наличии</span>
                            </div>
                            <div class="products__item-column">
                                <span class="products__price-button">23 300 <img src="img/r.svg" alt="" /></span>
                                <button class="price__button" data-index="9" onclick="addToCart(9)">В корзину</button>
                                <div class="price__button-active hide">
                                    <button class="price__button-click">В корзине</button>
                                    <div class="price__counter">
                                        <button onclick="removeFromCart(9)" class="price__counter-add" data-index="9">
                                            <img src="img/count_remove.svg" alt="" />
                                        </button>
                                        <div id="price__amount" class="price__amount">0</div>
                                        <button onclick="addToCart(9)" class="price__counter-remove" data-index="9">
                                            <img src="img/count_add.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products__item" id="product11">
                            <div class="products__item-slider">
                                <div class="products__slider-preview swiper thumbs">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider main container -->
                                <div class="products__slider swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <img class="card__prev" src="img/card_prev.svg" alt="" />
                                    <img class="card__next" src="img/card_next.svg" alt="" />
                                </div>
                            </div>

                            <div class="products__item-column">
                                <span class="products__price">23 300 <img src="img/r.svg" alt="" /></span>
                                <h4 class="products__title">Компьютер Apple Mac mini 2023</h4>
                                <p class="price__accessories">
                                    [MNH73LL/A] silver M2 Pro 10C CPU 16C GPU/16GB/512GB SSD
                                </p>
                                <span class="products__article">(арт. 115654)</span>
                                <div class="price__rate">
                                    <div class="price__stars">
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_none.svg" alt="" class="price__star" />
                                    </div>
                                    <span>4.0</span>
                                </div>
                                <span class="price__desc" available="true">В наличии</span>
                            </div>
                            <div class="products__item-column">
                                <span class="products__price-button">23 300 <img src="img/r.svg" alt="" /></span>
                                <button class="price__button" data-index="10" onclick="addToCart(10)">В корзину</button>
                                <div class="price__button-active hide">
                                    <button class="price__button-click">В корзине</button>
                                    <div class="price__counter">
                                        <button onclick="removeFromCart(10)" class="price__counter-add" data-index="10">
                                            <img src="img/count_remove.svg" alt="" />
                                        </button>
                                        <div id="price__amount" class="price__amount">0</div>
                                        <button onclick="addToCart(10)" class="price__counter-remove" data-index="10">
                                            <img src="img/count_add.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products__item" id="product12">
                            <div class="products__item-slider">
                                <div class="products__slider-preview swiper thumbs">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider main container -->
                                <div class="products__slider swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="products__slider-wrapper swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                        <div class="products__slider-slide swiper-slide">
                                            <div class="products__slider-content">
                                                <img src="img/products-slide.jpg" alt="" class="products__slider-img" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <img class="card__prev" src="img/card_prev.svg" alt="" />
                                    <img class="card__next" src="img/card_next.svg" alt="" />
                                </div>
                            </div>

                            <div class="products__item-column">
                                <span class="products__price">23 300 <img src="img/r.svg" alt="" /></span>
                                <h4 class="products__title">Компьютер Apple Mac mini 2023</h4>
                                <p class="price__accessories">
                                    [MNH73LL/A] silver M2 Pro 10C CPU 16C GPU/16GB/512GB SSD
                                </p>
                                <span class="products__article">(арт. 115654)</span>
                                <div class="price__rate">
                                    <div class="price__stars">
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_fill.svg" alt="" class="price__star" />
                                        <img src="img/star_none.svg" alt="" class="price__star" />
                                    </div>
                                    <span>4.0</span>
                                </div>
                                <span class="price__desc" available="true">В наличии</span>
                            </div>
                            <div class="products__item-column">
                                <span class="products__price-button">23 300 <img src="img/r.svg" alt="" /></span>
                                <button class="price__button" data-index="11" onclick="addToCart(11)">В корзину</button>
                                <div class="price__button-active hide">
                                    <button class="price__button-click">В корзине</button>
                                    <div class="price__counter">
                                        <button onclick="removeFromCart(11)" class="price__counter-add" data-index="11">
                                            <img src="img/count_remove.svg" alt="" />
                                        </button>
                                        <div id="price__amount" class="price__amount">0</div>
                                        <button onclick="addToCart(11)" class="price__counter-remove" data-index="11">
                                            <img src="img/count_add.svg" alt="" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="products__moreButton" id="showMoreButton">Показать больше</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="product__open">
            <div class="product__open-container">
                <div class="product__open-way">
                    <a href="">Каталог/</a>
                    <a href="">Компьютеры/</a>
                    <a href="">Apple/</a>
                    <a href="">Компьютер Apple Mac mini 2023 [MNH73LL/A] silver M2 Pro ...</a>
                </div>
                <div class="product__open-item">
                    <div class="product__open-desc">
                        <h3 class="product__open-name">Apple Mac mini 2023 </h3>
                        <span class="product__open-artcile">(арт. 115654)</span>
                        <div class="product__open-rate">
                            <div class="product__open-star">
                                <img src="/img/star_fill.svg" alt="">
                                <img src="/img/star_fill.svg" alt="">
                                <img src="/img/star_fill.svg" alt="">
                                <img src="/img/star_fill.svg" alt="">
                                <img src="/img/star_none.svg" alt="">
                            </div>
                            <span class="product__open-rateText">
                                4.0
                            </span>
                            <div class="product__open-stock">
                                В наличии
                            </div>
                        </div>
                    </div>
                    <div class="product__open-slider">
                        
                    </div>
                </div>
            </div>
        </div> -->

        <?php include ('footer.php'); ?>
        <?php include ('catalog.php'); ?>
        <?php include ('cart.php'); ?>
    </body>
</html>

