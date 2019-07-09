<style type="text/css">
  

    body {
        background: #000014;
        color: white;
        width: 97%;
        margin: 0 auto;
    }

    
    footer, .mainMenu {
        /* bottom:0; */
        margin: 10px;
        box-shadow: 0 0 3px 5px;

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

    .container{
        height: 100%;
    }
    /* burger nav */
    label.menuTitle {
        text-align: left;
        font-size: 30px;
        height: 50px;
        width: 40px;
        margin: 2% 10%;
        display: block;
        font-weight: bold;
        cursor: pointer;
        background: url(./../image/menu.png) no-repeat 100% 50%;
        background-size: 44px 39px;
        float: left;
    }

    .mainMenu {
        display: block;
        position: relative;
        /* les éléments vont bougé -> relative permet de les faires bouger // *si pas de position relative .content va se mettre au dessus de la nav */
        width: 100%;  
        margin: 0px;
        padding: 0;
        text-align: center;
       
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
        padding: 15px;
        width: 100%;
        font-size: 15px;
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

    .left {
        display: flex;
    }

    .card {
        background: linear-gradient(to left, rgb(204, 166, 164), rgb(199, 102, 102));
        background: ;
        /* background: #000014; */
        border-radius: 3px solid #000014;
        width: 500px;
        margin: 5px;
        /* opacity: 0.6; */
    }

    .card p {
        text-align: center;
        font-size: 15px;
        padding: 5px;
        /* text-transform : uppercase; */
    }

    .list-group li {
        background: linear-gradient(to top, rgb(204, 166, 164), blue);
        width: 100%;
    }

    .ic {
        font-size: 25px;
        padding: 10px
    }



    /* V mobile */
    @media screen and (min-width:1070px) {
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
            font-size: 12px;
        }

    } 
</style>