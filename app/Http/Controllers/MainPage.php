<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPage extends Controller
{
    private string $sImagePath = "";
    private string $sExtensions = "*.{jpg,jpeg,png,gif,bmp,webp}";
    public $sImages = "";
    public array $aImages = [];
    public array $aProfilePicture = [];

    public function getImages() {
        $this->aImages = scandir(storage_path('app/private'));
        unset($this->aImages[0]);
        unset($this->aImages[1]);
        unset($this->aImages[2]);
    }

    public function getProfilePicture() {
        $this->aProfilePicture = scandir(storage_path('app/public/pfp'));
        unset($this->aProfilePicture[0]);
        unset($this->aProfilePicture[1]);
        unset($this->aProfilePicture[2]);
    }

    public function images() {
        $this->getImages();
        $this->getProfilePicture();
        return view('main', [
            'images' => $this->aImages,
            'pfp' => $this->aProfilePicture
        ]);
    }
}
