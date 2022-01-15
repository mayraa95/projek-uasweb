@extends('layouts.main')
@section('container')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Starbuck</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/heroes/">

  

  <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  
  <!-- Custom styles for this template -->
  <link href="heroes.css" rel="stylesheet">
</head>
<body>
  
<main>
<h1 class="visually-hidden">Welcome to Starbucks</h1>

<div class="px-4 py-5 my-5 text-center">
  <img src="img/logo1.jpg" width="300" alt="" width="250" height="300">
  <h1 class="display-5 fw-bold">Definition Starbucks</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Starbucks sells hot and cold drinks, coffee beans, salads, hot and cold sandwiches, sweet pastries, snacks, and items such as glasses and tumblers.</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Read more ...</button>
      <button type="button" class="btn btn-outline-secondary btn-lg px-4">Back</button>
    </div>
  </div>
</div>

<div class="b-example-divider"></div>

<div class="bg-dark text-secondary px-4 py-5 text-center">
  <div class="py-5">
    <img src="img/foto3.jpg" width="450" alt="" width="450" height="350">
    <h1 class="display-5 fw-bold text-white" style="font-family:copperplate;">STARBUCKS BEVERAGES</h1>
    <div class="col-lg-6 mx-auto">
      <p class="fs-5 mb-4" style="font-family:lucidahandwriting;">Amazing coffees from around the world. Handcrafted beverages to discover and enjoy. We love bringing you these things.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-outline-light btn-lg px-4">EXPLORE MORE</button>
      </div>
    </div>
  </div>
</div>

<div class="container my-5">
  <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
      <img src="img/foto4.jpg" align="right" width="450" alt="" width="450" height="350">
      <h1 class="display-5 fw-bold text-dark" style="font-family:copperplate;">FRESH FOOD</h1>
      <p class="fs-5 mb-4" style="font-family:lucidahandwriting;">Our pastries and sandwiches are made with high-quality, simple ingredients. So all the goodness you taste is real food, simply delicious.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">EXPLORE MORE</button>
      </div>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
        <img class="rounded-lg-3" src="bootstrap-docs.png" alt="" width="720">
    </div>
  </div>
</div>

<footer class="mt-auto text-dark-50">
  <marquee>Projek UAS Akhir website Starbucks - By : Maya Anugrah Syafira (202102344) / 3C3</marquee>
</footer>

</body>
</html>
@endsection

