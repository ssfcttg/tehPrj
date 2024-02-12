<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доставка</title>
    <script src="js/script.js" defer></script>
    <script src="js/cart.js" defer></script>
    <script src="js/count.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
    <?php include ('header.html'); ?>
    <section class="description">
        <div class="description__container container">
            <div class="description__column">
                <h1 class="description__column-title">Доставка</h1>
                <div class="description__column-text">
                    <p class="description__column-p">Доставка товара осуществляется через транспортные компании.</p>
                    <p class="description__column-p">Расчет стоимости производится при оформлении заказа с помощью калькулятора расчета доставки на сайте или менеджером при необходимости. </p>
                    <p class="description__column-p">Условия и стоимость доставки может быть изменена менеджером только после согласования  с клиентом.</p>
                    <p class="description__column-p">Клиент вправе выбрать любую транспортную компанию, которая одновременно присутствует в населенном пункте отправителя и получателя.</p>
                    <p class="description__column-p">Самовывоз не осуществляется.</p>
                </div> 
            </div>
            <div class="description__column">
                <img src="img/delivery.jpg" alt="" class="description__column-img">
            </div>
        </div>
    </section>
    <?php include ('footer.php'); ?>
    <?php include ('catalog.php'); ?>
    <?php include ('cart.php'); ?>
</body>
</html>