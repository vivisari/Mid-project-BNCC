<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PT Chipi Chapa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">klik</a>
              </li>


            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="p-5">
        <h1 class="text-center">Daftar Karyawan baru</h1>
        <form action="{{route('store')}}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="" class="form-label">Nama</label>
            <input value="{{old('namakaryawan')}}" type="text" class="form-control" id="" name="namakaryawan">
          </div>
          @error('namakaryawan')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
          @enderror
          <div class="mb-3">
            <label for="" class="form-label">Umur</label>
            <input value="{{old('umurkaryawan')}}" type="text" class="form-control" id="" name="umurkaryawan">
          </div>
          @error('umurkaryawan')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
          @enderror
          <div class="mb-3">
            <label for="" class="form-label">Alamat</label>
            <input value="{{old('alamatkaryawan')}}" type="text" class="form-control" id="" name="alamatkaryawan">
          </div>
          @error('alamatkaryawan')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
          @enderror
          <div class="mb-3">
            <label for="" class="form-label">No Telp</label>
            <input value="{{old('no_telp')}}" type="text" class="form-control" id="" name="no_telp">
          </div>
          @error('no_telp')
            <div class="alert alert-danger" role="alert">{{$message}}</div>
          @enderror

          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
