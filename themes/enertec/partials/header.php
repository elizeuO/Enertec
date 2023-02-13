<!DOCTYPE html>
<html>

<head>
    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--    Favicon-->
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?= get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?= get_template_directory_uri(); ?>/assets/simages/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri(); ?>/assets/images/site.webmanifest">
    <link rel="mask-icon" href="<?= get_template_directory_uri(); ?>/assets/images/safari-pinned-tab.svg"
        color="#5bbad5">

    <title>
        Enertec | Empresa Brasileira de Projeto, Instalação e Homologação de Sistemas Fotovoltaicos
    </title>
</head>

<?php wp_head(); ?>

<body>
    <header class="c-header">

        <div class="c-header__top">
            <div class="c__container">
                <div class="l-flex l-flex--center">

                    <nav class="c-nav l-flex__left">

                        <a href="https://api.whatsapp.com/send?phone=55119394012" target="_blank" class="c-nav__link">
                            <img src="<?= getThemeImage('icon-white-whatsapp.png') ?>">
                            (11) 9. 3940-1207
                        </a>

                        <a href="mailto:orcamento@enertecrenovaveis.com.br" target="_blank" class="c-nav__link">
                            <img src="<?= getThemeImage('icon-white-email.png') ?>">
                            orcamento@enertecrenovaveis.com.br
                        </a>
                    </nav>

                    <nav class="c-nav l-flex__right">

                        <a href="https://www.instagram.com/enertecrenovaveis/" target="_blank" class="c-nav__link">
                            <img src="<?= getThemeImage('icon-white-instagram.png') ?>">
                        </a>

                        <a href="https://www.facebook.com/profile.php?id=100087409990967&mibextid=ZbWKwL"
                            target="_blank" class="c-nav__link">
                            <img src="<?= getThemeImage('icon-white-facebook.png') ?>">
                        </a>
                    </nav>

                </div>
            </div>

        </div>

        <div class="c-header__bottom">
            <div class="c__container">
                <div class="l-flex l-flex--center">

                    <a href="/" class="c-header__logo l-flex__left">
                        <img src="<?= getThemeImage('logo.png') ?>">
                    </a>

                    <? include('menu.php'); ?>

                    <a href="#orcamento" class="c__button l-flex__right">
                        Faça um orçamento
                    </a>

                </div>
            </div>
        </div>
    </header>