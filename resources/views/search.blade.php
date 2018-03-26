@extends('index')


@section('content')
    <div class="col-10">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 style="text-align: center">

                        {{ $msg }}</h2>
                </div>
                @if($products->isEmpty())
                    <div class="col-12">
                        <h6 style="text-align: center">
                            Извините совпадений по вашему запросу не найдено.
                        </h6>
                    </div>
                @else
                    @foreach($products as $product)
                        <div class="card col" style="width: 18rem; margin: 10px;">
                            <img class="card-img-top" src="{{ asset("$product->image") }}." alt="Card image cap"
                                 style="width: 50%; align-self: center; margin: 5px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="{{ route('OneProcessor', ['id' => $product->id]) }}" class="btn btn-primary">открыть</a>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
@endsection