$(document).ready(function () {

//***************** Page index *****************
    // Effet scroll pour la navigation
    $('.js-scrollTo').on('click', function () { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate({
            scrollTop: $(page).offset().top
        }, speed); // Go
        return false;
    });

// ***************** Page commentaires *****************
    $("#ajouter").click(function (event) {
        // insert est le button pour ajouter un commentaire
        event.preventDefault();
        window.location = "ajax/formulaire.php";
    });

    $("#annuler").click(function (event) {
        // insert est le boutton pour Annuler un commentaire
        event.preventDefault();
        window.location = "index.php";
    });

    $("#insert").click(function (event) {
        // insert est le boutton pour valider le commentaire
        event.preventDefault();
        ajax();
    });

    //Joint COM.php (Insertion dans la BDD) et les champs du form
    function ajax() {
        var pseudo = $("#pseudo").val();
        var email = $("#email").val();
        var commentaire = $("#commentaire").val();
        var date = $("#date").val();

        // console.log(pseudo + " " + email + '  ' +  commentaire + '  ' +  date);
        // console.log(commentaire + '  ' );

        var parameters = "commentaire=" + commentaire + "&date=" + date + "&pseudo=" + pseudo + "&email=" + email;

        console.log(parameters);

        $.post("com.php", parameters, function (data) {
            $("#resultat").html(data.resultat);
        }, 'json');

    }
});

// ***************** Pages COMPETENCES *****************
// H2 = Au survole de ma souris mon h2 change
var monH2 = document.getElementById("competence");
monH2.addEventListener("mouseover", changerTxt);
function changerTxt() {
    monH2.innerHTML = "Mes Réalisations ";
}
//Lorsque la souris n'est plus dessus il revient comme au depart
monH2.addEventListener("mouseout", function () {
    monH2.innerHTML = "Mes Compétences";
});

//IMAGES
//----------- HTML ----------------
var button = document.querySelector('#HTML');

button.addEventListener('click', carrousel);

function carrousel() {
    var monImage = document.querySelector("#HTML");
    var monImageSource = monImage.getAttribute("src");

    switch (monImageSource) {
        case "image/html-css.jpg":
            monImage.src = "image/Forum.png";
            break;
        case "image/Forum.png":
            monImage.src = "image/pomme.png";
            break;
        case "image/pomme.png":
            monImage.src = "image/voeux.png";
            break;
        case "image/voeux.png":
            monImage.src = "image/maquettes.jpg";
            break;
        case "image/maquettes.jpg":
            monImage.src = "image/licorne.png";
            break;
        case "image/licorne.png":
            monImage.src = "image/graphisme-catalogue.jpg";
            break;
        case "image/graphisme-catalogue.jpg":
            monImage.src = "image/html-css.jpg";
            break;
    }
}

//----------- JS ----------------
var buttonjs = document.querySelector('#JS');

buttonjs.addEventListener('click', carrouseljs);

function carrouseljs() {
    var js = document.querySelector("#JS");
    var jsSource = js.getAttribute("src");

    switch (jsSource) {
        case "image/js.jpg":
            js.src = "image/facture.png";
            break;
        case "image/facture.png":
            js.src = "image/js.jpg";
            break;
    }
}

//----------- GIMP ----------------
var buttongimp = document.querySelector('#GIMP');
buttongimp.addEventListener('click', carrouselgimp);

function carrouselgimp() {
    var gimp = document.querySelector("#GIMP");
    var gimpSource = gimp.getAttribute("src");

    switch (gimpSource) {
        case "image/gimp.jpeg":
            gimp.src = "image/gondole.png";
            break;
        case "image/gondole.png":
            gimp.src = "image/peinture.png";
            break;
        case "image/peinture.png":
            gimp.src = "image/camionnette.png";
            break;
        case "image/camionnette.png":
            gimp.src = "image/gamins.png";
            break;
        case "image/gamins.png":
            gimp.src = "image/gimp.jpeg";
            break;
    }
}
// Fin de Mes Competences 

 // $('#formulaire').trigger("reset");
        //reboot le formulaire apres insertion (efface les donnée aprés insertion)

        // window.setTimeout("location=('../index.php');",5000);
