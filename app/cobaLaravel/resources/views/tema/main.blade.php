<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Makan Padang</title>

    <!-- Link CSS file -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    @include('tema._nav')
    <!-- Navbar Section Ends Here -->

    <!-- Home section start here -->
    @yield('home')
    <!-- Home section end here -->

    <!-- Home section start here -->
    @yield('kategori')
    <!-- Home section end here -->

    <!-- Home section start here -->
    @yield('makanan')
    <!-- Home section end here -->

    <!-- Footer section start here -->
    @include('tema._footer')
    <!-- Footer section end here -->

</body>
</html>