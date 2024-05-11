@extends('tema.main')

@section('home')
<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Mau Cari Apa..." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center"><Menu>Jelajahi Menu Kami</Menu></h2>

            <a href="category-foods.html">
            <div class="box-3 float-container">
                <img src="gambar/rendang1.jpeg" alt="Makanan" class="img-responsive img-curve">

                <h3 class="float-text text-white">Makanan</h3>
            </div>
            </a>

            <a href="category-minuman.html">
            <div class="box-3 float-container">
                <img src="gambar/coklat.jpg" alt="Minuman" class="img-responsive img-curve">

                <h3 class="float-text text-white">Minuman</h3>
            </div>
            </a>

            <a href="category-tambahan.html">
            <div class="box-3 float-container">
                <img src="gambar/perkedel.jpg" alt="Tambahan" class="img-responsive img-curve">

                <h3 class="float-text text-white">Tambahan</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Menu - Menu Favorit</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/Ayam Goreng Kuning Serundeng  by Meat Gong.jpeg.jpg" alt="Ayam Serundeng" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Ayam Serundeng</h4>
                    <p class="food-price">Rp 8.000,00</p>
                    <p class="food-detail">
                        Ayam Goreng Kuning dengan bumbu Serundeng
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
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
                        Telur yang dimasak dengan bumbu balado
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/rendang.jpeg" alt="Rendang" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Rendang</h4>
                    <p class="food-price">Rp 10.000,00</p>
                    <p class="food-detail">
                        Dibuat menggunakan daging sapi yang dibumbui
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/tahu.jpeg" alt="perkedel" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Tahu Goreng</h4>
                    <p class="food-price">Rp 3.000,00</p>
                    <p class="food-detail">
                        Olahan kedelai goreng
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/Resep Perkedel Kentang Sederhana.jpeg.jpg" alt="" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Perkedel Kentang</h4>
                    <p class="food-price">Rp 3.000,00</p>
                    <p class="food-detail">
                        Olahan Kentang yang digoreng
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="gambar/hati.jpeg" alt="" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Hati Ayam</h4>
                    <p class="food-price">Rp 5.000,00</p>
                    <p class="food-detail">
                        Hati Ayam yang dimasak
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>
        </div>
    </section>
    <!-- fOOD Menu Section Ends Here -->
@endsection