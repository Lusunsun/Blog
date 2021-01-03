<?php


namespace App\Http\Controllers\Backend;


use App\Http\Controllers\BaseController;
use App\Services\TagsService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

class TagsController extends BaseController
{
    /**
     * Tags页面
     *
     * @return Factory|View
     */
    public function getTags()
    {
        $tags = $this->getTagsService()->articlesTags();

        return view('Home.tags', compact('tags'));
    }

    /**
     * 获取Tags数据
     *
     * @return Collection
     * @throws Exception
     */
    public function getTagsData()
    {
        return $this->getTagsService()->tags();
    }

    /**
     * 获取TagsService
     *
     * @return TagsService
     */
    public function getTagsService()
    {
        return $this->getServiceInstance(__CLASS__);
    }
}
