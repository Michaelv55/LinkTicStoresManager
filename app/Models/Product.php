<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use SplFileInfo;

class Product extends Model
{
    use HasFactory;

    protected $appends = ['stringImage'];

    protected $hidden = ['image'];

    public function getStringImageAttribute(){
        if(file_exists($this->image)){
            return 'data:'.mime_content_type($this->image).';base64,'.base64_encode(file_get_contents($this->image));
        }
        return '';
    }
}