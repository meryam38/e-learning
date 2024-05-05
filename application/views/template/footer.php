<!--
@Projet: Learnify
@Programmeur: 
@Email : syaokay@gmail.com

@À propos de Learnify :
Web éducatif Open Source créé par 
Learnify est un site web éducatif qui comprend des vidéos, des matières et un système d'examen
qui sont disponibles gratuitement. Learnify a été créé pour permettre aux étudiants et
aux enseignants de continuer à apprendre et à enseigner n'importe où et n'importe quand.
-->


<!--================ Début de la zone de pied de page  =================-->
<footer class="zone_pied_de_page p_60">
    <div class="conteneur">
        <div class="ligne">
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="widget_pied_de_page_unique tp_widgets">
                    <h6 class="titre_pied_de_page">À propos de nous</h6>
                    <ul class="liste">
                        <li><a href="<?= base_url('welcome/tentang') ?>">À propos de Learnify</a></li>
                        <li><a href="<?= base_url('welcome/materi') ?>">Matières Learnify</a></li>
                        <li><a href="<?= base_url('welcome/kontak') ?>">Contact Learnify</a></li>
                        <li><a href="https://www.enset-media.ac.ma/">Site Web officiel de l'école</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="widget_pied_de_page_unique tp_widgets">
                    <h6 class="titre_pied_de_page">Se connecter - S'inscrire</h6>
                    <ul class="liste">
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Pour les étudiants</a></li>
                        <li><a href="<?= base_url('welcome/guru') ?>">Pour les enseignants</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="widget_pied_de_page_unique tp_widgets">
                    <h6 class="titre_pied_de_page">Cours - Matières</h6>
                    <ul class="liste">
                        <li><a href="javaScript:void(0);">ingenierie de formation</a></li>
                        <li><a href="javaScript:void(0);">technologies de web</a></li>
                        <li><a href="javaScript:void(0);">reseaux</a></li>
                        <li><a href="javaScript:void(0);">evaluation des diapositifs de formation</a></li>
                        <li><a href="javaScript:void(0);">gestion de projet</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="widget_pied_de_page_unique tp_widgets">
                    <h6 class="titre_pied_de_page">À propos des  développeurs</h6>
                    <ul class="liste">
                        <li>Etudiants du master digitalisation des processus educatifs et ingenierie de competences  en tant que développeurs Web et concepteurs Web. Compétents dans la conception et le développement de sites Web. Excellentes compétences en communication écrite et orale ; capable d'expliquer des problèmes logiciels complexes en termes faciles à comprendre.</li>
                    </ul>
                </div>
            </div>

         <div class="col-lg-4 col-md-6 col-sm-6">
    <h4 class="footer_title">À propos de Learnify</h4>
    <p>
        Learnify est un site Web éducatif open source créé par Hajar El Hjouji ; Diyaa Souiss ; Meryem EL Batoul Daaif ; Youssef Amzoug ;Mohammed Amine Lkhatoui . Learnify est un site Web éducatif équipé de vidéos, de matériel et d'un système d'examen disponibles gratuitement. Learnify a été créé dans le but de permettre aux élèves et aux enseignants de continuer à apprendre et à enseigner partout et à tout moment.
    </p>
</div>
</div>
<div class="row footer-bottom d-flex justify-content-between align-items-center">
    <p class="col-lg-8 col-md-8 footer-text m-0">
        <!-- Le lien vers Colorlib ne peut pas être retiré. Le modèle est sous licence CC BY 3.0. -->
        Droits d'auteur ©<script>
            document.write(new Date().getFullYear());
        </script> Tous droits réservés | Ce modèle a été créé avec <span class="text-danger"> ❤</span> par
        <a href="https://colorlib.com" target="_blank">Colorlib</a> <br> Learnify a été créé avec <span class="text-danger"> ❤</span> sous licence MIT
        <!-- Le lien vers Colorlib ne peut pas être retiré. Le modèle est sous licence CC BY 3.0. -->
    </p>
    <div class="col-lg-4 col-md-4 footer-social">
    
        <a href="https://www.github.com/syauqi"><i class="fa fa-github"></i></a>
      
    </div>
