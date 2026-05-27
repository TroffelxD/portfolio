<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPage extends Controller
{
    private string $sImagePath = "";
    private string $sExtensions = "*.{jpg,jpeg,png,gif,bmp,webp}";
    public $sImages = "";
    public array $aImages = [];

    public function getImages() {
        $this->aImages = scandir(storage_path('app/private'));
        unset($this->aImages[0]);
        unset($this->aImages[1]);
        unset($this->aImages[2]);
    }

    public function images() {
        $this->getImages();
        return view('main', [
            'images' => $this->aImages    
        ]);
    }
}
