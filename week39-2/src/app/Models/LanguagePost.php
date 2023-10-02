<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LanguagePost
 *
 * @method static \Illuminate\Database\Eloquent\Builder|LanguagePost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LanguagePost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LanguagePost query()
 * @mixin \Eloquent
 */
class LanguagePost extends Model
{
    use HasFactory;

    protected $fillable = [
        'study_hours_post_id',
        'language_id',
        'hour',
    ];

    public function get_study_hours_posts_table()
    {
        return $this->belongsTo('App\Models\StudyHoursPost');
    }

    public function get_languages_table()
    {
        return $this->belongsTo('App\Models\Language');
    }
}
