<!--
@Project: Learnify
@Programmer: S

-->

<!doctype html>
<html lang="en">

<head>
    <!-- Balises méta requises -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, rétrécir-pour-adapter-non">
    <link rel="icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/png">
    <title>Learnify - Apprendre Partout & À Tout Moment !</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/popup/magnific-popup.css">
    <!-- CSS principal -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/popper.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Début de la barre de navigation -->
    <header class="header_area" style="background-color: white !important;">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Marque et bascule regroupées pour une meilleure affichage mobile -->
                    <a class="navbar-brand logo_h" href="<?= base_url('welcome') ?>"><img src="<?= base_url('assets/') ?>img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Basculer la navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collecte des liens de navigation, des formulaires et autres contenus pour basculement -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="javascript:void(0)">Salut, <?php
                                                                                                        $data['user'] = $this->db->get_where('siswa', ['email' =>
                                                                                                        $this.session->userdata('email')])->row_array();
                                                                                                        echo $data['user']['nom'];
                                                                                                        ?></a>
                            </li>
                            <li class="nav-item active"><a class="nav-link" href="<?= base_url('user') ?>">Accueil</a>
                            </li>
                            <li class="nav-item "><a class="nav-link text-danger" href="<?= base_url('welcome/logout') ?>">Se Déconnecter</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Fin de la barre de navigation -->

    
