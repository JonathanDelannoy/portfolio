<?php
require_once 'partial/header.php';
?>
<div class="background_contact">
    <section class="container bg-light">
        <div class="row forms">
            <h2 class="col-12 text-center my-5">Contactez-moi ! :)</h2>
            <form action="" id="myform" onsubmit="return validate();" class="col-12">
                <div class="col-12 my-5">
                    <input class="form-control" type="text" placeholder="Nom" id="name">
                </div>
                <div class="col-12 my-5">
                    <input class="form-control" type="text" placeholder="Email" id="email">
                </div>
                <div class="col-12 my-5">
                    <textarea class="form-control" placeholder="Message" id="message"></textarea>
                </div>
                <div class="col-12 my-5">
                    <input class="form-control btn btn-dark" type="submit">
                </div>
            </form>
            <div class="col-12 text-center text-danger" id="error_message"></div>
        </div>
        <a href="index.php" type="submit" class="btn btn-dark m-2">Retourner à l'accueil</a>
    </section>
</div>
<?php
require_once 'partial/footer.php';
?>