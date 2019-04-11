<style type="text/css">
    body {
        background: linear-gradient(to top, rgb(204, 166, 164), rgb(199, 102, 102));
        color: white;

    }
     /* NAV */
     .menu {
        width: 100%;
        margin: 0;
        padding: 0;
        list-style: none;
        max-height: 0px;
        overflow-y: hidden;
        text-align: center;
        
    }

    .menu li {
        border-top: 1px solid #ccc;
        width: 100%;
    }

    .menu li:hover {
      
        cursor: pointer;
        
    }

    .menu a {
        color: white;
        text-decoration: none;
        display: block;
        width: 94%;
        padding: 5px;
    }

    .menu a:hover {
        color: pink;
        font-size: 20px;
    }

    /* burger nav */
    label.menuTitle {
        text-align: left;
        font-size: 30px;
        height: 50px;
        width: 40px;
        margin-right: 1%;
        display: block;
        font-weight: bold;
        cursor: pointer;
        background: url(image/menu.png) no-repeat 100% 40%;
        background-size: 44px 39px;
        float: right;
    }

    .mainMenu {
        display: block;
        position: relative;
        /* les éléments vont bougé -> relative permet de les faires bouger // *si pas de position relative .content va se mettre au dessus de la nav */
        width: 100%;
        margin: 0;
        padding: 0;
        text-align: center;
        border-bottom: 1px solid #ccc;
        box-shadow: 0 0 3px 5px;
    }

    .hidden {
        display: none;
    }

    input[name="panel"]:checked~.menu {
        /*checked: lorsque l'élément est coché*/
        max-height: 800px;
        transition: 2s;
    }

    .clear {
        clear: both;
    }

    nav a:hover {
        background: #000014;
        transition: 2s;
        padding: 20px;
        width: 100%;
    }

    /* Fin de la NAV */

    .container 
    {
        overflow-y: hidden;
        border-radius: 10px;
        margin-top: 5px;
        margin-top: 50px;
        margin-bottom: 40px;
        width: 100%;
        height: 100%;
        background-color: #000014;
    }

    section
    {
        padding: 2px;
        margin: 10px;
    }

    /* Button a droite */
    .monter {
        position: fixed;
        background: transparent;
        right: 20px;
        cursor: pointer;
        font-size: 200%;
        color: slategray;
        border: none;
        bottom: 20px;
    }
    /* FIN  */


    h1 {
        color: white;
        margin-top: 20px;
        font-size: 43px;
    }

    h2 {
        color: white;
        /* color: rgb(199, 102, 102); */
        padding: 5px;
     
    }
    a {
        color: inherit;
        text-decoration: none;
    }

    a:hover {
        color: pink;
        text-decoration: none;
    }

    i {
        color: grey;
    }

    i:hover {
        color: blue;
    }

    /* bienvenue */
    .site:hover {
        color: white;
        font-size: 25px;
    }

    .card {
        background: transparent;
        border: 2px solid blue;
    }

    /* PROFIL */
    #profil .card {
        border-radius: 16px;
        width: 660px;
        height: 660px;
        background: blue;
        position: relative;
        overflow: hidden;
        box-shadow: 0 5px 50px rgba(0, 0, 0, 0.85);
        margin-top: 20px; 
    }

    #profil .card::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.92);
    }

    #profil .card .img {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        top: 230px;

    }

    #profil .card .img span {
        /* width: 100%; */
        height: 100%;
        color: white;
        font-size: 90px;
        transition: 0.5s;
        bottom: 950px;
        padding: 0px;
        /* : 20px; */
    }

    #profil .card .img span:nth-child(1) {
        transition-delay: 0s;
        background-position: 0;
        
    }

    #profil .card .img span:nth-child(2) {
        transition-delay: 0.1s;
        background-position: 33.33%;
    }

    #profil .card .img span:nth-child(3) {
        transition-delay: 0.2s;
        background-position: 66.66%;
    }

    #profil .card .img span:nth-child(4) {
        transition-delay: 0.3s;
        background-position: 100%;
    }

    #profil .card:hover .img>span {
        transform: translateY(-100%);
    }

    .content {
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        padding: 20px 20px;
        width: 100%;
        height: 100%;
        transform: translateY(100%);
    }

    #profil .card:hover .content {
        transform: translateY(0%);
        transition: 1s;
        transition-delay: 0.1s;
    }

    span{
        padding: 0px;
    }

    /* FIN DU PROFIL */


    /* Effet survol avec transition et filtres COMPETENCES */
    .comp li {
        list-style: none;
        width: 241px;
        height: 250px;
        margin: 15px;
    }

    .comp img {
        position: absolute;
        z-index: 1;
        height: 250px;
        transition: .5s cubic-bezier(0, 3, .4, 1);
    }

    .comp li:hover img {
        z-index: 2;
        transform: scale(1.5);
        cursor: pointer;
    }

    .comp:hover li:not(:hover) img {
        /*je mets ai survol de la classe comp je met les image en gris et en flou */
        filter: grayscale(1) blur(8px);
        
    }

    /* Fin des compétences */

    iframe 
    {
        box-shadow: 5px 5px 20px 3px pink;
    }


    /* V mobile */
    @media screen and (min-width:970px) {
        label.menuTitle {
            display: none;
        }

        .menu,
        .menu li {
            padding: 2%;
            box-sizing: border-box;
            /*permet de bloquer un block à une certaine taille en padding décale avec border-box c'est bloqué et le padding se fait à l'intérieur*/
        }

        .menu li,
        .menu a {
            display: inline;
            border: none;
        }

        .section {
            width: 100%;
            justify: center;
        }

        /* Responsive */


            body>p {
                font-size: 20px;
                text-align: justify;
            }

            body>p:after {
                opacity: .8
            }

            header {
                display: inline-block;
                width: 100%;
            }

            #infos {
                width: calc(100% - 42px);
            }

            section:first-of-type div select,
            section:first-of-type div input {
                display: block;
                width: calc(100% - 40px);
                margin: 20px;
            }

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
                position: relative;
                border: 0;
                color: #333;
            }

            section:nth-of-type(2) tr:first-of-type td {
                display: none;
            }

            section:nth-of-type(2) tr:nth-of-type(odd) td:nth-of-type(1) {
                border-top: 5px solid #444;
                border-radius: 5px 5px 0 0;
                text-align: center;
            }

            section:nth-of-type(2) tr:nth-of-type(even) td:nth-of-type(1) {
                border-top: 5px solid #aaa;
                border-radius: 5px 5px 0 0;
                text-align: center;
            }

            section:nth-of-type(2) tr:not(:first-of-type) {
                border: 1px solid #eee;
                margin-top: 50px;
                border-radius: 5px;
            }

            section:nth-of-type(2) tr:not(:first-of-type) td:nth-of-type(1)::before {
                content: "Code de produit:";
                font-weight: bolder;
                display: block;
                width: calc(100% - 20px);
                height: 50%;
                left: 0;
                top: 0;
                padding: 10px;
                margin-bottom: 10px;
                color: #444;
            }

            section:nth-of-type(2) tr:nth-of-type(even) td:nth-of-type(1)::before {
                content: "Code de produit:";
                font-weight: bolder;
                display: block;
                width: calc(100% - 20px);
                height: 50%;
                left: 0;
                top: 0;
                padding: 10px;
                margin-bottom: 10px;
                color: #999;
            }

            section:nth-of-type(2) tr:not(:first-of-type) td:nth-of-type(2)::before {
                content: "Libelle:";
                font-weight: bolder;
                padding: 10px;
            }

            section:nth-of-type(2) tr:not(:first-of-type) td:nth-of-type(3)::before {
                content: "Prix:";
                font-weight: bolder;
                padding: 10px;
            }

            section:nth-of-type(2) tr:not(:first-of-type) td:nth-of-type(4)::before {
                content: "Quantite:";
                font-weight: bolder;
                padding: 10px;
            }

            section:nth-of-type(2) tr:not(:first-of-type) td:nth-of-type(5)::before {
                content: "Montant:";
                font-weight: bolder;
                padding: 10px;
            }

            section:nth-of-type(3) table {
                margin: 50px 0;
                width: 100%;
                background: #eee;
                border-radius: 5px;
            }

            section:nth-of-type(3) table tr:last-of-type td {
                background: #eee;
                border-radius: 0 0 5px 5px;
            }


        }
</style>