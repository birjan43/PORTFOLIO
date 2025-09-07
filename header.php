<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="container header-container">
      <div class="logo">Prem Neupane</div>
      <nav class="nav">
        <ul>
          <li><a href="index.php" class="<?php echo ($activePage == 'home') ? 'active' : ''; ?>">Home</a></li>
          <li><a href="about.php" class="<?php echo ($activePage == 'about') ? 'active' : ''; ?>">About</a></li>
          <li><a href="project.php" class="<?php echo ($activePage == 'projects') ? 'active' : ''; ?>">Projects</a></li>
          <li><a href="contact.php" class="<?php echo ($activePage == 'contact') ? 'active' : ''; ?>">Contact</a></li>
          
        </ul>
      </nav>
    </div>
  </header>
