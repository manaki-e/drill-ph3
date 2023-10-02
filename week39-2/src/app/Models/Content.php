<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Content
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Content newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Content newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Content query()
 * @mixin \Eloquent
 */
class Content extends Model
{
    use HasFactory;

    public function get_content_posts_table()
    {
        return $this->hasOne('App\Models\ContentPost');
    }
}
