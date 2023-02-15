<?php wp_footer(); ?>
<footer class="c-footer">
    <div class="c-footer__top">
        <div class="c__container">
            <div class="l-flex l-flex--center l-flex--negative l-flex--wrap">

                <article class="l__col-4">
                    <a href="/" class="c-footer__logo">
                        <img src="<?= getThemeImage('logo.png') ?>">
                    </a>

                    <p>
                        A Enertec desenvolve projetos de Energia
                        Solar Fotovoltaica, a solução para o seu
                        bolso e para o nosso planeta!
                    </p>
                </article>

                <article class="l__col-4 c__center">
                    <h2 class="c-title">
                        Menu
                    </h2>

                    <? include('menu.php'); ?>
                </article>

                <article class="l__col-4">
                    <h2 class="c-title">
                        Onde nos encontrar
                    </h2>

                    <nav class="c-nav">

                        <a href="https://api.whatsapp.com/send?phone=55119394012" target="_blank" class="c-nav__link">
                            <img src="<?= getThemeImage('icon-white-whatsapp.png') ?>">
                            (11) 9. 3940-1207
                        </a>

                        <a href="mailto:orcamento@enertecrenovaveis.com.br" target="_blank" class="c-nav__link">
                            <img src="<?= getThemeImage('icon-white-email.png') ?>">
                            orcamento@enertecrenovaveis.com.br
                        </a>

                        <a href="https://www.instagram.com/enertecrenovaveis/" target="_blank" class="c-nav__link">
                            <img src="<?= getThemeImage('icon-white-instagram.png') ?>">
                            @enertecrenovaveis
                        </a>

                        <a href="https://www.facebook.com/profile.php?id=100087409990967&mibextid=ZbWKwL"
                            target="_blank" class="c-nav__link">
                            <img src="<?= getThemeImage('icon-white-facebook.png') ?>">
                            facebook
                        </a>
                    </nav>
                </article>
            </div>
        </div>
    </div>
    <div class="c-footer__bottom">
        <div class="c__container">
            <div class="l-flex l-flex--center c__mobile-full">
                <div class="l-flex__left">
                    Copyright ©
                    <?= date("Y") ?> Enertec - Todos os direitos reservados
                </div>

                <div class="l-flex__right">
                    <div class="c-signature">
                        <a href="https://api.whatsapp.com/send?phone=5564999653668" target="__blank">Desenvolvido por
                            Elizeu
                            Oliveira</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>