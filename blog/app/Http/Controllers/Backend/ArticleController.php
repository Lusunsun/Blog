<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BaseController;
use App\Http\Requests\ArticleRequest;
use App\Services\HomeService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ArticleController extends BaseController
{
    /**
     * 创建文章
     */
    public function createArticleForm()
    {
        return view('Backend.createArticle');
    }

    /**
     * 后台文章列表
     *
     * @param ArticleRequest $request
     * @return Factory|View
     * @throws Exception
     */
    public function index(ArticleRequest $request)
    {
        $articles = $this->getHomeService()->getIndexArticle($request->validated());

        return view('Backend.index', compact('articles'));
    }

    /**
     * 文章详情
     *
     * @param $articleId
     * @return Factory|View
     * @throws Exception
     */
    public function articleDetail($articleId)
    {
        $articleDetail = $this->getHomeService()->getArticleDetail($articleId);

        if (empty($articleDetail)) {
            throw new Exception('未找到该篇文章');
        }

        // 将tag改为字符串
        $articleDetail->tag_name = implode(',', $articleDetail->tag_name);

//        dd($articleDetail);
        return view('Backend.article', compact('articleDetail'));
    }

    /**
     * 修改文章
     */
    public function updateDetail()
    {

    }

    /**
     * 根据类名映射获取当前controller对应service
     *
     * @return HomeService
     */
    public function getHomeService()
    {
        return parent::getServiceInstance('HomeController');
    }
}
