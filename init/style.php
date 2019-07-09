<style type="text/css">
    /* Reset */
    * {
        box-sizing: border-box;
        /*ça bloque l'élement, le recentre et ça fait une marge*/
    }

    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    body {
        color: white;
        text-align: center;
    }

    section {
        height: 100vh;
    }

    /* Bas et haut correspondent a mes petit menu pour revoyer sur la page suivante au precedente */
    .haut,
    .bas {
        font-size: 50px;
        display: block;
        color: white;
        font-style: italic;
    }

    .bas {
        position: absolute;
        bottom: 0;
        margin: 0 auto;
        width: 100%;
    }

    .bas i,
    .haut i {
        font-size: 15px;
        margin: 0px;
    }

    main {
        width: 90%;
        margin: 0 auto;
        padding: 0px 15px;
    }

    a,
    a:hover {
        text-decoration: none;
        color: inherit;
    }

    h1 {
        color: #000014;
        font-size: 80px;
        font-style: italic;
    }

    h2 {
        font-size: 60px;
        margin: 20px;
    }

    i {
        color: white;
        margin: 2px;
    }

    /* Nav */
    nav {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 70px;
        font-size: 150%;
        padding-top:15px; 
    }

    nav li {
        display: inline-block;
        padding: 10px 10px;
    }

    nav li a {
        text-transform: uppercase;
    }

    /* SECTIONS */
    #profil,
    #competences,
    #contact{
        position: relative;
        background: linear-gradient(to top, rgb(204, 166, 164), rgb(199, 102, 102));
    }

    #experiences,
    #formations,
    footer {
        position: relative;
        background: #000014;
    }

    /* Cardre avec border */
    .card {
        background: transparent;
        border: 5px solid pink;
        /* padding: 5px; */
        font-size: 18px; 
        width: 16rem;
        height: 16rem;
    }

    /* Section PROFIL */
    #profil .card {
        /* cadre */
        font-size: 15px;
        border-radius: 16px;
        position: relative;
        overflow: hidden;
        /*cacher le contenu*/
        box-shadow: 0 5px 50px rgba(0, 0, 0, 0.85);
        border: 2px solid white;
        margin: auto;
        top: 50px;
        /* padding-bottom: 5px; */
        margin-bottom: 60px;
        width: 30rem; 
        height:30rem;

    }

    #profil .card::before {
        content: "";
        position: absolute;
        width: 50%;
        height: 100%;
        background-color: #000014;
        background-size: contain;
        top: 0px;
        left: 0px;
    }

    #profil .card .about {
    /* interieur de ma card (About) */
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        top: 180px;
    }

    #profil .card .about span {
        height: 100%;
        color: white;
        font-size: 75px;
        transition: 0.5s;
    }

    #profil .card .about span:nth-child(1) {
        transition-delay: 0s;
        background-position: 0;
    }

    #profil .card .about span:nth-child(2) {
        transition-delay: 0.1s;
        background-position: 33.33%;
    }

    #profil .card .about span:nth-child(3) {
        transition-delay: 0.2s;
        background-position: 66.66%;
    }

    #profil .card .about span:nth-child(4) {
        transition-delay: 0.3s;
        background-position: 100%;
    }

    #profil .card:hover .about>span {
        transform: translateY(-100%);
    }

    .content {
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        transform: translateY(95%);
        width: 90%;
        margin: 0 auto;
    }

    #profil .card:hover .content {
        transform: translateY(0%);
        transition: 1s;
        transition-delay: 0.1s;
    }

    /* Button télécharger CV */
    .button {
        color: #000014;
        background: white;
        border: none;
        font-size: 14px;
    }
    /* FIN DU PROFIL */

    /* Section COMPETENCES */
    .comp li {
        list-style: none;
        height: 350px;
        margin: 50px 0px auto;
    }

    .comp img {
        z-index: 1;
        height: 300px;
        transition: .5s cubic-bezier(0, 3, .4, 1);
    }

    .comp li:hover img {
        z-index: 2;/*mettre l'image au dessus des autres*/
        transform: scale(1.8);/* effet zome */
        cursor: pointer;
    }

    .comp .card{
        border: none;
        height: 80%;
        margin: 0px 100px;
    }

    .comp:hover li:not(:hover) img {
        /*je mets ai survol de la classe comp je met les image en gris et en flou */
        filter: grayscale(1) blur(8px);
    }
    /* Fin des compétences */

    /* Section Formations */
    #formations .card {
        width: 18rem;
        height:18rem;
    }
    /* Fin des Formations */

    /* Section Commentaires */
    #commentaires .blockquote {
        width: 80%;
    }
    /* Fin des commentaires */

    /* Section CONTACT */
    iframe {
        box-shadow: 2px 2px 3px 1px pink;
        width: 80%;
        height: 300px;
        border: 0;
    }
    /* Fin de contact */

    /* Section AVIS */
    #commentaires .card {
        font-size: 20px; 
        width: 40rem;
        height: 100%;
    }
    /* fin  AVIS */

    /* Footer */
    footer span {
        color: white;
        font-size: 14px;
    }

    /*********************** RESPONSIVE ********************/
     @media only screen and (max-width: 1350px) {

        section{
            height: 90%;
        }
        main{
            bottom: 20px;
        }
        /*H2*/
        .display-4{
            font-size: 3rem;   
        }

        /* Mon poste */
        .titre {
            font-size: 60px;
            padding: 0;
            margin: 0;          
        }

        .comp img { 
            height: 200px;
        }
        .comp li {
            width: 90%;
            height: 250px;
            display: inline;
            padding: 0px;
        }
        .comp ul {
            width: 90%;
            padding: 0px;
        }

        #profil .card {
            margin-bottom: 70px;
            top:20px;
            bottom: 10px;
            /* height: 40%; */
            width: 90%;
        }
        #profil h2{
            font-size: 30px;
        }
        
        nav li {
            padding: 25px 4px;
        }

        nav li a {
            font-size: 15px;
        }

        .bas,
        .haut {
            font-size: 40px;
        }

        .card {
            padding: 2px
        }
    } 
</style>