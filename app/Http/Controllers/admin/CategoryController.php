<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;
use App\Classes\Helper;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.category.';
        $this->viewnamespace='panel/category';
    }
    public function index()
    {
        $categorys = Category::all();
        return view($this->viewprefix.'index')->with('cate', $categorys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->viewprefix.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Category = new Category();
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);
        // $request->image = $this->imageUpload($request);
        $Category->name = $request->name;
       // $Category->image = $this->imageUpload($request);
        $Category->image = Helper::imageUpload($request);
        $Category->description = $request->description;
        $Category->content = $request->content;
        if($Category->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view($this->viewprefix.'edit')->with('category', $category);
        // return view($this->viewprefix.'edit',compact('product'));
    }
    public function update(Request $request, Category $Category)
    {
        $data=$request->validate([
            'name' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);
        $data['image'] = $this->imageUpload($request);
        if($Category->update($data))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('category.index');
    }
    public function destroy(Category $Category)
    {
        if($Category->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('category.index');
    }
    public function productlist($id){
        $products = Category::find($id)->product;
        return view('admin.category.productlist', compact('products'));
    }

    
}
