@extends('tema.main')

@section('kategoriminuman')    
<!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2>Makanan di <a href="/kategori" class="text-black">"Minuman"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->


<!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/es jeruk.jpg" alt="es jeruk" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Es Jeruk</h4>
                    <p class="food-price">Rp 10.000,00</p>
                    <p class="food-detail">
                        Dibuat menggunakan jeruk yang diperas
                    </p>
                    <br>

                    <a href="/order" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/essoklat.jpg" alt="es coklat" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Es Coklat</h4>
                    <p class="food-price">Rp 10.000,00</p>
                    <p class="food-detail">
                        Dibuat menggunakan coklat pilihan
                    </p>
                    <br>

                    <a href="/order" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/Sweet Tea.jpeg.jpg" alt="es coklat" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Es Teh Manis</h4>
                    <p class="food-price">Rp 10.000,00</p>
                    <p class="food-detail">
                        Dibuat dengan teh pilihan
                    </p>
                    <br>

                    <a href="/order" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/lemontea.jpg" alt="minuman" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Es Teh Lemon</h4>
                    <p class="food-price">Rp 10.000,00</p>
                    <p class="food-detail">
                        Dibuat dengan lemon manis
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