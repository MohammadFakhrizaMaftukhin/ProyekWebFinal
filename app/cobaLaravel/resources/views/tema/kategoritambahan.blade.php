@extends('tema.main')

@section('kategoritambahan')
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2>Makanan di <a href="/kategori" class="text-black">"Tambahan"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/perkedel.jpg" alt="perkedel" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Perkedel Kentang</h4>
                    <p class="food-price">Rp 3.000,00</p>
                    <p class="food-detail">
                        Dibuat dari Kentang yang diolah dan digoreng
                    </p>
                    <br>

                    <a href="/order" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/tempe.jpg" alt="perkedel" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Tempe Goreng</h4>
                    <p class="food-price">Rp 3.000,00</p>
                    <p class="food-detail">
                        Dibuat dari Kedelai yang diolah
                    </p>
                    <br>

                    <a href="/order" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/kerupuk.jpeg" alt="perkedel" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Kerupuk</h4>
                    <p class="food-price">Rp 3.000,00</p>
                    <p class="food-detail">
                        Dibuat dari tepung tapioka
                    </p>
                    <br>

                    <a href="/order" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/Bakwan Sayur.jpeg" alt="perkedel" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Bakwan Jagung</h4>
                    <p class="food-price">Rp 3.000,00</p>
                    <p class="food-detail">
                        Dibuat dari olahan jagung
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