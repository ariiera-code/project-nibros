<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Custom fonts for this template-->
  <link href="css?family=Roboto:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="/css/style-backup.css">
  <title>About</title>
</head>
<body>
  <nav>
    <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
    <label class="logo"><a href="/">elnino.</a></label>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/mahasiswa">Mahasiswa</a></li>
    </ul>
  </nav>
  <div class="container">
    <section id="main">
      <h2 style="font-size: 26px; margin: 4rem 0 0 4rem;">Hello,</h2>
      <h1 style="margin: 1rem 0 0 4rem;">I am</h1>
      <h1>Nibros</h1>
      <h1>Ari Wibowo</h1>
      <button class="btn-homelogin">Web Developer</button>
    </section>
    <section id="sidebar-about">
      <img class="about1" src="img/DSC_1206-1.png" alt="">
    </section>
  </div>
  <div class="container" style="background: white;">
    <section id="main-about2">
      <img src="img/DSC_1206-2.png">
      <br><br><br>
    </section>
    <section id="sidebar-about2">
      <h1 style="margin: 9rem 0 0 4rem">About Me</h1>
      <h2 style="margin:3rem 0 1rem 4rem;font-size:18px">Jenis Kelamin: {{$jenis_kelamin}}</h2>
      <h2 style="margin:0 0 1rem 4rem;font-size:18px">TTL: {{$ttl}}</h2>
      <h2 style="margin:0 0 1rem 4rem;font-size:18px">Hobi: {{$hobi}}</h2>
      <h2 style="margin:0 0 1rem 4rem;font-size:18px">Moto Hidup: {{$moto_hidup}}</h2>
      <h2 style="margin:0 0 1rem 4rem;font-size:18px">Makanan Favorit: {{$makanan_fav}}</h2>
      <h2 style="margin:0 0 1rem 4rem;font-size:18px">Minuman Favorit: {{$minuman_fav}}</h2>
    </section>
  </div>
</body>
<footer id="main-footer">
  <p>Copyright &copy; 2021 Nibros Ari Wibowo</p>
</footer>
</html>