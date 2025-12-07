<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Mostrar todos los productos
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    // Mostrar formulario para crear producto
    public function create()
    {
        return view('products.create');
    }

    // Guardar nuevo producto
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0'
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Producto creado exitosamente.');
    }

    // Mostrar un producto específico
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Mostrar formulario para editar
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Actualizar producto
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0'
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Producto actualizado exitosamente.');
    }

    // Eliminar producto
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Producto eliminado exitosamente.');
    }
}