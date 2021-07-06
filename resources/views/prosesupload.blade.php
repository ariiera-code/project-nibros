<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Hasil Upload File</title>
</head>
<body>
  <div class="container mt-4 mb-4">
    <h3><strong>Hasil Upload File</strong></h3><hr class="col-6 mt-3 mb-3">
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
            <th scope="row">Nama</th>
            <td>{{$data->berkas->getClientOriginalName()}}</td>
          </tr>
          <tr>
            <th scope="row">Ukuran</th>
            <td>{{$data->berkas->getSize()}}</td>
          </tr>
          <tr>
            <th scope="row">Path</th>
            <td>{{$data->berkas->getRealPath()}}</td>
          </tr>
          <tr>
            <th scope="row">Ekstensi Original</th>
            <td>{{$data->berkas->getClientOriginalExtension()}}</td>
          </tr>
          <tr>
            <th scope="row">Tipe MIME</th>
            <td>{{$data->berkas->getMimeType()}}</td>
          </tr>
          <tr>
            <th scope="row">Validasi</th>
            
            <td>@if($data->berkas->isValid())
            Data Tervalidasi @endif</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>

