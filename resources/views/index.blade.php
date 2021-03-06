<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Product</title>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between ">
    <a class="navbar-brand" href="{{ route('main') }}">Products</a>
    <form class="form-inline" method="post" action="{{route('search')}}">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search_data" required>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

</nav>
<div class="container-fluid ">
    <div class="row">
        <div class="col-2">
            <div class="list-group" id="list-tab" role="tablist" style="margin-bottom: 30px;">
                @foreach($categories as $category)
                    <a class="list-group-item list-group-item-action" id="list-home-list"
                       href="{{ route($category->slug, ['id' => $category->id]) }}" role="tab"
                       aria-controls="home">{{ $category->name }}</a>
                @endforeach
            </div>
            @yield('checkbox')
        </div>

            @yield('content')

    </div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>