<?php

namespace SDA;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sd_blog';

    /**
     * Get the author that owns the blog.
     */
    public function author()
    {
        return $this->belongsTo('SDA\User','user_id');
    }
}
