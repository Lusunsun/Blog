<?php


namespace App\Services;

use App\Models\Tags;
use Exception;
use Illuminate\Support\Collection;

class TagsService extends BaseService
{
    /**
     * 文章Tags列表
     */
    public function articlesTags()
    {
        $data = [];

        $tags = $this->getTagsModel()->articlesTags();

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
     * Tags列表
     *
     * @return Collection
     * @throws Exception
     */
    public function tags()
    {
        return $this->getTagsModel()->tags();
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
