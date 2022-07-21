@extends('admin.layouts.master')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="col-lg-12 grid-margin stretch-card">

              <div class="card">
                <div class="card-body">
                <div class="mt-2">
                        <div class="pull-left">
                        <h4 class="">Tabel Lapangan</h4>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('/courtAdd') }}" class="btn btn-success">Tambah</a>
                        </div>
                    </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Nama Lapangan
                          </th>
                          <th>
                            Gambar
                          </th>
                          <th>
                            Nama Pegawai
                          </th>
                          <th>
                            Kategori
                          </th>
                          <th>
                            Harga
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($courts as $item)
                       
                        <tr>
                          <td>
                          {{ $loop->iteration }}
                          </td>
                          <td>
                          {{ $item->nama_lap }}
                          </td>
                          <td>
                            <img class="" src="{{asset('storage/' . $item->image)}} " alt="">
                          </td>
                          <td>
                          {{ $item->employees->nama }}
                          </td>
                          <td>
                          {{ $item->kategori }}
                          </td>
                          <td>
                          {{ $item->harga }}
                          </td>
                          <td>
                            <a href="{{ url('court/edit/'.$item->id) }}" class="btn btn-primary"> Edit </a>
                            <form action="{{ url('court/delete/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin menghapus data?')">
                              @method('delete')
                              @csrf
                              <button  class="btn btn-danger"> Hapus</button>
                            </form>
                           
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection