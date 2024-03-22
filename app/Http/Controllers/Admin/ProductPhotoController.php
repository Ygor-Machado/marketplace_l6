<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProductPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductPhotoController extends Controller
{

    public function removePhoto(Request $request, $photoId)
    {
        $photo = ProductPhoto::find($photoId);

        if (!$photo) {
            flash('Foto não encontrada')->error();
            return redirect()->back();
        }

        $photoName = $photo->image;

        if (Storage::disk('public')->exists($photoName)) {
            Storage::disk('public')->delete($photoName);
        }

        $productId = $photo->product_id;

        $photo->delete();

        flash('Imagem removida com sucesso')->success();
        return redirect()->route('admin.products.edit', ['product' => $productId]);
    }

}
