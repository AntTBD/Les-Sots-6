<?php
    $base = new PDO('mysql:host=localhost;charset=UTF8;dbname=phpmyadmin', 'phpmyadmin', 'lessots6');
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  $task = "list";

  if(array_key_exists("task",$_GET)) {
    $task = $_GET['task'];
  }

  if($task == "write") {
    postMessage();
  } else {
    getMessages();
  }

  function getMessages() {
    global $base;

    $resultats = $base->query("SELECT * FROM message ORDER BY id DESC LIMIT 100");

    $message = $resultats->fetchAll();

    echo json_encode($message);
  }

  function postMessage() {
    global $base;

    if(!array_key_exists('user', $_POST) || !array_key_exists('content',$_POST)) {
      echo json_encode(["status" => "error", "message" => "Not all field received"]);
      return;
    }
    $user = $_POST['user'];
    $content = $_POST['content'];

    $query = $base->prepare('INSERT INTO message SET user = :user, content = :content');

    $query->execute([
      "user" => $user,
      "content" => $content
    ]);
    echo json_encode(["status" => "success"]);
  }
?>
