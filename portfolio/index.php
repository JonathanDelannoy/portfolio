<?php
require_once 'partial/header.php';
?>
<section id="game" class="container-fluid row p-0 m-0">
    <?php
    require_once 'skills.php';
    require_once 'formation.php';
    require_once 'experience.php';
    require_once 'hobbies.php';
    require_once 'contact.php';
    ?>
    <div class="first-plan col-12 d-flex">
        <div id="left-part" class="col-lg-4 col-12 text-center pl-5">
            <a id="skills" class="d-flex justify-content-around rounded-left rounded-right">
                <span class="text-light hidden w-100 m-auto skills-span">Mes Compétences</span>
                <img class="text-right" src="img/skills.png" alt="">
            </a>
            <a id="formation" class="d-flex justify-content-around rounded-left rounded-right">
                <span class="text-light hidden w-100 m-auto formation-span">Mes Formations</span>
                <img class="text-right" src="img/formation.png" alt="">
            </a>
            <a id="experience" class="d-flex justify-content-around rounded-left rounded-right">
                <span class="text-light hidden w-100 m-auto experience-span">Mes Expériences</span>
                <img class="text-right" src="img/experience.png" alt="">
            </a>
            <a id="hobbies" class="d-flex justify-content-around rounded-left rounded-right">
                <span class="text-light hidden w-100 m-auto hobbies-span">Mes Hobbies</span>
                <img class="text-right" src="img/hobbies.png" alt="">
            </a>
            <a id="contact" class="d-flex justify-content-around rounded-left rounded-right">
                <span class="text-light hidden w-100 m-auto contact-span">Contact</span>
                <img class="text-right" src="img/contact.png" alt="">
            </a>
        </div>
        <div class="col-lg-4 col-0"></div>
        <div id="right-part" class="col-lg-4 col-12 text-center">
            <div id="propos" class="transbox text-center mx-sm-5">
                <h1 class="text-light py-4"><img class="mr-4" src="img/shield.png" alt="">Delannoy Jonathan</h1>
                <p class="text-light py-4">Développeur WEB</p>
                <p class="text-light pb-4">Célibataire</p>
                <p class="text-light pb-4">11 rue Lionel Terray - 62800 Liévin</p>
                <p class="text-light pb-4">03.21.44.31.10</p>
                <p class="text-light pb-4">delannoy.jonathan94@laposte.net</p>
                <p class="text-light">Permis B (Véhiculé)</p>
            </div>
        </div>
    </div>
</section>
<footer class="container-fluid bg-dark">
    <div class="row">
        <div class="col-12 d-flex justify-content-end">
            <a href="formulaire.php" class="btn btn-dark">Me contacter</a>
        </div>
    </div>
</footer>
<?php
require_once 'partial/footer.php';
?>