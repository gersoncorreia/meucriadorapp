<?php 

namespace App\Traits;

use Illuminate\Http\Request;

trait UploadTrait {

	private function imageUpload(Request $request, $paste = null){

		$images = $request->file('photo');

		foreach ($images as $image) {
			$uploadImages[] = ['image_path' => $image->store($paste, 'public')];
		}

		return $uploadImages;
	}

}
