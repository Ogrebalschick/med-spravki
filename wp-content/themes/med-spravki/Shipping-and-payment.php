<?php
/*
Template Name: Shipping and payment

*/
?>
<?php get_header() ?>
<section class="med_table" id="med_table">
    <div class="container">
        <div class="title">
            Медицинские справки
        </div>
        <div class="table">
            <?php echo do_shortcode('[wpdatatable id=2]') ?>
        </div>
        <div class="site_form-btn table-btn buy_spavka shipping_btn">
            <a href="#buy_spavka">Заказать справку</a>
        </div>
    </div>
</section>
    <div class="shipping_text">
        <div class="container">
            <p>
                Покупая товары в нашем интернет-магазине, Вы соглашаетесь с условиями Публичной оферты.
               
                Оплата товара
                Вы можете произвести оплату заказа любым удобным способом:
   
                Наличными тенге курьеру (только при доставке по г. Алматы) или в магазине при самовывозе. Вместе с товаром передается кассовый или товарный чек. У наших курьеров сдача есть всегда!
                Банковской картой (Visa, MasterCard, American Express, а также дебетные электронные карты), эмитированной любым банком в процессе оформления Вашего заказа онлайн. Оплата производится по защищенному каналу через систему Авторизации АО "Halykbank". Удобно, быстро, безопасно!
                Банковским переводом на наш расчетный счет в АО "Halykbank" после оформления Вашего заказа онлайн и обязательного резервирования товара. Счет на оплату открывается в новом окне при оформлении заказа на сайте. При необходимости - просто распечатайте счет
                Доставка товара
                по г. Алматы:
                Интернет-магазин выполняет доставку товара собственной Службой доставки. Доставка осуществляется все дни недели, кроме воскресенья.
                <br><br>
                Бесплатная доставка: по г. Алматы при заказе на сумму свыше 6000 тенге доставка осуществляется бесплатно.
                Платная доставка: по г. Алматы при заказе на сумму менее 6000 тенге стоимость доставки - 1000 тенге.
                Стоимость доставки в отдаленные районы Алматы согласовывается отдельно.
                Вы также можете забрать Ваш товар самостоятельно из нашего магазина. В этом случае Вам необходимо связаться с нами и обязательно зарезервировать Ваш товар и уточнить время и место.
            </p>
        </div>
    </div>


<?php get_footer(); ?>