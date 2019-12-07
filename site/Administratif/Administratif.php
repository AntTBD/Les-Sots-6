<?php

include "../commun/header.php";

$crous = [
    "CROUS LILLE",
    "CROUS AMIENS - PICARDIE",
    "CROUS NORMANDIE",
    "CROUS RENNES",
    "CROUS NANTES",
    "CROUS ORLÉANS - TOURS",
    "CROUS VERSAILLES",
    "CROUS PARIS",
    "CROUS CRÉTEIL",
    "CROUS REIMS",
    "CROUS LORRAINE",
    "CROUS STRASBOURG",
    "CROUS BOURGOGNE FRANCHE-COMTÉ",
    "CROUS POITIERS",
    "CROUS LIMOGES",
    "CROUS CLERMONT-FERRAND",
    "CROUS LYON",
    "CROUS GRENOBLE",
    "CROUS BORDEAUX",
    "CROUS TOULOUSE",
    "CROUS MONTPELLIER",
    "CROUS AIX-MARSEILLE",
    "CROUS NICE",
    "CROUS CORSE",
    "CROUS LA RÉUNION",
    "CROUS ANTILLES-GUYANE"
];
?>
<body>
    <h1><b>Choisissez un crous :</b></h1>
    <select class="custom-select" name="lesCrous" id="lesCrous" onclick="viewInfos();" style="margin-top: 1em; margin-bottom: 1em;">
        <option value="" selected="selected">-- Sélectionnez votre CROUS--</option>
        <?php foreach( $crous as $value ){
            echo "<option value='".$value."'>".$value."</option>";
        } ?>
    </select>
    <center>
        <div class="card" id="cardCrous">
            <div class="card-header">
                <h5 class="card-title" id="nomCrousChoisi"></h5>
            </div>
            <div class="card-body">
                <p class="card-text"><b>Horaires:</b></p>
                <p class="card-text" id="infosCrousChoisi"></p>
                <a href="#" class="btn btn-primary" id="siteCrousChoisi">Plus d'information</a>
            </div>
        </div>
    </center>
    <script>
    $crous = [
        [
            "CROUS LILLE",
            "Accueil du public :<br>" +
                    "Du lundi au vendredi de 9h00 à 12h00 et de 13h00 à 17h00 (16h30 le vendredi)",
            "http://www.crous-lille.fr/"
        ],
        [
            "CROUS AMIENS - PICARDIE",
            "Ouvert du lundi au vendredi<br>" +
                    "de 9h à 12h30 et de 13h30 à 17h.",
            "https://www.crous-amiens.fr/"
        ],
        [
            "CROUS NORMANDIE",
            "Ouvert au public de lundi au vendredi<br>" +
                    "de 9h00 à 12h15 et de 13h15 à 16h00",
            "https://www.crous-normandie.fr/"
        ],
        [
            "CROUS RENNES", "Du lundi au vendredi de 8h30 à 16h<br>" +
                    "Fermeture fin décembre et du 1er au 16 août",
            "https://www.crous-rennes.fr/"
        ],
        [
            "CROUS NANTES",
            "",
            "http://www.crous-nantes.fr/"
        ],
        [
            "CROUS ORLÉANS - TOURS",
            "Du lundi au vendredi 9h – 12h et de 13h – 16h30",
            "https://www.crous-orleans-tours.fr/"
        ],
        [
            "CROUS VERSAILLES",
            "Mardi, jeudi de 8h30 à 13h<br>" +
                    "Mercredi de 8h30 à 16h",
            "https://www.crous-versailles.fr/"
        ],
        [
            "CROUS PARIS",
            "Dossier social étudiant, bourses, logement, CVEC: du lundi au vendredi, de 9h à 12h<br>" +
                    "Service international: du lundi au vendredi de 9h30 à 12h30 et de 13h30 à 17h<br>" +
                    "Service social: du lundi au vendredi de 9h à 12h30.",
            "http://www.crous-paris.fr/"
        ],
        [
            "CROUS CRÉTEIL",
            "Accueil du public :<br>" +
                    "–  lundi – fermé<br>" +
                    "– mardi – 9h00 à 13h00<br>" +
                    "– mercredi – 9h00 à 16h00<br>" +
                    "– jeudi – 9h00 à 13h00<br>" +
                    "– vendredi – fermé ",
            "https://www.crous-creteil.fr/"
        ],
        [
            "CROUS REIMS",
            "ouvert du lundi au vendredi<br>" +
                    "(08h30 – 12h et 13h – 17h)",
            "http://www.crous-reims.fr/"
        ],
        [
            "CROUS LORRAINE",
            "Du lundi au vendredi 8h30 – 12h00 / 13h00 – 17h00",
            "https://www.crous-lorraine.fr/"
        ],
        [
            "CROUS STRASBOURG",
            "Du lundi au vendredi, de 9h à 12h et de 13h à 16h.",
            "http://www.crous-strasbourg.fr/"
        ],
        [
            "CROUS BOURGOGNE FRANCHE-COMTÉ",
            "",
            "https://www.crous-bfc.fr/"
        ],
        [
            "CROUS POITIERS",
            "Du lundi au jeudi de 10h00 à 12h30 et de 13h30 à 16h30,<br>" +
                    "le vendredi de 10h00 à 12h30.",
            "https://www.crous-poitiers.fr/"
        ],
        [
            "CROUS LIMOGES", "Du lundi au vendredi de 8h30 à 12h et de 13h30 à 17h",
            "https://www.crous-limoges.fr/"
        ],
        [
            "CROUS CLERMONT-FERRAND",
            ">> Accueil téléphonique : du lundi au vendredi de 11h à 17h<br>" +
                    "   Horaires à privilégier (moins d’affluence) : de 12h30 à 14h et de 15h30 à 17h<br>" +
                    ">> Accueil au guichet : du lundi au vendredi : de 11h à 17h",
            "https://usine.crous-clermont.fr/"
        ],
        [
            "CROUS LYON",
            "Du lundi au jeudi : 9h – 17h<br>" +
                    "et le vendredi : 9h – 12h",
            "http://www.crous-lyon.fr/"
        ],
        [
            "CROUS GRENOBLE",
            "",
            "http://www.crous-grenoble.fr/"
        ],
        [
            "CROUS BORDEAUX",
            "Du lundi au vendredi<br>" +
                    "De 8h30 à 16H30",
            "https://www.crous-bordeaux.fr/"
        ],
        [
            "CROUS TOULOUSE",
            "Du lundi au vendredi<br>" +
                     "de 9h à 16h30",
            "http://www.crous-toulouse.fr/"
        ],
        [
            "CROUS MONTPELLIER",
            "Du lundi au vendredi de 09h00 à 16h00",
            "http://www.crous-montpellier.fr/"
        ],
        [
            "CROUS AIX-MARSEILLE",
            "Du lundi au vendredi de 09h00 à 16h30",
            "http://www.crous-aix-marseille.fr/"
        ],
        [
            "CROUS NICE",
            "Lundi au jeudi : 9h – 16h30<br>" +
                    "Vendredi : 13h30- 16h30",
            "http://www.crous-nice.fr/"
        ],
        [
            "CROUS CORSE",
            "Pour prendre un RDV, veuillez prendre rendez-vous en ligne, ou bien contactez les directement!",
            "http://www.crous-corse.fr/"
        ],
        [
            "CROUS LA RÉUNION",
            "Le lundi, mercredi, vendredi de 8H à 12H et de 13H à 15H30<br>" +
                    "Le mardi et jeudi de 8H à 12H",
            "https://www.crous-reunion.fr/"
        ],
        [
            "CROUS ANTILLES-GUYANE",
            "Du Lundi au Vendredi, de 8h00 à 12h00<br>" +
                    "en Guadeloupe, à Pointe-à-Pitre<br>" +
                    "en Martinique, à Schoelcher<br>" +
                    "en Guyane, à Cayenne",
            "https://www.crous-antillesguyane.fr/"
        ]
    ];
    function viewInfos() {
        $crousChoisi=document.getElementById("lesCrous").options[document.getElementById("lesCrous").selectedIndex].value;
        document.getElementById("infosCrousChoisi").innerHTML=$crousChoisi;
        $trouve=false;
        for( $i = 0; $i < $crous.length; $i++){
            if($crous[$i][0]===$crousChoisi){
                $trouve=true;
                document.getElementById("nomCrousChoisi").innerHTML=$crous[$i][0];
                if($crous[$i][1]===""){
                    document.getElementById("infosCrousChoisi").innerHTML="Non renseigné. Vueillez nous excuser.";
                }else{
                    document.getElementById("infosCrousChoisi").innerHTML=$crous[$i][1];
                }
                document.getElementById("siteCrousChoisi").href=$crous[$i][2];
                document.getElementById("cardCrous").hidden=false;
            }
        }
        if(!$trouve){
            document.getElementById("cardCrous").hidden=true;
        }
    }
    viewInfos();
</script>
    <!-- Extra large modal -->
    <button type="button" class="btn btn-primary" id="chatBot" data-toggle="modal" data-target=".bd-example-modal-xl">Ouvrir un chat <i class="fas fa-robot"></i></button>
    <a href="../Chat/index.php"><button type="button" class="btn btn-primary">Ouvrir un chat pour discutter avec les autres <i class="fas fa-robot"></i></button></a>

    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <iframe
                        allow="microphone;"
                        width="100%"
                        height="700"
                        src="https://bot.dialogflow.com/4fb05ac6-c3df-4d78-821c-2e671546e4be">
                </iframe>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/4f95c2083f.js" crossorigin="anonymous"></script>


<?php include "../commun/footer.php"; ?>