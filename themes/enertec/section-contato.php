<section class="c-section c-section--gray c-section--bg-balls-white" id="contato">
    <div class="c__container">
        <div class="l-flex l-flex--center l-flex--negative l-flex--wrap">

            <article class="l__col-6">
                <h2 class="c-title c-title--decoration">
                    Contato
                </h2>

                <p>
                    Nossa equipe está de prontidão para sanar todas as suas
                    dúvidas e propocionar
                    a melhor experiência de atentimento!
                </p>

                <a href="https://api.whatsapp.com/send?phone=5511939401207" target="_blank" class="c__button-green">

                    <img src="<?= getThemeImage('/icon-white-whatsapp.png') ?>">
                    Fale com a gente
                </a>

                <nav class="c-nav c-contact">

                    <a href="https://api.whatsapp.com/send?phone=5511939401207" target="_blank" class="c-nav__link">
                        <img src="<?= getThemeImage('icon-whatsapp.png') ?>">
                        (11) 9. 3940-1207
                    </a>

                    <a href="https://www.instagram.com/enertecrenovaveis/" target="_blank" class="c-nav__link">
                        <img src="<?= getThemeImage('icon-instagram.png') ?>">
                        @enertecrenovaveis
                    </a>

                    <a href="https://www.facebook.com/profile.php?id=100087409990967&mibextid=ZbWKwL" target="_blank"
                        class="c-nav__link">
                        <img src="<?= getThemeImage('icon-facebook.png') ?>">
                        facebook
                    </a>
                </nav>
            </article>

            <article class="l__col-6">
                <?= do_shortcode('[contact-form-7 id="50" title="Contato"]') ?>
            </article>
        </div>
    </div>
</section>