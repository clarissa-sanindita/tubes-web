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
                        <h4 class="">Data Transaksi</h4>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('/transactionAdd') }}" class="btn btn-success">Tambah</a>
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
                            Nama Pelanggan
                          </th>
                          <th>
                            Lapangan
                          </th>
                          <th>
                            Tanggal Booking
                          </th>
                          <th>
                            Waktu Booking
                          </th>
                          <th>
                            Jam
                          </th>
                          <th>
                            Total
                          </th>
                          <th>
                            Kasir
                          </th>
                          
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($transaction as $item)
                       
                        <tr>
                          <td>
                          {{ $loop->iteration }}
                          </td>
                          <td>
                          {{ $item->customer->nama }}
                          </td>
                          <td>
                          
                          <br>{{ $item->court->nama_lap }} 
  
                          
                          </td>
                          <td>
                          {{ $item->tgl_book }}
                          </td>
                          <td>
                          {{ $item->waktu_book }}
                          </td>
                          <td>
                          {{ $item->jumlah_jam }}
                          </td>
                          
                          <td>
                          {{ $item->total }}
                          </td>
                          <td>
                          {{ $item->employee->nama }}
                          </td>
                          <td>
                          <a href="#" class="btn btn-primary"> Checkout </a>
                          <form action="{{ url('employee/delete/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin menghapus data?')">
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