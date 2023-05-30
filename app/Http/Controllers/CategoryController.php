<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $queryModel = DB::select(DB::raw("select * from categories"));
        // $queryModel = Category::all();
        // $queryModel = DB::table('categories')->get();

        return view('category.index', compact('queryModel'));
        //return view('category.index',['cats'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    // public function showProduct($category_id){
    //     $data = Category::find($category_id);
    //     $numberOfData=$data->product;
    //     return view('category.listproduct',compact('data','numberOfData'));
    // }

    public function showProducts()
    {
        $cat=Category::find($_POST['category_id']);
        $nama=$cat->name;
        $data=$cat->products;
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('category.showProducts',compact('nama','data'))->render()
        ),200);
    }

    public static function getAllAsData(){
        return DB::select(DB::raw("select * from categories"));
    }
}
