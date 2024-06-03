@extends('tema.main')

@section('kategori')
<!-- CAtegories Section Starts Here -->
<section class="categories">
        <div class="container">
            <h2 class="text-center">Jelajahi Makanan</h2>

            <a href="/kategorimakanan">
            <div class="box-3 float-container">
                <img src="gambar/Easy and Simple Beef Rendang Recipe (Javanese-Style) - Taste of Nusa.jpeg.jpg" alt="Rendang" class="img-responsive img-curve">

                <h3 class="float-text text-white">Makanan</h3>
            </div>
            </a>

            <a href="/kategoriminuman">
            <div class="box-3 float-container">
                <img src="gambar/evakolenko.jpeg.jpg" alt="es" class="img-responsive img-curve">

                <h3 class="float-text text-white">Minuman</h3>
            </div>
            </a>

            <a href="/kategoritambahan">
            <div class="box-3 float-container">
                <img src="gambar/Tempe mendoan atau Tempe goreng Tepung Enak.jpeg.jpg" alt="tempe" class="img-responsive img-curve">

                <h3 class="float-text text-white">Snack</h3>
            </div>
            </a>
            
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->
@endsection