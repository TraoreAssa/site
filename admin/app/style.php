<style type="text/css">
    html{
        height: 100%;
        background: linear-gradient(to top, rgb(204, 166, 164), rgb(199, 102, 102));
        color: white;
    }
    body {
        background: linear-gradient(to top, rgb(204, 166, 164), rgb(199, 102, 102));
        color: white;
    }

   

    /* NAV */
    .menu {
        /* width: 100%; */
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
        border: 2px solid blue;

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
        background: url(./../image/menu.png) no-repeat 100% 40%;
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
   
    a {
        color: inherit;
        text-decoration: none;
    }

    a:hover {
        color: pink;
        text-decoration: none;
    }

    i {
        color: white;
    }

    i:hover {
        color: pink;
    }

    .left{
        display: flex;
    }

    .card {
       background:  linear-gradient(to top, rgb(204, 166, 164),blue);
        background: ;
        /* background: #000014; */
        border: 3px solid #000014;
        width: 500px;
        margin: 5px;
        /* opacity: 0.6; */
    }

    .card p{
        text-align: center;
        font-size: 15px;
        padding: 5px;
        /* text-transform : uppercase; */
    }

    .list-group li{
       background:  linear-gradient(to top, rgb(204, 166, 164),blue);
       font-size: 20px;
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

        /* table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
            position: relative;
            border: 0;
            color: #333;
        } */

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