<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>halaman <?= $data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class='container'>
  <a class="navbar-brand" href="<?= BASEURL ?>">phpmvc</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= BASEURL ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= BASEURL ?>/about">about</a>
      <a class="nav-item nav-link" href="<?= BASEURL ?>/mahasiswa">mahasiswa</a>
    </div>
  </div>
  </div>
</nav>
