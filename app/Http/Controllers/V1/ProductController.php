<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
    }
    // public function add_product()
    // {
    //     $data = ['title' => 'Product Add'];
    //     return view('admin.product.add-product', $data);
    // }

    // public function get_products()
    // {
    //     $data = ['title' => 'Products'];
    //     return view('admin.product.get-products', $data);
    // }
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Product::orderBy('id', 'desc')->paginate(5);
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('roles.admin.components.product.index', ["msg" => "Admin role"], compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('roles.admin.components.product.create', ["msg" => "Admin role"]);
    }
    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'quantity' => 'nullable',
            'sub_category' => 'nullable',
            'alert_quantity' => 'nullable',
            'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $image_path = $request->file('picture')->store('picture', 'public');
        // Product::create($request->post());
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'sub_category' => $request->sub_category,
            'alert_quantity' => $request->alert_quantity,
            'picture' => $image_path,
        ]);


        return redirect()->route('admin.product')->with('success', 'Product has been created successfully.');
    }
    /**
     * Display the specified resource.
     *
     */
    public function show(Product $product)
    {
        return view('roles.admin.components.product.show', compact('product'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Product $product)
    {
        return view('roles.admin.components.product.edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'picture' => 'required',
            'category' => 'required',
            'quantity' => 'nullable',
            'sub_category' => 'nullable',
            'alert_quantity' => 'nullable',
        ]);

        $product->fill($request->post())->save();

        return redirect()->route('products.index')->with('success', 'Product Has Been updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product has been deleted successfully');
    }
}
