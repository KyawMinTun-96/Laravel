<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InsertProduct;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertProduct $request)
    {

        $file = $request->file('img');
        $fileArry = [];

        /*====================Multiple File Upload=====================*/
        if(!empty($file)) {

            foreach($file as $img) {

                //echo $img->getClientOriginalName() . "<br/>";
                $filename = uniqid() . '_' . $img->getClientOriginalName();
                array_push($fileArry, $filename);
                $img->move(public_path() . '/uploads/', $filename);


            }

            // foreach($fileArry as $value) {
            //     echo $value . "<br/>";
            // }

            Product::create([
                'title'=>$request->get('title'),
                'content'=>$request->get('description'),
                'images'=>serialize($fileArry),
                'price'=>$request->get('price'),
            ]);

            return redirect('/products/create')->with('status', "Successfully Inserted Data!");

        }
        


        /*====================Single File Upload=====================*/
        /*--------Store in Storage---------*/
        //Storage::put('uploads/'.$file->getClientOriginalName(), file_get_contents($file));//stroe uploads in Storage Folder
        //Storage::put($file->getClientOriginalName(), file_get_contents($file));//stroe in Store Folder


        /*--------Store in Public---------*/
        //$file->move(public_path().'/uploads/', $file->getClientOriginalName());
        // $filename = uniqid().'_'.$file->getClientOriginalName();
        // $file->move(public_path() . '/uploads/', $filename);

        // Product::create([
        //     'title'=>$request->get('title'),
        //     'content'=>$request->get('description'),
        //     'images'=>$filename,
        //     'price'=>$request->get('price'),
        // ]);

        // return redirect('/products/create')->with('status', "Successfully Inserted Data!");





        // echo $file->getClientOriginalName();
        //return $request->all();
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
}
