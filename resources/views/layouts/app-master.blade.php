<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Fixed top navbar example · Bootstrap v5.1</title>

    <!--  Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media(min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .border-product-name {
            width: 230px;
            height: 70px;
            /* border: 2px solid white; */
            text-align: center;
            color: black;
        }

        .product-name a {
            text-decoration: none;
            color: black;
            font-weight: 700;
        }

        .product-name a h5 {
            font-size: 15px;
            transition: color .4s ease;
            line-height: 25px;
        }

        .product-name a:hover h5 {
            color: rgb(172, 173, 173);
        }

        .caption-stock-price {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            flex-direction: row;
            margin-top: 5px;
        }

        .border-text-addtocart {
            /* border: 2px solid white; */
            /* background-color: #FBE171; */
            margin-bottom: 50px;
            border-radius: 10px;
        }


        .decorate-btn a {
            text-decoration: none;
            color: rgb(255, 169, 15);
            font-weight: 700;
        }

        .decorate-btn a b {
            font-size: 15px;
            transition: color .4s ease;
            line-height: 25px;
        }

        .decorate-btn a:hover b {
            color: rgb(111, 181, 96);
        }

        .setcolor a b{
            color: rgb(255, 169, 15);
        }

        .yellowtext b{
            color: rgb(255, 169, 15);
        }

        .yellowtext1 b{
            color: rgb(255, 169, 15);
        }

        
        .addprofile a:hover b {
            color: rgb(255, 128, 0);
        }
        .navbar-deco:hover{
            transform: scale(1.05);
        }  

    </style>

    <!--Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
</head>

<body>


    @include('layouts.partials.navbar')

    <main class="container">
        @yield('content')
    </main>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
</body>

</html>