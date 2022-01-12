<?php
session_start();
require_once "../../pages/login/php/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/shipping returns.css">
    <title>Доставка & Возврат - MSA Skis</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <?php require_once "../../pages/include/header/header.php";?>
        </header>
        <main class="page _container">
                <section class="page__header header-page"> 
                    <div class="header-page__container">
                        <h1 class="header-page__title">Доставка & Возврат</h1>
                    </div>
                </section>
                <div class="wrapper">
                    <section class="page__discription">
                        <div class="discription__container">
                            <p class="discription__text sub__title">Бесплатная доставка на все заказы больше 30 000 по России</p>
                            <p class="discription__text sub__text">Стоимость доставки за пределы России по фиксированной ставке:</p>
                            <p class="discription__text">Канада - 50$</p>
                            <p class="discription__text">Новая зеландия и Австралия - 149$</p>
                            <p class="discription__text">По миру - 99$</p>
                            <p class="discription__text italic">*Бесплатная доставка не распространяется на скидку или кастомные лыжи</p>
                        </div>
                        <div class="discription__container">
                            <p class="discription__text">
                                MSA предлагает бесплатную доставку для заказов на полную стоимость свыше 30 000 рублей 
                                в пределах России. Данная акция не распространяется на товары со скидкой, товары для 
                                профессионалов, товары на заказ или товары, находящиеся в продаже. В настоящее время срок 
                                обработки заказов составляет 1-2 рабочих дня для товаров, имеющихся в наличии. В течение 
                                этого времени ваш онлайн-заказ надежно упаковывается и обрабатывается для отправки как можно 
                                быстрее. Лыжи обычно отправляются через Fedex Ground или Fedex International Economy, в 
                                некоторые страны мы используем USPS. Доставка Fedex 2 дня, но стоит больше, в зависимости 
                                от вашего местоположения и веса посылки.
                            </p>
                        </div>
                        <div class="discription__container">
                            <p class="discription__text">
                                Мы стремимся к тому, чтобы ваш заказ был доставлен вам как можно быстрее. Если вы считаете, 
                                что задержка в отправке вашего заказа превысила обычное время обработки и отправки, 
                                пожалуйста, сообщите нам об этом по электронной почте info@msa.com.
                            </p>
                        </div>
                        <div class="discription__container">
                            <p class="discription__text italic">
                                *Обратная доставка не является бесплатной. 
                            </p>
                        </div>
                        <div class="discription__container">
                            <p class="discription__text title">
                                Международная доставка:
                            </p>
                            <p class="discription__text">
                                Мы осуществляем международную доставку с помощью Fedex International Economy. Если ваша 
                                страна не указана в выпадающем списке для доставки, пожалуйста, свяжитесь со службой 
                                поддержки клиентов по адресу info@msa.com, чтобы узнать стоимость международной 
                                доставки. Международные заказы могут облагаться импортными сборами, таможенными пошлинами, 
                                пошлинами, налогами на добавленную стоимость (НДС) и т.д., которые не включены в цены и 
                                стоимость доставки, указанные на нашем сайте. Ответственность за эти расходы несет исключительно 
                                покупатель.
                            </p>
                        </div>    
                        <div class="discription__container">
                            <p class="discription__text title">
                                Политика возврата:
                            </p>
                            <p class="discription__text">
                                Мы принимаем возврат наших товаров в абсолютно новом состоянии в течение 30 дней с момента 
                                покупки. Если ваш товар соответствует этим критериям, пожалуйста, свяжитесь со службой 
                                поддержки клиентов по адресу info@msa.com. Покупатели несут ответственность за 
                                расходы на обратную доставку.
                            </p>
                        </div>
                        <div class="discription__container">
                            <p class="discription__text">
                                Как только мы получим ваш возврат, мы выдадим возмещение на вашу первоначальную форму оплаты. 
                                Возврат может занять 3-5 рабочих дней, чтобы отразиться в выписке по вашей кредитной карте 
                                после получения товара.
                            </p>
                            <p class="discription__text">
                                Пожалуйста, обращайтесь в службу поддержки клиентов с любыми вопросами по адресу 
                                info@msa.com.
                            </p>
                        </div>       
                    </section>
                </div>
        </main>      
        <footer>
            <?php require_once "../../pages/include/footer/footer.php";?>
        </footer> 
    </div>
</body>
</html>