<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гарантия</title>
    <script src="js/script.js" defer></script>
    <script src="js/cart.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
    <?php include ('header.html'); ?>
    <section class="description">
        <div class="description__container container">
            <div class="description__column">
                <h1 class="description__column-title">Гарантия</h1>
                <div class="description__column-text">
                    <p class="description__column-p">Все товары в интернет магазине новые и имеют свой срок гарантийного обслуживания.</p>
                    <p class="description__column-p">Гарантия и обслуживание устанавливается производителем.</p>
                    <p class="description__column-p">Гарантийное обслуживание товаров выполняется производителем.</p>
                    <h2 class="description__column-h2">Как воспользоваться гарантией?</h2>
                    <ul class="description__column-ul">
                        <li class="description__column-li"><p class="description__column-p">Обратиться напрямую в авторизованный сервисный центр.</p></li>
                        <li class="description__column-li"><p class="description__column-p">Обратиться в наш магазин.</p></li>
                        <li class="description__column-li"><p class="description__column-p">Обязательно иметь при себе чек или накладную.</p></li>
                    </ul>
                    <span class="description__column-span">В случае невозможности поставки товара денежные средства возвращаются покупателю по заявлению в течении срока, установленного законами РФ.</span>
                </div> 
            </div>
            <div class="description__column">
                <img src="img/safeguard.jpg" alt="" class="description__column-img">
            </div>
        </div>
    </section>
    <?php include ('footer.php'); ?>
    <?php include ('catalog.php'); ?>
    <?php include ('cart.php'); ?>
</body>
</html>