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
                        <h4 class="">Tabel Pegawai</h4>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('/employeeAdd') }}" class="btn btn-success">Tambah</a>
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
                            Nama Pegawai
                          </th>
                          <th>
                            Alamat
                          </th>
                          <th>
                            No Telpon
                          </th>
                          <th>
                            Username
                          </th>
                          <th>
                            Nama Lapangan
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($employees as $item)
                       
                        <tr>
                          <td>
                          {{ $loop->iteration }}
                          </td>
                          <td>
                          {{ $item->nama }}
                          </td>
                          <td>
                          {{ $item->alamat }}
                          </td>
                          <td>
                          {{ $item->telp }}
                          </td>
                          <td>
                          {{ $item->user->username }}
                          </td>
                          <td>
                          @foreach ($item->court as $pegCourt)
                          {{ $pegCourt->nama_lap }}<br><br>

                          @endforeach
                          </td>
                          <td>
                          <a href="{{ url('employee/edit/'.$item->id) }}" class="btn btn-primary"> Edit </a>
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