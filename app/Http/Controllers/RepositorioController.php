<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RepositorioController extends Controller
{
    protected $request;
    private $repository;
    public function __construct(Request $request,Product $product)
    {
    //    dd($request->prml);
        $this->request = $request; 
        $this->repository = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.pages.pdf');

        $products = Product::paginate();
        return view('admin.pages.sistemas_internet.index', [
            'products' => $products
        ] );
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.sistemas_internet.create');
    }

     /**
      * Store a newly created resource in storage.
      *
     * @param  \App\Http\Requests\StoreUpdateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {
       $data = $request->only('name','description','price');
       if($request->hasFile('image') && $request->image->isValid()){
            $imagePath = $request->image->store('products');

            $data['image'] = $imagePath;
        } 
       
       $this->repository->create($data);
        return redirect()->route('sistemas_internet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$product = $this->repository->find($id))
            return redirect()->back();
        // $product = Product::where('id',$id)->first();
        // return "Detalhes do produto {$id}";
        return view('admin.pages.sistemas_internet.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$product = $this->repository->find($id))
        return redirect()->back();
        return view('admin.pages.sistemas_internet.edit', compact('product'));
    }
    public function ler_PDF(){
        dd("OK");
        return view('admin.pages.pdf');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param App\Http\Requests\StoreUpdateProductRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateProductRequest $request, $id)
    { 
        if(!$product = $this->repository->find($id))
            return redirect()->back();
            $data = $request->all();
            if($request->hasFile('image') && $request->image->isValid()){
                
                if($product->image && Storage::exists($product->image)){
                  Storage::delete($product->image);  
                }

                $imagePath = $request->image->store('products');
    
                $data['image'] = $imagePath;
            } 
        $product->update($data);    
        return redirect()->route('products.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->repository->where('id',$id)->first();
        if(!$product)
            return redirect()->back();
        if($product->image && Storage::exists($product->image)){
            Storage::delete($product->image);  
        }
        $product->delete();
        return redirect()->route('products.index');
    }
    public function search(Request $request)
    {
        $filters = $request->except('_token');
        $products = $this->repository->search($request->filter);
        return view('admin.pages.sistemas_internet.index', [
            'products' => $products,
            'filters' => $filters
        ] );
    }

}
