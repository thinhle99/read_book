<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   
    protected $fillable = [
    	'title_post', 'image_post','book_post', 'content_post','summary_post','id_category','status_post'
    ];
    protected $primaryKey = 'id_post';
 	protected $table = 'post';

 	public function category(){
 		return $this->belongsTo('App\Category','id_category');
 	}
}
