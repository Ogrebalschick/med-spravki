<?php
/*
Template Name: Shipping and payment

*/
?>
<?php get_header() ?>
<main class="shipping">
    <section class="med_table" id="med_table">
        <div class="container">
            <div class="title">
                Медицинские справки
            </div>
            <section class="med_table">
                <div class="container">
                    <div class="med_table-item">
                        <div class="med_table-category">
                            <?php
                            $cat_name = get_the_category_by_ID(28);
                            echo $cat_name;
                            ?>
                        </div>
                        <div class="med_table-products">
                            <?php echo do_shortcode('[product_category category="28"]') ?>
                        </div>
                    </div>
                    <div class="med_table-item">
                        <div class="med_table-category">
                            <?php
                            $cat_name = get_the_category_by_ID(29);
                            echo $cat_name;
                            ?>
                        </div>
                        <div class="med_table-products">
                            <?php echo do_shortcode('[product_category category="29"]') ?>
                        </div>
                    </div>
                    <div class="med_table-item">
                        <div class="med_table-category">
                            <?php
                            $cat_name = get_the_category_by_ID(30);
                            echo $cat_name;
                            ?>
                        </div>
                        <div class="med_table-products">
                            <?php echo do_shortcode('[product_category category="30"]') ?>
                        </div>
                    </div>
                    <div class="med_table-item">
                        <div class="med_table-category">
                            <?php
                            $cat_name = get_the_category_by_ID(35);
                            echo $cat_name;
                            ?>
                        </div>
                        <div class="med_table-products">
                            <?php echo do_shortcode('[product_category category="35"]') ?>
                        </div>
                    </div>
                    <div class="med_table-item">
                        <div class="med_table-category">
                            <?php
                            $cat_name = get_the_category_by_ID(36);
                            echo $cat_name;
                            ?>
                        </div>
                        <div class="med_table-products">
                            <?php echo do_shortcode('[product_category category="36"]') ?>
                        </div>
                    </div>
                    <div class="med_table-item">
                        <div class="med_table-category">
                            <?php
                            $cat_name = get_the_category_by_ID(37);
                            echo $cat_name;
                            ?>
                        </div>
                        <div class="med_table-products">
                            <?php echo do_shortcode('[product_category category="37"]') ?>
                        </div>
                    </div>
                    <div class="med_table-item">
                        <div class="med_table-category">
                            <?php
                            $cat_name = get_the_category_by_ID(38);
                            echo $cat_name;
                            ?>
                        </div>
                        <div class="med_table-products">
                            <?php echo do_shortcode('[product_category category="38"]') ?>
                        </div>
                    </div>
                    <div class="med_table-item">
                        <div class="med_table-category">
                            <?php
                            $cat_name = get_the_category_by_ID(39);
                            echo $cat_name;
                            ?>
                        </div>
                        <div class="med_table-products">
                            <?php echo do_shortcode('[product_category category="39"]') ?>
                        </div>
                    </div>
                </div>
            </section>
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
</main>

<?php get_footer(); ?>