@extends('admin.layouts.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header">
                <h4 class="card-title mt-3">Edit Pelanggan</h4>
                </div>
                <div class="card-body">
                  
                  <form class="forms-sample" action="{{ url('customer/'.$customers->id) }}" method="post">
                  @method('patch')  
                  @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Pelanggan</label>
                      <input type="text" name="nama" value="{{ $customers->nama }}" class="form-control @error('nama') is-invalid @enderror" id="exampleInputName1" placeholder="Nama Pelanggan">
                      @error('nama')
                      <div class="invalid-feedback">
                      {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Alamat</label>
                      <input type="text" name="alamat" value="{{ $customers->alamat }}" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputName1" placeholder="Alamat">
                      @error('alamat')
                      <div class="invalid-feedback">
                      {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email</label>
                      <input type="email" name="email" value="{{ $customers->email }}" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail3" placeholder="Email">
                      @error('email')
                      <div class="invalid-feedback">
                      {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">No Telpon</label>
                      <input type="text" name="telp" value="{{ $customers->telp }}" class="form-control @error('telp') is-invalid @enderror" id="exampleInputName1" placeholder="No Telpon">
                      @error('telp')
                      <div class="invalid-feedback">
                      {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Username</label>
                      <input type="text" name="username" value="{{$users->username }}" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username">
                      @error('username')
                      <div class="invalid-feedback">
                      {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      
                      <input type="hidden" value="{{ $users->password }}" name="password" class="form-control" id="password" placeholder="Password">
                      
                    </div>
                    <div class="form-group">
                      <input value="{{ $users->status }}" type="hidden" name="status" class="form-control" id="status">
                    </div>
                    <button type="submit" class="btn btn-success me-2">Submit</button>
                    <button class="btn btn-danger">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
@endsection