<?php

namespace App\Http\Controllers\Panel\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class ProductController extends Controller
{
	use UploadTrait;
	public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
		$id = $request->all();
		$products = Product::with('image')->get();
		
		return view('panel.products.index', compact('products'));
    }

    public function create()
    {
        return view('panel.products.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
		$user = User::find($data['userID']);
		$stores = $user->store;

		$upadteImg =  $this->imageUpload($request, 'product');
		$product = $stores->products()->create([
			'id' => Uuid::uuid4(),
			'name' => $data['name'],
			'description' => $data['description'],
			'price' => $data['price'],
			'slug' => $data['slug']
		]);

		foreach ($upadteImg as $u) {
			$imageSave = $product->image()->create([
				'image_path' => $u['image_path']
			]);
		}
		return redirect()->route('panel.product.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
