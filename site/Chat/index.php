<?php include "../commun/header.php"; ?>

    <link rel="stylesheet" href="/style/style1.css">
  <?php

    $base = new PDO('mysql:host=localhost;charset=UTF8;dbname=phpmyadmin', 'phpmyadmin', 'lessots6');
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  ?>
    <div class="chat">
        <div class="messages">
            <!-- Ici nos message écrit avec Ajax !-->
        </div>
        <div class="user-inputs">
            <form id='formMsg' method="post" action="post.php?task=write">
                <input id="user" type="text" name="user" placeholder="Votre pseudo">
                <input id="content" type="text" name="content" placeholder=" Votre message">
                <button id="submitMessage" type="submit" name="button">Envoyer</button>
            </form>

        </div>
    </div>

  <script type="text/javascript" src="/js/chatscript.js"></script>

  <?php include "../commun/footer.php"; ?>