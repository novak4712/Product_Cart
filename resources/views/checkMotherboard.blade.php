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
    <form action="{{ route('checkMotherboard') }}" method="post">
        <div>
            <input type="checkbox" value="Asus"  name="Asus" {{ $asus_checked }}>
            <label  >
                ASUS ({{ $asus }})
            </label>
        </div>
        <div>
            <input type="checkbox" value="MSI"  name="MSI" {{ $msi_checked }}>
            <label >
                MSI ({{ $msi }})
            </label>
        </div>
        <div>
            <button  type="submit">подобрать</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
    </form>

@endsection