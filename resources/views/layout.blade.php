<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraCrud with Laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .mt50 {
            margin-top: 50px;
        }
        .mt20 {
            margin-top: 20px;
        }
        .mb20 {
            margin-bottom: 20px;
        }
        .mb50 {
            margin-bottom: 50px;
        }
        .formdi {
            display: inline-block;
        }
    </style>
@yield('header')

</head>

<body>

<div class="container mt50">
    @yield('main-content')
</div>

@yield('footer')
</body>
</html>
