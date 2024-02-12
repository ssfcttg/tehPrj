<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оплата</title>
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
                <h1 class="description__column-title">Оплата</h1>
                <div class="description__column-text">
                    <p class="description__column-p">Оплата товара производится предварительно и полностью одним из доступных способов:</p>
                    <ul class="description__column-ul">
                        <li class="description__column-li"><p class="description__column-p">Система быстрых платежей</p></li>
                        <li class="description__column-li"><p class="description__column-p">По выставленному счету</p></li>
                    </ul>
                    <p class="description__column-p">Условия оплаты могут быть изменены менеджером по согласованию с клиентом.</p>
                </div> 
            </div>
            <div class="description__column">
                <img src="img/pay.jpg" alt="" class="description__column-img">
            </div>
        </div>
    </section>
    <?php include ('footer.php'); ?>
    <?php include ('catalog.php'); ?>
    <?php include ('cart.php'); ?>
</body>
</html>