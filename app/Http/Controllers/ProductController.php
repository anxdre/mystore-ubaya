<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        $listOfProduct = Product::query()->get()->where('supplier_id', $userId);
        return view('product.index', compact('listOfProduct'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer', 'max:255'],
            'stock' => ['required', 'integer', 'max:255',]
        ]);


        $data = new Product();
        $data->name = $request->get('title');
        $data->harga_jual = $request->get('price');
        $data->harga_produksi = $request->get('price');
        $data->stok = $request->get('stock');
        $data->category_id = $request->get('category');
        $data->supplier_id = Auth::id();
        $data->save();
        return back()->with('status', 'Data sukses tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //echo "masuk ke controller product mengambil product berid $id pada fungsi show";

        $data = Product::find($id);

        //you can use dd function to var_dump(), stop execution
        // and inspect the value of your object
        // dd($data);

        // $objProduk = DB::table('products')
        //                 ->where('id',$id)
        //                 ->first();

        return view('product.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getByCategory($id)
    {
        $listOfProduct = Product::query()->orderBy('created_at','DESC')->where('category_id', $id)->get();
        return view('home', compact(['listOfProduct', 'id']));
    }

    public function showInfo()
    {
        // return response()->json(array(
        //     'status'=>'oke',
        //     'msg'=>"<div class='alert alert-info'>
        //             Did you know? <br>This message is sent by a Controller.'</div>"
        // ),200);

        $result = Product::orderBy('harga_jual', 'DESC')->first();
        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
            Did you know? <br>The most expensive product is " . $result->name . "</div>"
        ), 200);
    }
}