</div>
</div>
</footer>
<!--================ Fin de la zone de pied de page =================-->



<!-- Début de la fenêtre modale de connexion -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-dark font-weight-bold" style="color:#212529 !important;" id="exampleModalCenterTitle">
                    Learnify - Connectez-vous maintenant</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <br>
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="<?= base_url('assets/'); ?>img/modal-login-2.png" class="img-fluid img-responsive mx-auto " style="height: 350px;">
                        </div>
                        <div class=" col-md-6">
                            <form action="<?= base_url('welcome/validateLogin') ?>" method="post">
                                <div class="form-group">
                                    <label class="label-font" for="
                                        exampleFormControlInput1">
                                        Email</label>
                                    <input type="text" value="<?= set_value('email'); ?>" class="form-control" name="email" autocomplete="off" id="email" placeholder="Entrez votre email ici ..">
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label class="label-font" for="
                                        exampleFormControlInput1">
                                        Mot de passe</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe ici ..">
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Se souvenir de moi.
                                    </label>
                                </div>
                                <p class="terms">En vous connectant, vous acceptez
                                    <i>la confidentialité et les conditions légales
                                        de notre site </i> .
                                    Vous n'avez pas de compte ? Inscrivez-vous <a href=" <?= base_url('user/registration') ?>">
                                        ici.</a>
                                </p>
                                <button class="btn btn-block font-weight-bold" style="background-color: #4dbf1c;color:white;font-size:18px;">Connectez-vous
                                    maintenant!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin de la fenêtre modale de connexion -->


<!-- Données flash Sweetaler -->
<?php if ($this->session->flashdata('success-reg')) : ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Vous avez réussi à vous inscrire !',
            text: 'Maintenant, vous pouvez vous connecter !',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php endif; ?>


<?php if ($this->session->flashdata('login-success')) : ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Vous avez réussi à vous inscrire !',
            text: 'Maintenant, connectez-vous !',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php endif; ?>


<?php if ($this->session->flashdata('success-verify')) : ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Email a été vérifié !',
            text: 'Maintenant, connectez-vous !',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php endif; ?>


<?php if ($this->session->flashdata('success-logout')) : ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Vous avez réussi à vous déconnecter !',
            text: 'Au revoir, à bientôt !',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php endif; ?>


<?php if ($this->session->flashdata('fail-login')) : ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Échec de la connexion !',
            text: 'Veuillez vérifier votre email et votre mot de passe !',
            showConfirmButton: false,
            timer: 2500
        });
    </script>
<?php endif; ?>


<?php if ($this->session->flashdata('fail-email')) : ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Email non vérifié !',
            text: 'Veuillez vérifier votre email d\'abord !',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php endif; ?>


<?php if ($this->session->flashdata('fail-pass')) : ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Mot de passe incorrect !',
            text: 'Veuillez vérifier votre mot de passe !',
            showConfirmButton: false,
            timer: 2500
        });
    </script>
<?php endif; ?>


<?php if ($this->session->flashdata('not-login')) : ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Veuillez vous connecter d\'abord !',
            text: 'Veuillez vous connecter d\'abord !',
            showConfirmButton: false,
            timer: 2500
        });
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('false-login')) : ?>
    <script>
        $("#exampleModalCenter").modal("show")
    </script>
<?php endif; ?>

<script src="<?= base_url('assets/') ?>js/stellar.js"></script>
<script src="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/counter-up/jquery.counterup.js"></script>
<script src="<?= base_url('assets/') ?>js/mail-script.js"></script>
<script src="<?= base_url('assets/') ?>js/theme.js"></script>
<script>
    var animateButton = function(e) {
        e.preventDefault;
        e.target.classList.remove('animate');
        e.target.classList.add('animate');
        setTimeout(function() {
            e.target.classList.remove('animate');
        }, 700);
    };

    var bubblyButtons = document.getElementsByClassName("bubbly-button");

    for (var i = 0; i < bubblyButtons.length; i++) {
        bubblyButtons[i].addEventListener('click', animateButton, false);
    }
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>

</html>
