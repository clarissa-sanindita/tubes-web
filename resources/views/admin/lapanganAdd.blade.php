@extends('admin.layouts.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title mt-3">Tambah Data Lapangan</h4>
    </div>
    <div class="card-body">

      <form class="forms-sample" action="{{ url('court') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Nama Lapangan</label>
          <input type="text" name="nama_lap" class="form-control @error('nama_lap') is-invalid @enderror" id="exampleInputName1" placeholder="Nama Lapangan">
          @error('nama_lap')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="image" class="form-label">Upload Image</label>
          <img class="img-preview img-fluid mb-3 mt-3 col-sm-3">
          <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Kategori</label>
          <input type="text" name="kategori" class="form-control @error('kategori') is-invalid @enderror" id="exampleInputName1" placeholder="Kategori">
          @error('kategori')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Harga</label>
          <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" id="exampleInputName1" placeholder="Harga">
          @error('harga')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group mb-4">
          <select class="form-select" name="pegawai_id" aria-label="Default select example">
            <option selected>Pegawai</option>
            @foreach ($employees as $pegawai)
            <option value="{{ $pegawai->id}}">
              {{ $pegawai->nama }}
            </option>
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-success me-2">Submit</button>
        <button class="btn btn-danger">Cancel</button>
      </form>
    </div>
  </div>
</div>



@endsection