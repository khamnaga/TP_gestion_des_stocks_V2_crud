<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TP - Gestion des Stocks</title>
    <script src="app.js"></script>
    <link rel="stylesheet" href="styles.css">
    <script>
        window.addEventListener("DOMContentLoaded", function() {
            const nodes = document.querySelectorAll(".clickable");
            const toggleNode = function() {
                this.nextElementSibling.classList.toggle("is-active");
            };
            nodes.forEach(function(n) {
                n.onclick = toggleNode;
            })
        });
    </script>
</head>
<body>
    <h1 class="title clickable">TP - Gestion du Stock II (CRUD)</h1>
    <div>
        <p>
            Bonne nouvelle :<br>
            La société bizOnline a validé votre prototype, le round 2 débute !<br>
            Développez un système assurant la persistance des données, avec une base mysql liée au client par un fichier PHP.<br>
            Les opérations CRUD se feront, au choix, en synchrone ou avec la méthode AJAX.<br>
            Vous rédigerez la <b>documentation</b> de vos fonctions.
        </p>
        <p>
            Vous travaillerez en équipe.<br>
            <b>La collaboration est la clé :</b><br>
            Réfléchissez ensemble<br>
            Partagez le temps de code !<br><br>
            Les équipes sont communiquées en fin de brief.<br>
            Chaque équipe présentera son code sur github.<br>
            (merci de me l'envoyer par mail en précisant votre équipe)<br><br>
            Date rendu : <b>jeudi 11/01/2018 - 14h00</b>.
        </p>
    </div>
    <hr>
    <h2 class="title clickable">Besoins client</h2>
    <div>
        <p>
            Une application client/serveur pour saisir, consulter et supprimer des produits...
        </p>
        <ul>
            <li>Ajouter un nouveau produit au stock.</li>
            <li>Visualiser le stock dans une liste.</li>
            <li>Supprimer un produit du stock.</li>
            <li>Modifier les caractéristiques d'un produit.</li>
        </ul>
    </div>
    <hr>
    <h2 class="title clickable">Proposition de schéma pour la base de données</h2>
    <div class="print-page-break">
        <p>
            Base gestion_stock_crud / table produits :<br><br>
            - <b>id</b> PK SMALLINT UNSIGNED AI<br>
            - <b>nom</b> VARCHAR NOT NULL<br>
            - <b>prix</b> DECIMAL NOT NULL<br>
            - <b>description</b> TEXT<br>
            [ option ] - <b>image</b> VARCHAR
        </p>
    </div>
    <hr>
    <h2 class="title clickable">Challenge UI/UX</h2>
    <div>
        <p>
            Donnez vous à fond pour proposer la meilleure interface possible.
        </p>
    </div>
    <hr>
    <h2 class="title" style="margin-bottom: 35px;">Composition des Agences Web !</h2>
    <table>
        <tr>
            <td>A</td>
            <td>Ayaba</td>
            <td>Mohammed</td>
            <td>Farida</td>
        </tr>
        <tr>
            <td>B</td>
            <td>Haroon</td>
            <td>Bernard</td>
            <td>Denis</td>
        </tr>
        <tr>
            <td>C</td>
            <td>Richard</td>
            <td>Laetitia</td>
            <td>Sabuj</td>
        </tr>
        <tr>
            <td>D</td>
            <td>Fégan</td>
            <td>Jimmy</td>
            <td>Elias</td>
        </tr>
        <tr>
            <td>F</td>
            <td>Nakkib</td>
            <td>Nathalie</td>
            <td>Quentin</td>
        </tr>
        <tr>
            <td>G</td>
            <td>Fatima</td>
            <td>Othman</td>
            <td>Adam</td>
        </tr>
        <tr>
            <td>H</td>
            <td>Kader</td>
            <td>Laurie</td>
            <td></td>
        </tr>
    </table>
</body>
</html>
