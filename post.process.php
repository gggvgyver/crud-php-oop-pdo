<?php 
  include "./includes/class-autoload.inc.php";

  $posts = new Posts();
  
  if(isset($_POST['submit'])) {
    $title = $_POST['post-title'];
    $body = $_POST['post-content'];
    $author = $_POST['post-author'];
  
    $posts->addPost($title, $body, $author);
  
    header("location: {$_SERVER['HTTP_ORIGIN']}/crud-php-oop-pdo/index.php?status=added");
  
  } else if($_GET['send'] === 'pagination') {
    $id = $_GET['interval'];
    $posts->getPost($id);
    header("location: {$_SERVER['HTTP_ORIGIN']}/crud-php-oop-pdo/");
  } else if($_GET['send'] === 'del') {
    $id = $_GET['id'];
    $posts->delPost($id);

    header("location: {$_SERVER['HTTP_ORIGIN']}/crud-php-oop-pdo/index.php?status=deleted");
  } else if($_GET['send'] === 'update') {
    $id = $_GET['id'];

    $title = $_POST['post-title'];
    $body = $_POST['post-content'];
    $author = $_POST['post-author'];

    $posts->updatePost($id, $title, $body, $author);

    header("location: {$_SERVER['HTTP_ORIGIN']}/crud-php-oop-pdo/index.php?status=updated");
  }
