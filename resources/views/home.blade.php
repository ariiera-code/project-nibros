@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Pendaftaran Mahasiswa') }}</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            @if ($errors->any())
              <div class="alert alert-danger col-6">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <div class="col-12">
              <form action="{{ url('/form') }}" method="post">
                @csrf
                <div class="mb-2">
                  <label for="nim" class="form-label">NIM</label>
                  <input type="number" class="form-control" id="nim" name="nim" minlength="8">
                </div>
                <div class="mb-2">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-2">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-2">
                  <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                  <div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1"
                        value="Laki-Laki">
                      <label class="form-check-label" for="jk1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2"
                        value="Perempuan">
                      <label class="form-check-label" for="jk2">Perempuan</label>
                    </div>
                  </div>
                </div>
                <div class="mb-2">
                  <label for="jurusan" class="form-label">Jurusan</label>
                  <div>
                    <select class="form-select" id="jurusan" name="jurusan">
                      <option selected>Teknik Informatika</option>
                      <option value="Teknik Mesin">Teknik Mesin</option>
                      <option value="Teknik Sipil">Teknik Sipil</option>
                      <option value="Akuntansi">Akuntansi</option>
                    </select>
                  </div>
                </div>
                <div class="mb-2">
                  <label for="alamat" class="form-label">Alamat</label>
                  <div>
                    <textarea class="form-control" placeholder="Masukkan alamat lengkap" id="alamat"
                      name="alamat"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary col-12">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
