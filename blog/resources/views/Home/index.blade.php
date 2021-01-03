@extends('layouts.header')
@section('content')
    <div class="post-list">
        <!-- 遍历渲染文章 -->
        @foreach($articles as $article)
            <div class="post-item" title={{$article->title}}>
                <div class="time-m-d">{{$article->created_at}}</div>
                <div class="title">
                    <a href="{{ route('articleDetail', ['articleId' => $article->id]) }}">
                        <span><span title="Pinned" class="icon iconfont icon-pin-top post-top"></span>{{$article->title}}</span>
                    </a>
                </div>
            </div>
        @endforeach


        <div class="post-item" title="Hello World">
            <div class="time-m-d">2020-03-11</div>
            <div class="title">
                <a href="https://hexo.theme.oranges.zcheng.site/hello-world.html">


                    <span><span title="Pinned" class="icon iconfont icon-pin-top post-top"></span>Hello World</span>


                </a>
            </div>
        </div>

        <div class="post-item" title="极简主义主题 - Oranges">
            <div class="time-m-d">2020-04-18</div>
            <div class="title">
                <a href="https://hexo.theme.oranges.zcheng.site/minimalist-theme-oranges.html">


                    <span>极简主义主题 - Oranges</span>


                </a>
            </div>
        </div>

        <div class="post-item" title="long-catalog-test">
            <div class="time-m-d">2020-03-10</div>
            <div class="title">
                <a href="https://hexo.theme.oranges.zcheng.site/long-catalog-test.html">


                    <span>long-catalog-test</span>


                </a>
            </div>
        </div>

        <div class="post-item" title="Code Highlight Style test">
            <div class="time-m-d">2019-07-25</div>
            <div class="title">
                <a href="https://hexo.theme.oranges.zcheng.site/code-highlight.html">


                    <span>Code Highlight Style test</span>


                </a>
            </div>
        </div>

        <div class="post-item" title="Vue transition 折叠类动画自动获取隐藏层高度以及手风琴效果实现">
            <div class="time-m-d">2019-07-13</div>
            <div class="title">
                <a href="https://hexo.theme.oranges.zcheng.site/vue-transition.html">


                    <span>Vue transition 折叠类动画自动获取隐藏层高度以及手风琴效果实现</span>


                </a>
            </div>
        </div>

        <div class="post-item" title="Markdown Style test">
            <div class="time-m-d">2018-07-24</div>
            <div class="title">
                <a href="https://hexo.theme.oranges.zcheng.site/markdown.html">


                    <span>Markdown Style test</span>


                </a>
            </div>
        </div>

        <div class="post-item" title="Click on the image for details">
            <div class="time-m-d">2013-12-26</div>
            <div class="title">
                <a href="https://hexo.theme.oranges.zcheng.site/images.html">


                    <span>Click on the image for details</span>


                </a>
            </div>
        </div>

        <div class="post-item" title="">
            <div class="time-m-d">2013-12-25</div>
            <div class="title">
                <a href="https://hexo.theme.oranges.zcheng.site/no-title.html">

                    <span>untitled</span>

                </a>
            </div>
        </div>

        <div class="post-item" title="Excerpts">
            <div class="time-m-d">2013-12-25</div>
            <div class="title">
                <a href="https://hexo.theme.oranges.zcheng.site/excerpts.html">


                    <span>Excerpts</span>


                </a>
            </div>
        </div>

        <div class="post-item" title="Test the video playback plug-in">
            <div class="time-m-d">2013-12-25</div>
            <div class="title">
                <a href="https://hexo.theme.oranges.zcheng.site/videos.html">


                    <span>Test the video playback plug-in</span>


                </a>
            </div>
        </div>

    </div>
@endsection

