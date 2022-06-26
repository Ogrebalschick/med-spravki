<?php
/*
Template Name: home

*/
?>
<?php get_header() ?>
<main>

    <div class="main-inner">
        <section class="site_form-1" id="buy_spavka">
            <div class="container">
                <div class="site_form-1-inner">
                    <div class="site_form-1-left">
                        <div class="site1_title">
                            ОФОРМЛЕНИЕ ЛЮБЫХ СПРАВОК
                        </div>
                        <div class="site_text">
                            БЕЗ ПРОХОЖДЕНИЯ ВРАЧЕЙ <br>ГАРАНТИЯ 100%
                        </div>
                    </div>
                    <div class="site_form-1-right">
                        <div class="site_form form_img-1">
                            <div class="site_form-inner input_top">
                                <div class="site_form-title">
                                    Быстрый заказ справки
                                </div>
                                <div class="site_form-text">
                                    Оформите заявку на справку всего в пару кликов!
                                </div>
                                <div class="site_form-input ">
                                    <?php echo do_shortcode('[contact-form-7 id="147" title="Контактная форм"]') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="main_padding">
            <section class="med_table" id="med_table">
                <div class="container">
                    <div class="title">
                        Медицинские справки
                    </div>
                    <div class="med_table">
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
                    </div>
                    <div class="site_form-btn table-btn buy_spavka">
                        <a href="#buy_spavka">Заказать справку</a>
                    </div>
                </div>
            </section>

            <section class="why">
                <div class="container">
                    <div class="title">
                        Почему справку лучше купить у нас?
                    </div>
                    <div class="why_inner">
                        <div class="why-left">
                            <div class="why_answer">
                                <div class="why_answer-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/why-1.png" alt="">
                                </div>
                                <div class="why_answer-text">
                                    <p>Вы получаете справку в день обращения с доставкой лично в руки</p>
                                </div>
                            </div>
                            <div class="why_answer">
                                <div class="why_answer-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/why-2.png" alt="">
                                </div>
                                <div class="why_answer-text">
                                    <p> Самые низкие цены в Москве. Можем оформить справку задним числом</p>
                                </div>
                            </div>
                            <div class="why_answer">
                                <div class="why_answer-img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/why-3.png" alt="">
                                </div>
                                <div class="why_answer-text">
                                    <p> Мы - официальное медицинское учреждение. Подлинность справок - 100%</p>
                                </div>
                            </div>
                        </div>
                        <div class="why-right">
                            <div class="why_text">
                                <?php the_field('why_text'); ?>
                            </div>
                            <div class="why-btn">
                                <a href="#med_table">Смотреть справки</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pluses">
                <div class="container">
                    <p class="title">
                        Плюсы работы с нами
                    </p>
                    <div class="pluses-inner">
                        <div class="plus">
                            <div class="plus-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/documents.png" alt="">
                            </div>
                            <div class="plus-title">
                                Официально
                            </div>
                            <div class="plus-text">
                                Зарегистрируем вашу справку в реестре
                            </div>
                        </div>
                        <div class="plus">
                            <div class="plus-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/startup.png" alt="">
                            </div>
                            <div class="plus-title">
                                Быстро
                            </div>
                            <div class="plus-text">
                                Документы привезем в течение часа
                            </div>
                        </div>
                        <div class="plus">
                            <div class="plus-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/browser.png" alt="">
                            </div>
                            <div class="plus-title">
                                Удобно
                            </div>
                            <div class="plus-text">
                                200 врачей в одном месте
                            </div>
                        </div>
                        <div class="plus">
                            <div class="plus-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/reliability.png" alt="">
                            </div>
                            <div class="plus-title">
                                Надежно
                            </div>
                            <div class="plus-text">
                                более 14 653 справок уже выдано
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="spravki">
                <div class="container">
                    <p class="title">
                        Популярные справки на нашем сайте
                    </p>
                    <div class="spravki-inner">
                        <?php echo do_shortcode('[product_category category="40"]') ?>
                    </div>
                    <div class="site_btn">
                        <a href="#buy_spavka">Заказать справку</a>
                    </div>
                </div>
            </section>
            <section class="documents">
                <div class="container">
                    <div class="documents_inner">
                        <div class="documents-left">
                            <div class="documents_title">
                                Мы оформляем медицинские документы <span class="blue">в 9 округах Москвы</span>
                            </div>
                            <div class="documents-round">
                                <ol>
                                    <li>САО</li>
                                    <li>СВАО</li>
                                    <li>СЗАО</li>
                                    <li>ЗАО</li>
                                    <li>ВАО</li>
                                    <li>ЦАО</li>
                                    <li>ЮАО</li>
                                    <li>ЮВАО</li>
                                    <li>ЮЗАО</li>
                                </ol>
                            </div>
                        </div>
                        <div class="documents-right">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/document.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="staps">
                <div class="container">
                    <p class="title">
                        Сделайте всего 4 простых шага
                    </p>
                    <div class="pluses-inner">
                        <div class="stap">
                            <div class="stap-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/stap-1.png" alt="">
                            </div>
                            <div class="stap-title">
                                Выбираете нужную Вам справку
                            </div>
                        </div>
                        <div class="stap">
                            <div class="stap-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/stap-2.png" alt="">
                            </div>
                            <div class="stap-title">
                                Звоните или отправляете заявку
                            </div>
                        </div>
                        <div class="stap">
                            <div class="stap-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/stap-3.png" alt="">
                            </div>
                            <div class="stap-title">
                                Уточняем все детали
                            </div>
                        </div>
                        <div class="stap">
                            <div class="stap-img">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/stap-4.png" alt="">
                            </div>
                            <div class="stap-title">
                                Получаете справку лично в руки
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="site_form-2">
            <div class="container">
                <div class="site_form-2-inner">
                    <div class="site_text">
                        Сомниваетесь в выборе справки? <br>Нужна консультация?
                    </div>
                    <div class="form-right">
                        <div class="form-help">help</div>
                        <div class="site_form sf-2 form_img-2 input_bottom">
                            <div class="site_form-text">
                                Оставьте заявку, мы поможем выбрать нужную в вашей ситуации справку!
                            </div>
                            <div class="site_form-input ">
                                <?php echo do_shortcode('[contact-form-7 id="147" title="Контактная форм"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="main_padding">
            <section class="reviews">
                <div class="container">
                    <div class="title">
                        Отзывы наших клиентов
                    </div>
                    <div class="reviews_inner slideshow">
                        <?php
                        global $post;
                        $myposts = get_posts([
                            'numberposts' => -1,
                            'category_name' => 'review_slider'
                        ]);
                        if ($myposts) {
                            foreach ($myposts as $post) {
                                setup_postdata($post);
                        ?>
                                <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                                <div class="review_item">
                                    <div class="review_item-inner">
                                        <div class="review_item-left">
                                            <?php the_post_thumbnail() ?>
                                        </div>
                                        <div class="review_item-right">
                                            <div class="review_item-title">
                                                <?php the_title(); ?>
                                            </div>
                                            <div class="review_item-text">
                                                <?php the_content() ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        wp_reset_postdata(); // Сбрасываем $post
                        ?>
                    </div>
                    <div class="pagingInfo"><span id="slide_num"></span><span id="slide_all"></span></div>
                </div>
            </section>
            <section class="guarantee">
                <div class="container">
                    <div class="guarantee_inner">
                        <div class="guarantee_item-text">
                            <p>Мы <span class="blue">гарантируем 100%</span> подлинность документа</p>
                        </div>
                        <div class="guarantee_item">
                            Документ имеет учетный порядковый номер
                        </div>
                        <div class="guarantee_item">
                            Любая медицинская справка подлежит регистрации
                        </div>
                        <div class="guarantee_item">
                            За каждый выданный документ врачи отчитываются ежемесячно
                        </div>
                        <div class="guarantee_item">
                            Оформлением документа будет заниматься действующий врач из государственной и частной клиники
                        </div>
                        <div class="guarantee_item">
                            Мы предлагаем только официальные документы, которые не вызовут вопросов при проверке
                        </div>
                    </div>
                </div>
            </section>
            <section class="popular">
                <div class="container">
                    <div class="popular_title">
                        Популярные справки на нашем сайте
                    </div>
                    <div class="popular_text">
                        <?php the_field('popular_text'); ?>
                    </div>
                    <div class="popular_questions">
                        <ol>

                            <?php
                            global $post;
                            $myposts = get_posts([
                                'numberposts' => -1,
                                'category_name' => 'popular_questions'
                            ]);
                            if ($myposts) {
                                foreach ($myposts as $post) {
                                    setup_postdata($post);
                            ?>
                                    <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                                    <li><?php the_content() ?></li>
                            <?php
                                }
                            }
                            wp_reset_postdata(); // Сбрасываем $post
                            ?>
                        </ol>
                    </div>
                    <div class="popular_answers">
                        <ul>
                            <?php
                            global $post;
                            $myposts = get_posts([
                                'numberposts' => -1,
                                'category_name' => 'popular_answers'
                            ]);
                            if ($myposts) {
                                foreach ($myposts as $post) {
                                    setup_postdata($post);
                            ?>
                                    <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                                    <li><?php the_content() ?></li>
                            <?php
                                }
                            }
                            wp_reset_postdata(); // Сбрасываем $post
                            ?>

                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <section class="form_done">
            <p class="form_done-title">
                Ваша заявка принята!
            </p>
            <p class="form_done-text">
                Через несколько секунд вам перезвонит наш оператор
            </p>
            <img src="<?php bloginfo('template_url',); ?>/assets/img/form_done.png" alt="" alt="" class="form_done-img">
        </section>
    </div>
</main>

<?php get_footer(); ?>