<?php

if(!function_exists("imageHandling")){
    
    function imageHandling($image){
        $destination_path='public/images';
        $image_name=$image->getClientOriginalName();
        $path=$image->storeAs($destination_path,$image_name);

        return $image_name;
}
}

if(!function_exists("UpdateImage"))
{
    function UpdateImage($image, $previousImage)
    {

        $path = 'public/images';
        $filename = $image->getClientOriginalName();
        //echo $filename;

        if(Storage::url($previousImage))
        {
            $a='http://127.0.0.1:8000'.Storage::url($previousImage);
           @unlink($a);
    

          // @unlink($a);
          // @unlink($a);
           // echo"if being executed".(Storage::url($previousImage))."\n";
          //@unlink((Storage::url($previousImage)));
          //echo  "delete being executed".Storage::delete($previousImage);
        }
        $image->storeAs($path, $filename);
        return $filename;
    }
}