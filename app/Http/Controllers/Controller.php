<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use File;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function upload_file($img_file,$folder_name= 'products')
    {

        $image = base64_encode(file_get_contents($img_file->path()));
        return  "data:image/png;base64, " .$image;
////        dd($image);
//       $imgpath = 'storage/images/'.$folder_name;
//       File::makeDirectory($imgpath, $mode = 0777, true, true);
//       $imgDestinationPath = $imgpath.'/';
//       $file_name = time()."_".$img_file->getClientOriginalName();
//       $success = $img_file->move($imgDestinationPath, $file_name);
//       $file_name = 'images/products/'.$file_name;
//       return($file_name);
     }

     public function remove_file($filename,$folder = 'products')
    {
        if (file_exists(public_path('storage/'.$folder.'/' . $filename))) {
                    unlink(public_path('storage/'.$folder.'/' . $filename));
         }
    }
}
