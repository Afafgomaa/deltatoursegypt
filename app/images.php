<?php


namespace App\Models;
namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class images extends Model implements HasMedia
{
    use HasMediaTrait;

    public function registerMediaCollections()
{
    $this->addMediaCollection('tour');
        //add options
      

}
}
