<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use League\CommonMark\CommonMarkConverter;
use Illuminate\Mail\Markdown;

class Post extends Model
{
    protected $guarded = [];

    /**
    * Get the Post's body as HTML
    *
    * @return \Illuminate\Support\HtmlString
    */
    public static function getBodyAttribute($value)
    {
        return Markdown::parse($value);
    }

    public function trimmedBody(){
        return substr($this->body,0,50);
    }
}
