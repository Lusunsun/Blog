<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BaseController;
use App\Http\Requests\ArticleRequest;
use App\Services\HomeService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IndexController extends BaseController
{
    public function login()
    {
        return view('Backend.login');
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
     * 创建文章
     */
    public function createArticle()
    {
        return view('Backend.createArticle');
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
     * 根据类名映射获取当前controller对应service
     *
     * @return HomeService
     */
    public function getHomeService()
    {
        return parent::getServiceInstance('HomeController');
    }
}
