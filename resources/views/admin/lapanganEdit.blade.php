@extends('admin.layouts.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title mt-3">Edit Data Lapangan</h4>
    </div>
    <div class="card-body">

      <form class="forms-sample" action="{{ url('court/'.$courts->id) }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Nama Lapangan</label>
          <input type="text" name="nama_lap" value="{{ $courts->nama_lap }}" class="form-control" id="exampleInputName1" placeholder="Nama Lapangan">
        </div>
        <div class="form-group">
          <input type="hidden" name="oldImage" value="{{$courts->image}}">
          <label for="image" class="form-label">Upload Image</label>
          @if($courts->image)
          <img src="{{asset('storage/' . $courts->image)}}" class="img-preview img-fluid mb-3 mt-3 col-sm-3 d-block">
          @else
          <img class="img-preview img-fluid mb-3 mt-3 col-sm-3">
          @endif
          <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Kategori</label>
          <input type="text" name="kategori" value="{{ $courts->kategori }}" class="form-control" id="exampleInputName1" placeholder="Kategori">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Harga</label>
          <input type="text" name="harga" value="{{ $courts->harga }}" class="form-control" id="exampleInputName1" placeholder="Harga">
        </div>
        <div class="form-group mb-4">
          <select class="form-select" name="pegawai_id"  aria-label="Default select example">
            
            @foreach ($employees as $pegawai)

            <option {{ $courts->pegawai_id ==  $pegawai->id ? 'selected' : ''}} value="{{ $pegawai->id}}">
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