@extends('layouts.app')

@section('title', 'Ver Producto')

@section('content')
    <h1>{{ $product->name }}</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $product->id }}</p>
            <p><strong>Descripción:</strong> {{ $product->description ?? 'N/A' }}</p>
            <p><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
            <p><strong>Stock:</strong> {{ $product->stock }}</p>
            <p><strong>Creado:</strong> {{ $product->created_at->format('d/m/Y H:i') }}</p>
            <p><strong>Actualizado:</strong> {{ $product->updated_at->format('d/m/Y H:i') }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection