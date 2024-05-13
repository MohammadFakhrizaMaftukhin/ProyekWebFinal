@extends('tema.main')

@section('kategorimakanan')
<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
        <div class="container">
            
            <h2>Makanan di <a href="/kategori" class="text-black">"Makanan"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/rendang.jpeg" alt="rendang" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>rendang</h4>
                    <p class="food-price">Rp 10.000,00</p>
                    <p class="food-detail">
                        Daging sapi yang diolah
                    </p>
                    <br>

                    <a href="/order" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/Telur Balado Recipe (Indonesian Hard-Boiled Eggs in Sambal Balado).jpeg.jpg" alt="Telur Balado" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Telur Balado</h4>
                    <p class="food-price">Rp 6.000,00</p>
                    <p class="food-detail">
                        Telur yang dibumbui
                    </p>
                    <br>

                    <a href="/order" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/hati.jpeg" alt="rendang" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Hati Ayam</h4>
                    <p class="food-price">Rp 8.000,00</p>
                    <p class="food-detail">
                        Hati Ayam yang diolah
                    </p>
                    <br>

                    <a href="/order" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/ayam.jpeg" alt="rendang" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Ayam Goreng</h4>
                    <p class="food-price">Rp 8.000,00</p>
                    <p class="food-detail">
                        Ayam Goreng biasa
                    </p>
                    <br>

                    <a href="/order" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/Nasi Bungkus Enak.jpeg.jpg" alt="rendang" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Ayam Bumbu Kuning</h4>
                    <p class="food-price">Rp 8.000,00</p>
                    <p class="food-detail">
                        Daging ayam bumbu kuning
                    </p>
                    <br>

                    <a href="/order" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/Ayam Goreng Kuning Serundeng  by Meat Gong.jpeg.jpg" alt="rendang" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Ayam Goreng Serundeng</h4>
                    <p class="food-price">Rp 8.000,00</p>
                    <p class="food-detail">
                        Ayam goreng dengan bumbu serundeng
                    </p>
                    <br>

                    <a href="/order" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="clearfix"></div>

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

@endsection