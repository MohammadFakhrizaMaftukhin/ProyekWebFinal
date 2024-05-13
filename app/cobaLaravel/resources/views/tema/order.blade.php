@extends('tema.main')

@section('order')
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center" style="color: solid black;">Isi Formulir Pesanan</h2>

            <form action="" class="order">
                <fieldset>
                    <legend>Makanan Yang Dipilih</legend>

                    <div class="food-menu-img">
                        <img src="gambar/ayam.jpeg" alt="ayam" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3>Nama Makanan</h3>
                        <p class="food-price">Rp 8.000,00</p>

                        <div class="order-label">Jumlah</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Detail Pesanan</legend>
                    <div class="order-label">Nama Lengkap Pemesan</div>
                    <input type="text" name="full-name" placeholder="Ex : Aceng " class="input-responsive" required>

                    <div class="order-label">Nomor HP</div>
                    <input type="tel" name="contact" placeholder="Ex : 0812xxxxxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="Ex : aceng@gmail.com" class="input-responsive" required>

                    <div class="order-label">Alamat</div>
                    <textarea name="address" rows="10" placeholder="Ex : Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Konfirmasi Pesanan" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->
@endsection