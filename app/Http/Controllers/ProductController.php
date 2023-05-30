<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // echo "Hi masuk controller product dengan index";

        //untuk query dengan RAW
        // $queryModel = DB::select(DB::raw("select * from products p inner join categories c on p.category_id=c.id inner join suppliers s on p.supplier_id=s.id"));
        //$queryModel = DB::select(DB::raw("select * from products));
        // dd($queryRaw);

        //untuk query builder
        // $queryModel = DB::table('products')->get();
        // dd($queryBuilder);

        // foreach($queryRaw as $d){
        //     echo $d->name.'-'.$d->category_id;
        // }

        // //untuk query dengan model
        $queryModel = Product::all();
        // $sortedData = $data->sortBy('price');
        $title='Web Framework';
        // dd($queryModel);
        // foreach($queryModel as $d){
        //     echo $d->name.'-'.$d->category_id;
        // }

        return view('product.index', compact('queryModel','title'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataCategory = Category::all();
        return view('product.add',compact('dataCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  new Product();
        $data->name = $request->get('productName');
        $data->harga_jual = $request->get('productPrice');
        $data->harga_produksi = $request->get('productCost');
        $data->stok = $request->get('productStock');
        $data->category_id = 2;
        $data->supplier_id = 2;
        $data->save();
        return back()->with('status','Data sukses tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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

        return view('product.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getByCategory($id){
        $listOfProduct = Product::query()->get()->where('category_id',$id);
        return view('home',compact(['listOfProduct','id']));
    }

    public function showInfo()
    {
        // return response()->json(array(
        //     'status'=>'oke',
        //     'msg'=>"<div class='alert alert-info'>
        //             Did you know? <br>This message is sent by a Controller.'</div>"
        // ),200);

        $result=Product::orderBy('harga_jual','DESC')->first();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>"<div class='alert alert-info'>
            Did you know? <br>The most expensive product is ". $result->name . "</div>"
        ),200);
    }
}
