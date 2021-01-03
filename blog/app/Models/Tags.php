<?php


namespace App\Models;

use Illuminate\Support\Collection;

class Tags extends BaseModel
{
    /**
     * 声明表名
     *
     * Articles constructor.
     */
    public function __construct()
    {
        parent::__construct('tags');
    }

    /**
     * 文章Tags列表
     *
     * @return array
     */
    public function articlesTags()
    {
        return $this->getDb()->join('article_tags', 'tags.id', '=', 'article_tags.tag_id')->get()->toArray();
    }

    /**
     * Tags列表
     *
     * @return Collection
     */
    public function tags()
    {
        return $this->getDb()->get();
    }
}
