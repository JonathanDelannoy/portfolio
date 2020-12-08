$(document).ready(function () {
    $("#skills").mouseenter(function () {
        $('.skills-span').removeClass('hidden');
    }).mouseleave(function () {
        $('.skills-span').addClass('hidden');
    });
    $("#formation").mouseenter(function () {
        $('.formation-span').removeClass('hidden');
    }).mouseleave(function () {
        $('.formation-span').addClass('hidden');
    });
    $("#experience").mouseenter(function () {
        $('.experience-span').removeClass('hidden');
    }).mouseleave(function () {
        $('.experience-span').addClass('hidden');
    });
    $("#hobbies").mouseenter(function () {
        $('.hobbies-span').removeClass('hidden');
    }).mouseleave(function () {
        $('.hobbies-span').addClass('hidden');
    });
    $("#contact").mouseenter(function () {
        $('.contact-span').removeClass('hidden');
    }).mouseleave(function () {
        $('.contact-span').addClass('hidden');
    });

    $('#skills').on('click', function () {
        $('#skills').toggleClass('clicked');
        $('#skills-div').toggleClass('show');
    });
    $('.block').on('click', function () {
        $('#skills').removeClass('clicked');
        $('#skills-div').removeClass('show');
    });
    $('#formation').on('click', function () {
        $('#formation').toggleClass('clicked');
        $('#formation-div').toggleClass('show');
    });
    $('.block').on('click', function () {
        $('#formation').removeClass('clicked');
        $('#formation-div').removeClass('show');
    });
    $('#experience').on('click', function () {
        $('#experience').toggleClass('clicked');
        $('#experience-div').toggleClass('show');
    });
    $('.block').on('click', function () {
        $('#experience').removeClass('clicked');
        $('#experience-div').removeClass('show');
    });
    $('#hobbies').on('click', function () {
        $('#hobbies').toggleClass('clicked');
        $('#hobbies-div').toggleClass('show');
    });
    $('.block').on('click', function () {
        $('#hobbies').removeClass('clicked');
        $('#hobbies-div').removeClass('show');
    });
    $('#contact').on('click', function () {
        $('#contact').toggleClass('clicked');
        $('#contact-div').toggleClass('show');
    });
    $('.block').on('click', function () {
        $('#contact').removeClass('clicked');
        $('#contact-div').removeClass('show');
    });

    
});
function validate() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
    var text;
    if (name.length < 3) {
        text = '<span>Veuillez entrer un nom valide</span>';
        error_message.innerHTML = text;
        return false;
    }
    if (email.indexOf("@") == -1 || email.length < 6) {
        text = '<span>Veuillez entrer un Email valide</span>';
        error_message.innerHTML = text;
        return false;
    }
    if (message.length <= 10) {
        text = '<span>La taille de votre message ne doit pas être inférieur à 15 caractères</span>';
        error_message.innerHTML = text;
        return false;
    }
    alert("Votre message a été envoyé avec succès !");
    return true;
}