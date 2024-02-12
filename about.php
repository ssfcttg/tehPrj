<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О компании</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="js/count.js" defer></script>
    <script src="js/cart.js" defer></script>
    <script src="js/script.js" defer></script>
</head>
<body>
    <?php include ('header.html'); ?>
    <section class="description">
        <div class="description__container container">
            <div class="description__column">
                <h1 class="description__column-title">О компании</h1>
                <div class="description__column-text">
                    <p class="description__column-p">Команда «ТехПо» успешно работает в сфере поставок IT оборудования более 8 лет</p>
                    <ul class="description__column-ul">
                        <li class="description__column-li"><p class="description__column-p">На рынке с 2015 года</p></li>
                        <li class="description__column-li"><p class="description__column-p">Приятная цена</p></li>
                        <li class="description__column-li"><p class="description__column-p">Широкий ассортимент товаров</p></li>
                        <li class="description__column-li"><p class="description__column-p">Удобная доставка</p></li>
                    </ul>
                </div> 
            </div>
            <div class="description__column">
                <img src="img/about.jpg" alt="" class="description__column-img">
            </div>
        </div>
    </section>
    <?php include ('footer.php'); ?>
    <?php include ('catalog.php'); ?>
    <?php include ('cart.php'); ?>
</body>
</html>