<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Юридическим лицам</title>
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
                <h1 class="description__column-title">Юридическим лицам</h1>
                <div class="description__column-text">
                    <p class="description__column-p"><strong>Условия сотрудничества</strong></p>
                    <p class="description__column-p">Все цены на товары включают НДС 20%.</p>
                    <p class="description__column-p">Документы на товар можно получить по ЭДО («Контур Диадок»), почтой или вместе с товаром.</p>
                    <p class="description__column-p">При оформлении заказа выберите способ оплаты «Счёт на оплату». Укажите ваши реквизиты и выберите способ доставки. Отправка товара ТК осуществляется после получения оплаты.</p>
                    <p class="description__column-p jur">Если вам нужен договор поставки, то вы можете обратиться по телефону или на почту <a class="description__column-a" href="">1@techpo.ru.</a></p>
                </div> 
            </div>
            <div class="description__column">
                <img src="img/person.jpg" alt="" class="description__column-img">
            </div>
        </div>
    </section>
    <?php include ('footer.php'); ?>
    <?php include ('catalog.php'); ?>
    <?php include ('cart.php'); ?>
</body>
</html>