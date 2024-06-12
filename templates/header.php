<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Codar</title>
  <!-- Estilos do projeto -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <a href="<?php echo $BASE_URL ?>" id="logo">
      <img src="<?php echo $BASE_URL ?>/img/logo.svg" alt="Blog Codar">
    </a>
    <nav>
      <ul id="navbar">
        <li><a href="<?php echo $BASE_URL ?>" class="nav-link">Home</a></li>
        <li><a href="#" class="nav-link">Categorias</a></li>
        <li><a href="#" class="nav-link">Sobre</a></li>
        <li><a href="<?php echo $BASE_URL ?>contato.php" class="nav-link">Contato</a></li>
      </ul>
    </nav>
  </header>