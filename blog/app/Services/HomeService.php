<?php


namespace App\Services;

use App\Models\Articles;
use App\Models\Tags;
use Exception;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;

class HomeService extends BaseService
{
    /**
     * 文章列表
     *
     * @param array $params
     * @return Collection
     * @throws Exception
     */
    public function getIndexArticle(array $params)
    {
        $where = [];
        if (isset($params['keyWord']) && !empty($params['keyWord'])) {
            $where['title'] = ['like', $params['keyWord'] . '%'];
        }

        if (isset($params['tagId']) && !empty($params['tagId'])) {
            $where['tag_id'] = ['=', $params['tagId']];
        }

        $orderBy = 'articles.created_at';
        if (isset($params['orderBy']) && !empty($params['orderBy'])) {
            $orderBy = $params['orderBy'];
        }

        $orderByType = 'desc';
        if (isset($params['orderByType']) && !empty($params['orderByType'])) {
            $orderByType = $params['orderByType'];
        }

        $page = 1;
        if (isset($params['page']) && !empty($params['page'])) {
            $page = $params['page'];
        }

        $limit = 10;
        if (isset($params['limit']) && !empty($params['limit'])) {
            $limit = $params['limit'];
        }

        return $this->getArticleModel()->getIndexArticle($where, compact('orderBy', 'orderByType'), $page, $limit);
    }

    /**
     * 文章详情
     *
     * @param  $articleId
     * @return Builder|mixed
     * @throws Exception
     */
    public function getArticleDetail($articleId)
    {
        $articleData = $this->getArticleModel()->getArticleDetail($articleId);

        // 将tag_name分割为数组
        !empty($articleData->tag_name) && $articleData->tag_name = explode(',', $articleData->tag_name);

        return $articleData;
    }

    /**
     * 时间轴数据
     *
     * @return array
     * @throws Exception
     */
    public function archives()
    {
        $archivesData = $this->getArticleModel()->getArchives();

        $data = [];

        foreach ($archivesData as $archives) {
            $year = date('Y', strtotime($archives->created_at));

            $data[$year][] = [
                'title' => $archives->title,
                'id' => $archives->id,
                'date'  => date('m-d', strtotime($archives->created_at)),
            ];
        }

        return $data;
    }

    /**
     * Tags列表
     */
    public function tags()
    {
        $data = [];

        $tags = $this->getTagsModel()->getTags();

        $tagIdCountArr = array_count_values(array_column($tags, 'tag_id'));

        foreach ($tags as $key => $tag) {
            if (!in_array($tag->tag_id, array_column($data, 'tag_id'))) {
                $data[$key] = [
                    'tag_id' => $tag->tag_id,
                    'tag_name' => $tag->tag_name,
                    'count' => $tagIdCountArr[$tag->tag_id]
                ];
            }
        }

        return $data;
    }

    /**
     * 获取model
     *
     * @return Articles
     * @throws Exception
     */
    private function getArticleModel() : Articles
    {
        return $this->getModelInstance('Articles');
    }

    /**
     * 获取model
     *
     * @return Tags
     * @throws Exception
     */
    private function getTagsModel() : Tags
    {
        return $this->getModelInstance('Tags');
    }
}
