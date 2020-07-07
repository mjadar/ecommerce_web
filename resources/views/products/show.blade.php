@extends('layouts.master')

@section('content')

<div class="col-md-12">
        <div class="row no-gutters p-3 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-3 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-info">
              @foreach ($product->categories as $category)
                  {{ $category->name}} {{$loop->last ? '':', '}}
              @endforeach
            </strong>
            <h3 class="mb-4">{{ $product->title }}</h3>
            <span>{!! $product-> description !!} </span>
            <p class="mb-auto">{{ $product-> subtitle }} </p>
            <strong class="mb-auto">{{ $product-> getPrice() }} </strong>

          <form action="{{ route('cart.store') }}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <button type="submit" class="btn btn-dark">Ajouter au panier</button>
            </form>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="{{asset('storage/'. $product->image) }}" alt="" style="width: 200px;height:250px;">
          </div>
        </div>
      </div>

@endsection