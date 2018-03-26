@extends('index')


@section('content')
    <div class="col-10">
        <div class="container">
            <div class="row">
                <div class="card col-4" style="width: 18rem; margin: 10px;">
                    <img class="card-img-top" src="{{ asset("$product->image") }}." alt="Card image cap"
                         style="width: 50%; align-self: center; margin: 5px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="#" class="btn btn-success">купить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach($relations as $relation)
                <div class="card col-2" style="width: 18rem; margin: 10px;">
                    <img class="card-img-top" src="{{ asset("$relation->image") }}." alt="Card image cap"
                         style="width: 50%; align-self: center; margin: 5px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $relation->name }}</h5>
                        <a href="{{ route('OneProcessor', ['id' => $relation->id]) }}" class="btn btn-primary">открыть</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection