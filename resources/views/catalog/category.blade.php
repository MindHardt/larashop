@extends('layout.site', ['title' => $category->name])

@section('content')
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->content }}</p>
    <div class="row">
        @foreach ($category->children as $child)
            @include('catalog.part.category', ['category' => $child])
        @endforeach
    </div>
    <div class="row">
        @foreach ($products as $product)
            @include('catalog.part.product', ['product' => $product])
        @endforeach
    </div>
    {{ $products->links() }}
@endsection
