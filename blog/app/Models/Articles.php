<?php


namespace App\Models;


use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;

class Articles extends BaseModel
{
    /**
     * 声明表名
     *
     * Articles constructor.
     */
    public function __construct()
    {
        parent::__construct('articles');
    }

    /**
     * 列表
     *
     * @param array $where
     * @param array $orderBy
     * @param int $page
     * @param int $limit
     * @return Collection
     */
    public function getIndexArticle(array $where, array $orderBy, int $page, int $limit)
    {
        $db = $this->getDb()
        ->join('article_tags', 'articles.id', '=', 'article_tags.article_id')
            ->join('tags', 'article_tags.tag_id', '=', 'tags.id');

        !empty($where) && $db->where($where);

        !empty($orderBy) && $db->orderBy($orderBy['orderBy'], $orderBy['orderByType']);

        !empty($page) && $db->offset($page - 1);

        !empty($limit) && $db->limit($limit);

        return $db->get();
    }

    /**
     * 详情
     *
     * @param $id
     * @return Builder|mixed
     */
    public function getArticleDetail($id = '')
    {
        return $this->getDb()
            ->join('article_tags', 'articles.id', '=', 'article_tags.article_id')
            ->join('tags', 'article_tags.tag_id', '=', 'tags.id')
            ->where(['articles.id' => $id])
            ->first();
    }

    public function getArchives()
    {
        return $this->getDb()->select(['created_at', 'title', 'id'])->get();
    }
}
