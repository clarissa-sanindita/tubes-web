@extends('admin.layouts.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title mt-3">Persewaan Lapangan</h4>
    </div>
    <div class="card-body">

      <form class="forms-sample" action="{{ url('transaction') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
          <select class="form-select" name="pelanggan_id" aria-label="Default select example">
            <option selected>Nama Pelanggan</option>
            @foreach ($customer as $pelanggan)
            <option value="{{ $pelanggan->id}}">
              {{ $pelanggan->nama }}
            </option>
            @endforeach
          </select>
        </div>
        <div class="form-group mb-4">
          <select class="form-select" name="lapangan_id" aria-label="Default select example">
            <option selected>Nama Lapangan</option>
            @foreach ($court as $lapangan)
            <option value="{{ $lapangan->id}}">
              {{ $lapangan->nama_lap }}
            </option>
            @endforeach
          </select>
        </div>
    
        <div class="form-group">
          <label for="exampleInputName1">Tanggal Booking</label>
          <input type="date" name="tgl_book" class="form-control @error('tgl_book') is-invalid @enderror" id="exampleInputName1" placeholder="Nama Lapangan">
          @error('tgl_book')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Waktu Book</label>
          <input type="text" name="waktu_book" class="form-control @error('waktu_book') is-invalid @enderror" id="exampleInputName1" placeholder="Kategori">
          @error('waktu_book')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Jumlah Jam</label>
          <input type="text" name="jumlah_jam" class="form-control @error('jumlah_jam') is-invalid @enderror" id="exampleInputName1" placeholder="Harga">
          @error('jumlah_jam')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Total</label>
         
          <input type="text" name="total" value="" class="form-control @error('total') is-invalid @enderror" id="exampleInputName1" >
          @error('total')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group mb-4">
          <select class="form-select" name="pegawai_id" aria-label="Default select example">
            <option selected>Kasir</option>
            @foreach ($employee as $pegawai)
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