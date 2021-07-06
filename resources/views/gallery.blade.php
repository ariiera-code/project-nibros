<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.0.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Mahasiswa</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">.elnino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dosen">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/gallery">Gallery</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class ="container text-center mt-3 p-4 bg-white">
    <h1>Gallery</h1>
    <div class="row">
        <div class="col-4">
            <img src="https://images.unsplash.com/photo-1622645789666-5ec9dcc7accd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
            class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="https://images.unsplash.com/photo-1622645789620-452e764960f4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80"
            class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="https://images.unsplash.com/photo-1605143472144-13b0aaa9e37e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=671&q=80"
            class="img-thumbnail img-fluid">
        </div>
    </div>
</div>
<footer class="bg-dark py-4 text-white mt-4">
<div class="container text-center">
    Web Framework | Copyright @ {{ date("Y") }} Nibros Ari Wibowo</div></footer>
</body>
</html>