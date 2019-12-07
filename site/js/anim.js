var run = 0;
var tab = ["span1", "span2", "span3"];
var coordX = [0,0,0];
var coordY = [window.innerHeight,window.innerHeight,window.innerHeight];
var centerY = window.innerHeight/2;
var centerO = window.innerWidth*60/240;
var reponses = [];
var dialogues = ["scolaire","administratifs","financier","Info diverses","Harcélement","Notes","Administratif","Addiction","Loisir","Nourriture","Logement","Bourses","Les campus","Démarches","Personnes à contacter","Sexuel","De genre","Psycologique","Cours de soutien","Ou apprendre?","Methodologie","Inscription","Renseignements","Papier a remplir","Arreter","Qui contacter?","Ou aller?","Sport","Les asso etudiantes","Activités périscolaire","Manger à moindre coût","Les RU","Astuces","Crous","Apartement perso","Les aides au logements","Scolaire","Logement","Etranger"];
var count = 0;
var color = ["#cc472b","#aebc22","#29bc22","#22bc7f","#229ebc","#2245bc","#6322bc","#bc2266"];
var compt = 1;
$( document ).ready(function() {
    $(".bubleText").css({'margin-top':window.innerHeight/15,'fontSize': window.innerHeight/30});
    for (i = 0; i<3 ; i++){
        $("#"+tab[i]).width(window.innerWidth/7).height(window.innerWidth/7).css("background-color", color[Math.floor(Math.random() * 8)]);
        document.getElementById(tab[i]).style.marginLeft = (window.innerWidth*30/240)+"px";
        document.getElementById(tab[i]).style.marginTop = (window.innerHeight*75/240)+"px";


    }

});

function moveBuble() {
    run++;
    centerO =  ((60-run)/240)*window.innerWidth+(window.innerWidth*30)/240;
    document.getElementById(tab[0]).style.marginLeft = centerO+"px";
    for (i = 0; i<2; i++){
        coordX[i] = ((-60+run)/240)*window.innerWidth;
        document.getElementById(tab[i]).style.marginRight = coordX[i]+"px";
    }
    for (i = 0; i < 3; i++){
        coordY[i] = (((300-run*2)/240)*window.innerHeight)-centerY;
        document.getElementById(tab[i]).style.marginTop = coordY[i]+"px";
    }


    if (run < 60 ){
        setTimeout(moveBuble, 1);
    }
}

function wait(rep) {

    if (count == 0){
        reponses.push(rep);
        count = rep*3;
        reponses.push(rep);
    }else{
        count = count+rep*9;
        reponses.push(rep);
    }
    compt++;
    if(compt >= 4){
        finish();
    }

    for (i=0 ; i<3 ; i++){
        $("#"+tab[i]).width(window.innerWidth/7).height(window.innerWidth/7).css({"background-color": color[Math.floor(Math.random() * 8)],'margin-top':window.innerHeight/15,'fontSize': window.innerHeight/30}).text(dialogues[count+i]);

    }
    run = 0;
    moveBuble();
}
    var awnser = ["<a href='https://www.restosducoeur.org/nos-actions/estime-de-soi/'>estime de soi</a><br>","<a href='https://www.messervices.etudiant.gouv.fr/envole/'>aide gouv</a><br>","<a href='https://annuaire.action-sociale.org/etablissements/readaptation-sociale/centre-de-soins-accompagnement-prevention-addictologie-197.html'>addictologie</a><br>","<a href='https://www.spf75.org/article/antennes-etudiants'>aide medecin etudiants</a><br>","<a href='http://www.onisep.fr/Choisir-mes-etudes/Apres-le-bac/La-vie-etudiante/Financer-ses-etudes-bourses-aides-prets'>Choisir mes etudes</a><br>","<a href='https://www.aide-sociale.fr/les-aides-financieres-aux-jeunes-et-aux-etudiants/'>Aide financières</a><br>"];
function finish() {
    for (i=0; i<3; i++){
        $("#"+tab[i]).hide();
    }
    $("#awnser").show();
    $("#allAwnser").html(awnser[Math.floor(Math.random() * 6)]+awnser[Math.floor(Math.random() * 6)]+awnser[Math.floor(Math.random() * 6)]);

}
