<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Hasil Pendaftaran</title>
</head>
<body>
  <div class="container mt-4 mb-4">
    <h3><strong>Hasil Pendaftaran Mahasiswa</strong></h3><hr class="col-6 mt-3 mb-3">
    <div class="col-6">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Data</th>
            <th scope="col">Nilai</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">NIM</th>
            <td>{{$data['nim']}}</td>
          </tr>
          <tr>
            <th scope="row">Nama</th>
            <td>{{$data['nama']}}</td>
          </tr>
          <tr>
            <th scope="row">Email</th>
            <td>{{$data['email']}}</td>
          </tr>
          <tr>
            <th scope="row">Jenis Kelamin</th>
            <td>{{$data['jenis_kelamin']}}</td>
          </tr>
          <tr>
            <th scope="row">Jurusan</th>
            <td>{{$data['jurusan']}}</td>
          </tr>
          <tr>
            <th scope="row">Alamat</th>
            <td>{{$data['alamat']}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
