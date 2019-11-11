<?php
require 'vendor/autoload.php';
use Intervention\Image\ImageManager as img;
spl_autoload_register(function ($class){

    require 'classes/'.$class.'.php';
});
class ImgManager
{




    /**
     * @param $image
     */
    public function formatImage($image){

        $im=new img();
        $im->make($image)->resize(500,400)->save($image,80);
          echo'ok';


     }









}