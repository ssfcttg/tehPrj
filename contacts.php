<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <script src="js/script.js" defer></script>
    <script src="js/script.js" defer></script>
    <script src="js/count.js" defer></script>
    <script src="js/cart.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
    <?php include ('header.html'); ?>
    <section class="description">
        <div class="description__container container">
            <div class="description__column">
                <h1 class="description__column-title">Контактная информация</h1>
                <div class="description__column-text">
                    <div class="description__item">
                        <img src="/img/phone.svg" alt="" class="description__item-img">
                        <a class="description__item-a" href="tel:8-910-00-00">8-910-00-00</a>
                    </div>
                    <div class="description__item">
                        <img src="/img/mail.svg" alt="" class="description__item-img">
                        <a class="description__item-a" href="mailto:1@techpo.ru">1@techpo.ru</a>
                    </div>
                    <h2 class="description__column-h2">Реквизиты:</h2>
                    <span class="description__column-span">
                        ООО "АРМАДА" <br>
                        ИНН: 4028073447 <br>
                        КПП: 402801001 <br>
                        ОГРН: 1224000008957 <br>
                        Расчетный счет:40702810822240010228 <br>
                        Банк: КАЛУЖСКОЕ ОТДЕЛЕНИЕ N8608 ПАО СБЕРБАНК <br>
                        БИК: 042908612 <br>
                        Корр. счет: 30101810100000000612 <br>
                    </span>
                    <h2 class="description__column-h2">Юридический адрес:</h2>
                    <p class="description__column-p upper">248010, Калужская обл, <br> г Калуга, ул Высокая, д. 2а, кв. 114</p>
                </div> 
            </div>
            <div class="description__column">
                <img src="img/contact.jpg" alt="" class="description__column-img">
            </div>
        </div>
    </section>
    <?php include ('footer.php'); ?>
    <?php include ('catalog.php'); ?>
    <?php include ('cart.php'); ?>
</body>
</html>