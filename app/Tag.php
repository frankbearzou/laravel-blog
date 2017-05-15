<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tag extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public static function tagsForSideBar()
    {
        $sql = 'select t.name, count(*) count
                from post_tag pt left join tags t
                on pt.tag_id=t.id
                group by t.name
                order by count
                desc limit 10';
        $tags = DB::select($sql);
        return $tags;
    }
}
