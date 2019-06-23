<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Pages extends Model
{

    use softDeletes;
    protected $fillable = ['name','title', 'desc','slug', 'parent_id'];


    protected $dates = ['deleted_at']; 


    public function subPages()
    {
        return $this->hasMany('App\Pages', 'parent_id');
    }

   

    public function hasNotAnyChild($page_id)
    {
        
         foreach($this->all() as $page){
             if($page->parent_id !== $page_id){
                 return true;
             }
         }
    }
}
