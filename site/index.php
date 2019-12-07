<?php include "commun/header.php"; ?>
<link href="/style/anim.css" rel="stylesheet">
<link href="/style/animate.css" rel="stylesheet">

    <h1> <i class="fas fa-question"></i> Quel est votre probléme  <i class="fas fa-question"></i></h1>
    <span class="dot animated pulse slower delay-1s infinite" id="span1" onclick="wait(1)"><p class="bubleText">Scolaire</p></span>
    <span class="dot red animated  pulse slower infinite" id="span2" onclick="wait(2)" ><p class="bubleText">Divers</p></span>
    <span class="dot green animated pulse slower  infinite delay-5s" id="span3" onclick="wait(3)" ><p class="bubleText">Financier</p></span>

    <h1 hidden id="awnser"> Nous vous proposons cette selection de sites pour resoudre vos problèmes</h1>
    <div id="allAwnser"></div>


    <small> ceci n'est qu'une demo. Les choix ne sont pas effectif</small>


<script src="/js/jquery.js" type="text/javascript"></script>
<script src="/js/anim.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/4f95c2083f.js" crossorigin="anonymous"></script>

<?php include "commun/footer.php"; ?>