<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Upload File</title>
</head>
<body>
  <div class="container mt-4 mb-4">
    <h3><strong>Upload File</strong></h3><hr class="col-6 mt-3 mb-3">
    @if($errors->any())
    <div class="alert alert-danger col-6">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="col-6">
      <form action="{{url('/file-upload')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="berkas" class="form-label">Gambar Profile</label>
          <input class="form-control" type="file" id="berkas" name="berkas">
          @error('berkas')
          <div class="text-danger">{{$message}}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary col-12">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>

