<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Toko Knick Knacks | {{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @if ($title == "Home")
        <link rel="stylesheet" href="css/style-home.css">
    @endif
    @if ($title == "Product")
        <link rel="stylesheet" href="css/style-product.css">
    @endif
</head>
<body>
    @include("partials.navbar")
    @yield("content")
</body>
</html>
