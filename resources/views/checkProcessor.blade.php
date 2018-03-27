@extends('index')

@section('content')
    <div class="col-10">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="card col" style="width: 18rem; margin: 10px;">
                        <img class="card-img-top" src="{{ asset("$product->image") }}." alt="Card image cap"
                             style="width: 50%; align-self: center; margin: 5px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <a href="{{ route('OneItem', ['id' => $product->id]) }}" class="btn btn-primary">открыть</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
@section('checkbox')
    <h6>Фильтр:</h6>
    <form action="{{ route('checkProcessor') }}" method="post">
        <div>
            <input type="checkbox" value="AMD"  name="AMD" {{ $amd_checked }}>
            <label  >
                AMD ({{ $amd }})
            </label>
        </div>
        <div>
            <input type="checkbox" value="Intel"  name="Intel" {{ $intel_checked }}>
            <label >
                Intel ({{ $intel }})
            </label>
        </div>
        <div>
            <button  type="submit">подобрать</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
    </form>

@endsection