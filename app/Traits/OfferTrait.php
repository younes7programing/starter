<?php

namespace App\Traits;

Trait OfferTrait
{


    protected function saveImage($requestPhoto, $path)
    {
        //save photo in folder
        $fileExtention = $requestPhoto->getClientOriginalName();
        $fileName = time() . '.' . $fileExtention;
        $requestPhoto->move($path, $fileName);

        return $fileName;

    }


}
