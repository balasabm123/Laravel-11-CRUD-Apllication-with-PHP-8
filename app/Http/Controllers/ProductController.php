<?php
//Tutorial link :  https://www.youtube.com/watch?v=_LA9QsgJ0bw
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        $products = product::all();
        // $data['getRecords']=product::getRecordUser();
        // $products = $data['getRecords'];
        return view('products.index',['products'=>$products]);
    }

    public function create(){
        return view('products.create');
    } 

    public function store(Request $request){ 
        $data = $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'price'=>'required|decimal:0,2',
            'description'=>'required'
        ]); 
        $newProduct = Product::create($data); 
        return redirect(route('product.index'))->with('success',"Product Succesfully added"); 
    }

    public function edit($id){ 
        $data['getRecord']= Product::find($id); 
        $data['id'] = $data['getRecord']->getAttribute('id');
        $data['name'] = $data['getRecord']->getAttribute('name');
        $data['qty'] = $data['getRecord']->getAttribute('qty');
        $data['price'] = $data['getRecord']->getAttribute('price');
        $data['description'] = $data['getRecord']->getAttribute('description'); 
        return view('products.edit',['getRecord'=>$data]); 
    }

    public function update($id, Request $request){  
          $data = $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'price'=>'required|decimal:0,2',
            'description'=>'required'
        ]); 
        $save = Product::getSingle($id); 
        $save->name         = trim($request->name);
        $save->qty         = trim($request->qty); 
        $save->price       = trim($request->price);
        $save->description       = trim($request->description);
        $save->save();
        return redirect(route('product.index'))->with('success',"Product Succesfully Updated"); 
    }
    public function delete($id){ 
        $save = Product::getSingle($id);
        $save->delete();
        return redirect(route('product.index'))->with('delete',"Product Succesfully Deleted"); 

    }
}
