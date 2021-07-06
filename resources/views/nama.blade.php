<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="resources/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.0.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <title>Nama Mahasiswa</title>
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
            <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dosen">Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/gallery">Gallery</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <br>
  <div class="container" style="background-color:white;">
    <!--Pengkondisian 1-->
      <h5>Pengkondisian 1</h5>
      <h4 class="bg-dark px-3 py-1 text-white d-inline-block">{!! $nama !!}</h4>
      <h4 class="bg-dark px-3 py-1 text-white d-inline-block">{!! $nilai !!}</h4>
      <br>
      <div class="btn btn-secondary d-inline-block mb-3">
        <?php 
        if (($nilai >= 0) and ($nilai < 50)){
          echo "Maaf, anda tidak lulus";
        }
        else if (($nilai >= 50) and ($nilai <= 100)){
          echo "Selamat, anda lulus";
        }
        ?> 
        <br>
      </div>
    <!--Pengkondisian 2-->
      <h5>Pengkondisian 2</h5>
      <h4 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h4>
      <h4 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nilai }}</h4>
      <br>
      @switch($nilai)
        @case(0)
          <div class="btn btn-danger d-inline-block mb-3">Tidak ikut ujian</div>
        @break
        @case(75)
          <div class="btn btn-success d-inline-block mb-3">Lumayan</div>
        @break
        @case(100)
          <div class="btn btn-success d-inline-block mb-3">Sempurna</div>
        @break
        @default
          <div class="btn btn-dark d-inline-block mb-3">Nilai tidak valid</div>
      @endswitch
      <br>
    <!--Perulangan For-->
      <h5>Perulangan For</h5>
      @for($i=0; $i<5; $i++)
      <div class="btn btn-info d-inline-block mb-3">
        {{ $i }}
      </div>
      @endfor
      <br>
    <!--Perulangan While-->
      <h5>Perulangan While</h5>
      <?php $i=0; ?>
      @while($i<5)
      <div class="btn btn-info d-inline-block mb-3">
        {{ $i }}
      </div>
      <?php $i++ ?>
      @endwhile
      <br>
    <!--Perulangan Foreach-->
      <h5>Perulangan Foreach</h5>
      <h4 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h4>
      <br>
      @foreach($nilai1 as $val)
      <div class="btn btn-info d-inline-block">
        {{ $val }}
      </div>
      @endforeach
      <br>
  </div>

  <footer class="bg-dark py-4 text-white mt-4">
    <div class="container text-center">
      Web Framework | Copyright @ {{ date("Y") }} Nibros Ari Wibowo
    </div>
  </footer>
</body>
</html>