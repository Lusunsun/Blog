<?php


namespace App\Http\Controllers;

use App\Services\HomeService;
use Exception;
use App\Http\Requests\ArticleRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends BaseController
{
    /**
     * 首页面文章列表
     *
     * @param ArticleRequest $request
     * @return Factory|View
     * @throws Exception
     */
    public function index(ArticleRequest $request)
    {
        $articles = $this->getHomeService()->getIndexArticle($request->validated());

        return view('Home.index', compact('articles'));
    }

    /**
     * 首页面文章详情
     *
     * @param Request $request
     * @return Factory|View
     * @throws Exception
     */
    public function articleDetail(Request $request)
    {
        $input = $request->all();

        $articleDetail = $this->getHomeService()->getArticleDetail($input);

        return view('Home.articleDetail', compact('articleDetail'));
    }

    /**
     * 时间轴
     *
     * @return Factory|View
     * @throws Exception
     */
    public function archives()
    {
        $archives = $this->getHomeService()->archives();

        return view('Home.archives', compact('archives'));
    }

    /**
     * Tags列表
     */
    public function tags()
    {
        $tags = $this->getHomeService()->tags();

        return view('Home.tags', compact('tags'));
    }

    /**
     * 友链页面
     */
    public function friends()
    {
        return view('Home.friends');
    }

    /**
     * 关于页面
     */
    public function about()
    {
        return view('Home.about');
    }

    /**
     * 根据类名映射获取当前controller对应service
     *
     * @return HomeService
     */
    public function getHomeService(): HomeService
    {
        return parent::getServiceInstance(__CLASS__);
    }
}
