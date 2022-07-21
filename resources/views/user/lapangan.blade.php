@extends('user.layouts.master')
@section('content')

<style>
    .judulLap{
        font-weight: 600;
        margin-bottom: -5px;
    }
    .ketLap{
        font-size: 14px;
    }
    .judulCover{
        position: absolute;
       color: white;
       top: 250px;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
</style>
<div>
   
        <div class="judulCover">
        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id faucibus dolor, nec lobortis nibh. Praesent id faucibus dolor. </p>
        </div>
    
   

</div>
<img class="coverHal" src="{{asset('assets/coverHalaman.png')}}" alt="">


<div class="grid">
    <div class="row1">
        
    @foreach ($courts as $item)
<div class="col-sm-4 box_court" style="margin-top:40px;">
<img src="{{asset('storage/' . $item->image)}}" alt="" class="img_lapangan">
<div class="box_text">
<h3 class="judulLap">{{ $item->nama_lap }}</h3>
<p class="ketLap">Kategori : {{ $item->kategori }}</p>
<p class="ketLap" style="margin-top:-10px;">Harga : Rp {{ $item->harga }}</p>
<!-- <a href="/login"><button class="button_book">Booking</button></a> -->
</div>
</div>

@endforeach
    </div>
    </div>
    

@endsection