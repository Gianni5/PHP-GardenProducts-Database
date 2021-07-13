<?php


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Product $products
     * @return \Illuminate\Http\JsonResponse
     */

    public function show(Product $product)
    {
        //use Route-Model binding to find the product required
        return response()->json($product, 200);
    }

    public function store(Request $request)
    {
        $this ->validate(
            $request,
            [

                'products_name'=>'required|max:32',
                'category_id'=>'required',
                'products_price'=>'required'

            ]
        );

        $products = Product::create($request->all());

        return response()->json($products, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Product $products
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Product $product)
    {
        $this ->validate(
            $request,
            [
                'products_name'=>'required|max:32',
                'category_id'=>'required',
                'products_price'=>'required'

            ]
        );
        $product->update ($request->all());
        return response()->json($product, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $products)
    {
        $products->delete();
        return response()->json(null, 204);
    }

}
