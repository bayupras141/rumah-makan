@extends('layouts.app')

@section('content')
<div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
      <section class="tm-section row">
        <div class="col-lg-9 col-md-9 col-sm-8">
          <h2 class="tm-section-header gold-text tm-handwriting-font">Tentang Rumah Makan</h2>
          <p class="tm-welcome-description">Friends & Family adalah kafe dan pasar musiman yang menyajikan makanan panggang segar di East Hollywood, CA yang dijalankan oleh Pastry Chef/Baker Roxana Jullapat dan Chef Daniel Matten. Juara lama memasak berbasis produk, Jullapat dan Matten membangun karir mereka selama lima belas tahun di dapur terkenal Los Angeles (termasuk AOC, Lucques, Campanile, dan Cooks County) sebelum membuka Friends & Family.

            Di Friends & Family, mereka melanjutkan dedikasi mereka pada makanan buatan tangan dengan roti dan kue kering yang dibuat setiap hari dengan biji-bijian pusaka yang bersumber secara lokal, serta menu produk sehari-hari.</p>
        </div>
      </section>          
      <section class="tm-section row">
        <div class="col-lg-12 tm-section-header-container margin-bottom-30">
          <h2 class="tm-section-header gold-text tm-handwriting-font">Jam Buka Restoran</h2>
          <div class="tm-hr-container"><hr class="tm-hr"></div>
        </div>
        <div>
            @foreach($data as $c)
          <div class="tm-menu-product-content col-lg-9 col-md-9" style="width: 980px;"> <!-- menu content -->
            <div class="tm-product">
              <div class="tm-product-text">
                <h3 class="tm-product-title">{{$c['nama']}} </h3>
                <p class="tm-product-description">{{$c['jam']}}</p>
              </div>
            </div>
          </div>
            @endforeach
          </div>
        </div>          
      </section>
@endsection
