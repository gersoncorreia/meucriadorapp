<?php

namespace App\Http\Controllers\Panel\Stores;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Traits\UploadTrait;

class StoresController extends Controller
{
	use UploadTrait;
	public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
		$storesData = Store::with('image')->get();
		
		return view('panel.stores.index', compact('storesData'));
    }


    public function create(){
        return view('panel.stores.create');
    }


    public function store(Request $request){

		$local = 'stores';
        $data = $request->all();

		$upadteImg =  $this->imageUpload($request, $local);
	
		$user = User::find($data['userID']);

		$stores = $user->store()->create([
			'id' => Uuid::uuid4(),
			'name' => $data['name'],
			'description' => $data['description'],
			'slug' => $data['slug']
		]);

		foreach ($upadteImg as $u) {
			$imageSave = $stores->image()->create([
				'image_path' => $u['image_path']
			]);
		}

		return redirect()->route('panel.stores.index');
    }


    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
