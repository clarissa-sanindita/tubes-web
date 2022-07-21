@extends('user.layouts.master')
@section('content')
<style>
  .judulCover{
        position: absolute;
       color: white;
       top: 320px;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
</style>

<img class="coverHal" src="{{asset('assets/coverHalaman3.png')}}" alt="">
<div class="judulCover">
<h1>Those who play badminton well take decisions quickly</h1>
        <div class="judul_cover">
        <p class="text_cover">Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam.</p>
        </div>
        <div class="search-container">
        <form class="serc">
          <input type="text" placeholder="Search" name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
</div>
  
  </div>
  <center> 
      <table style="margin-top:70px;">
      <tr>
        <td>
        <div class="content">
          <img src="assets/kids.jpg" alt="" class="content_img">
          <h2 class="judul_content">Beginner</h2>
          <p class="text_cover">Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
        </div>
        </td>
        <td>
        <div class="content">
          <img src="assets/teen.jpg" alt="" class="content_img">
          <h2 class="judul_content">Intermediate</h2>
          <p class="text_cover">Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
        </div>
        </td>
        <td>
        <div class="content">
          <img src="assets/senior.jpg" alt="" class="content_img">
          <h2 class="judul_content">Advanced</h2>
          <p class="text_cover">Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
        </div>
        </td>
      </tr>
    </table>
</center>
   <table class="grid box_img">
    <tr>
      <td>
        <div class="img_text">
        <p style="font-size:small" class="tanggal">Selasa, 12 April 2022 13.00 WIB</p>
          <p style="font-size:small" >Penulis : Clarissa S R</p>
          <h2 style="margin-top:-10px">Indonesia Menjadi Juara di Turnamen Internasional 2022</h2>
          <p class="paragraf">Lorem ipsum dolor sit amet. Suspendisse commodo malesuada nulla ac luctus. Conubia nostra, per inceptos himenaeos. Cras sed massa ac nisi vulputate malesuada. Aliquam id lorem semper, rutrum nulla et, vestibulum tortor.</p>
          <a href="news.html"><button class="button">Read more</button></a> 
        </div>
      </td>
      <td>
        <div >
          <img src="assets/kotak.jpg" alt="" class="img_gambar">
        </div>
      </td>
    </tr>
   </table>
   <div class="pemain grid">
    <h2 class="judul_cp">Galeri Pemain</h2>
    <table>
      <tr>
        <td>
        <div class="content_pemain">
          <img src="assets/cover.jpg" alt="" class="img_pemain">
          <div class="textt">
          <h3 class="judul_pemain">Lorem ipsum dolor sit amet, tempor prodesset eos no.</h3>
          <p class="text_pemain">Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam.</p>
          </div>
          </div>
        </td>
        <td>
        <div class="content_pemain2">
          <img src="assets/galeri2.jpg" alt="" class="img_pemain2">
          <div class="textt">
          <h3 class="judul_pemain">Lorem ipsum dolor sit amet.</h3>
          <p class="text_pemain">Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei.</p>
          </div>
          </div>
          <div class="content_pemain2">
          <img src="assets/galeri5.jpg" alt="" class="img_pemain2">
          <div class="textt">
          <h3 class="judul_pemain">Lorem ipsum dolor sit amet.</h3>
          <p class="text_pemain">Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei.</p>
          </div>
          </div>
        </td>
      </tr>
    </table>
   </div>
    
@endsection