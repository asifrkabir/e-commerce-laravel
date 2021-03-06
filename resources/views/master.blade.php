<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .custom-login {
            height: 500px;
            padding-top: 100px;
        }

        .slider-img{
            object-fit: contain;
            height: 400px !important;
        }

        .custom-product{
            height: 600px;
        }

        .slider-text{
            background-color: rgba(53, 65, 53, 0.35) !important;
        }

        .trending-image{
            height: 100px;
        }

        .trending-item{
            float: left;
            width: 20%;
        }

        .trending-wrapper{
            margin: 30px;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    @include('header')

    @yield('content')

    @include('footer')



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- <script>
        $(document).ready(function(){
            $("button").click(function(){
                alert("All Set")
            })
        })
    </script> --}}

</body>

</html>