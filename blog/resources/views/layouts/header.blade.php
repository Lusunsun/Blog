<!DOCTYPE html>
<!-- saved from url=(0039)https://hexo.theme.oranges.zcheng.site/ -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="author" content="zchengsite, 1451426471@qq.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Oranges</title>


    <link rel="apple-touch-icon" href="https://hexo.theme.oranges.zcheng.site/images/favicon.png">
    <link rel="icon" href="https://hexo.theme.oranges.zcheng.site/images/favicon.png">


    <!-- Raleway-Font -->
    <link href="/Home/css" rel="stylesheet">

    <!-- hexo site css -->

    <link rel="stylesheet" href="/Home/base.css">
    <link rel="stylesheet" href="/Home/iconfont.css">
    <link rel="stylesheet" href="/Home/github-markdown.css">
    <link rel="stylesheet" href="/Home/highlight.css">Z


    <!-- jquery3.3.1 -->
    <script type="text/javascript" async="" src="/Home/analytics.js.下载"></script><script src="/Home/jquery.min.js.下载"></script>

    <!-- fancybox -->
    <link href="/Home/jquery.fancybox.min.css" rel="stylesheet">
    <script async="" src="/Home/jquery.fancybox.min.js.下载"></script>

    <script src="/Home/fancybox.js.下载"></script>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="/Home/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-126364107-2');
    </script>


    <!-- hexo injector head_end start -->
    <link rel="stylesheet" href="/Home/katex.min.css">

    <link rel="stylesheet" href="/Home/style.css">
    <!-- hexo injector head_end end --><meta name="generator" content="Hexo 5.2.0"><link rel="alternate" href="https://hexo.theme.oranges.zcheng.site/atom.xml" title="Oranges" type="application/atom+xml">
</head>


<body>
<div id="app">
    <div class="header">
        <div class="avatar">
            <a href="https://hexo.theme.oranges.zcheng.site/">
                <!-- 头像取消懒加载，添加no-lazy -->

                <img no-lazy="" src="/Home/avatar.png" alt="">

            </a>
            <div class="nickname"><a href="https://hexo.theme.oranges.zcheng.site/">LuSun丶s Blog</a></div>
        </div>
        <div class="navbar">
            <ul>

                <li class="nav-item active" data-path="/">
                    <a href="{{ route('index') }}">Home</a>
                </li>

                <li class="nav-item" data-path="/archives/">
                    <a href="{{ route('archives') }}">Archives</a>
                </li>

                <li class="nav-item" data-path="/tags/">
                    <a href="{{ route('tags') }}">Tags</a>
                </li>

                <li class="nav-item" data-path="/friends/">
                    <a href="{{ route('friends') }}">Friends</a>
                </li>

                <li class="nav-item" data-path="/about/">
                    <a href="{{ route('about') }}">About</a>
                </li>

            </ul>
        </div>
    </div>


    <script src="/Home/activeNav.js.下载"></script>



    <div class="flex-container">
        <div class="container index">
            @yield('content')
            <nav class="post-navigation">

                <span class="page-num">1 / 2</span>

                <a href="https://hexo.theme.oranges.zcheng.site/page/2/"><i class="iconfont icon-angleright"></i></a>

            </nav>
        </div>

        <div class="footer">
            <div class="social">
                <ul>

                    <li>
                        <a title="github" target="_blank" rel="noopener" href="https://github.com/zchengsite/hexo-theme-oranges">
                            <i class="iconfont icon-github"></i>
                        </a>
                    </li>

                    <li>
                        <a title="email" href="https://hexo.theme.oranges.zcheng.site/">
                            <i class="iconfont icon-envelope"></i>
                        </a>
                    </li>

                    <li>
                        <a title="facebook" href="https://hexo.theme.oranges.zcheng.site/">
                            <i class="iconfont icon-facebooksquare"></i>
                        </a>
                    </li>

                    <li>
                        <a title="twitter" href="https://hexo.theme.oranges.zcheng.site/">
                            <i class="iconfont icon-twitter"></i>
                        </a>
                    </li>

                    <li>
                        <a title="微信" href="https://hexo.theme.oranges.zcheng.site/">
                            <i class="iconfont icon-wechat"></i>
                        </a>
                    </li>

                    <li>
                        <a title="微博" href="https://hexo.theme.oranges.zcheng.site/">
                            <i class="iconfont icon-weibo"></i>
                        </a>
                    </li>

                    <li>
                        <a title="rss" href="https://hexo.theme.oranges.zcheng.site/atom.xml">
                            <i class="iconfont icon-rss"></i>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="footer-more">
                <a target="_blank" rel="noopener" href="https://github.com/zchengsite/hexo-theme-oranges">Copyright © Oranges 2020</a>
            </div>

            <div class="footer-more">
                <a target="_blank" rel="noopener" href="https://github.com/zchengsite/hexo-theme-oranges">Theme by Oranges | Powered by Hexo</a>
            </div>

        </div>

    </div>

    <div class="back-to-top hidden">
        <a href="javascript: void(0)">
            <i class="iconfont icon-chevronup"></i>
        </a>
    </div>


    <script src="/Home/backtotop.js.下载"></script>




    <div class="search-icon" id="search-icon">
        <a href="javascript: void(0)">
            <i class="iconfont icon-search"></i>
        </a>
    </div>

    <div class="search-overlay hidden">
        <div class="search-content" tabindex="0">
            <div class="search-title">
        <span class="search-icon-input">
          <a href="javascript: void(0)">
            <i class="iconfont icon-search"></i>
          </a>
        </span>

                <input type="text" class="search-input" id="search-input" placeholder="Search...">

                <span class="search-close-icon" id="search-close-icon">
          <a href="javascript: void(0)">
            <i class="iconfont icon-close"></i>
          </a>
        </span>
            </div>
            <div class="search-result" id="search-result"></div>
        </div>
    </div>

    <script type="text/javascript">
        var inputArea = document.querySelector("#search-input")
        var searchOverlayArea = document.querySelector(".search-overlay")

        inputArea.onclick = function() {
            getSearchFile()
            this.onclick = null
        }

        inputArea.onkeydown = function() {
            if(event.keyCode == 13)
                return false
        }

        function openOrHideSearchContent() {
            let isHidden = searchOverlayArea.classList.contains('hidden')
            if (isHidden) {
                searchOverlayArea.classList.remove('hidden')
                document.body.classList.add('hidden')
                // inputArea.focus()
            } else {
                searchOverlayArea.classList.add('hidden')
                document.body.classList.remove('hidden')
            }
        }

        function blurSearchContent(e) {
            if (e.target === searchOverlayArea) {
                openOrHideSearchContent()
            }
        }

        document.querySelector("#search-icon").addEventListener("click", openOrHideSearchContent, false)
        document.querySelector("#search-close-icon").addEventListener("click", openOrHideSearchContent, false)
        searchOverlayArea.addEventListener("click", blurSearchContent, false)

        var searchFunc = function (path, search_id, content_id) {
            'use strict';
            var $input = document.getElementById(search_id);
            var $resultContent = document.getElementById(content_id);
            $resultContent.innerHTML = "<ul><span class='local-search-empty'>First search, index file loading, please wait...<span></ul>";
            $.ajax({
                // 0x01. load xml file
                url: path,
                dataType: "xml",
                success: function (xmlResponse) {
                    // 0x02. parse xml file
                    var datas = $("entry", xmlResponse).map(function () {
                        return {
                            title: $("title", this).text(),
                            content: $("content", this).text(),
                            url: $("url", this).text()
                        };
                    }).get();
                    $resultContent.innerHTML = "";

                    $input.addEventListener('input', function () {
                        // 0x03. parse query to keywords list
                        var str = '<ul class=\"search-result-list\">';
                        var keywords = this.value.trim().toLowerCase().split(/[\s\-]+/);
                        $resultContent.innerHTML = "";
                        if (this.value.trim().length <= 0) {
                            return;
                        }
                        // 0x04. perform local searching
                        datas.forEach(function (data) {
                            var isMatch = true;
                            var content_index = [];
                            if (!data.title || data.title.trim() === '') {
                                data.title = "Untitled";
                            }
                            var orig_data_title = data.title.trim();
                            var data_title = orig_data_title.toLowerCase();
                            var orig_data_content = data.content.trim().replace(/<[^>]+>/g, "");
                            var data_content = orig_data_content.toLowerCase();
                            var data_url = data.url;
                            var index_title = -1;
                            var index_content = -1;
                            var first_occur = -1;
                            // only match artiles with not empty contents
                            if (data_content !== '') {
                                keywords.forEach(function (keyword, i) {
                                    index_title = data_title.indexOf(keyword);
                                    index_content = data_content.indexOf(keyword);

                                    if (index_title < 0 && index_content < 0) {
                                        isMatch = false;
                                    } else {
                                        if (index_content < 0) {
                                            index_content = 0;
                                        }
                                        if (i == 0) {
                                            first_occur = index_content;
                                        }
                                        // content_index.push({index_content:index_content, keyword_len:keyword_len});
                                    }
                                });
                            } else {
                                isMatch = false;
                            }
                            // 0x05. show search results
                            if (isMatch) {
                                str += "<li><a href='" + data_url + "' class='search-result-title'>" + orig_data_title + "</a>";
                                var content = orig_data_content;
                                if (first_occur >= 0) {
                                    // cut out 100 characters
                                    var start = first_occur - 20;
                                    var end = first_occur + 80;

                                    if (start < 0) {
                                        start = 0;
                                    }

                                    if (start == 0) {
                                        end = 100;
                                    }

                                    if (end > content.length) {
                                        end = content.length;
                                    }

                                    var match_content = content.substr(start, end);

                                    // highlight all keywords
                                    keywords.forEach(function (keyword) {
                                        var regS = new RegExp(keyword, "gi");
                                        match_content = match_content.replace(regS, "<span class=\"search-keyword\">" + keyword + "</span>");
                                    });

                                    str += "<p class=\"search-result-abstract\">" + match_content + "...</p>"
                                }
                                str += "</li>";
                            }
                        });
                        str += "</ul>";
                        if (str.indexOf('<li>') === -1) {
                            return $resultContent.innerHTML = "<ul><span class='local-search-empty'>No result<span></ul>";
                        }
                        $resultContent.innerHTML = str;
                    });
                },
                error: function(xhr, status, error) {
                    $resultContent.innerHTML = ""
                    if (xhr.status === 404) {
                        $resultContent.innerHTML = "<ul><span class='local-search-empty'>The search.xml file was not found, please refer to：<a href='https://github.com/zchengsite/hexo-theme-oranges#configuration' target='_black'>configuration</a><span></ul>";
                    } else {
                        $resultContent.innerHTML = "<ul><span class='local-search-empty'>The request failed, Try to refresh the page or try again later.<span></ul>";
                    }
                }
            });
            $(document).on('click', '#search-close-icon', function() {
                $('#search-input').val('');
                $('#search-result').html('');
            });
        }

        var getSearchFile = function() {
            var path = "/search.xml";
            searchFunc(path, 'search-input', 'search-result');
        }
    </script>




</div>
<script>
    window.imageLazyLoadSetting = {
        isSPA: false,
        processImages: null,
    };
</script><script>window.addEventListener("load",function(){var t=/\.(gif|jpg|jpeg|tiff|png)$/i,r=/^data:image\/[a-z]+;base64,/;Array.prototype.slice.call(document.querySelectorAll("img[data-original]")).forEach(function(a){var e=a.parentNode;"A"===e.tagName&&(e.href.match(t)||e.href.match(r))&&(e.href=a.dataset.original)})});</script><script>!function(n){n.imageLazyLoadSetting.processImages=i;var e=n.imageLazyLoadSetting.isSPA,r=Array.prototype.slice.call(document.querySelectorAll("img[data-original]"));function i(){e&&(r=Array.prototype.slice.call(document.querySelectorAll("img[data-original]")));for(var t,a=0;a<r.length;a++)0<=(t=(t=r[a]).getBoundingClientRect()).bottom&&0<=t.left&&t.top<=(n.innerHeight||document.documentElement.clientHeight)&&function(){var t,e,n,i,o=r[a];t=o,e=function(){r=r.filter(function(t){return o!==t})},n=new Image,i=t.getAttribute("data-original"),n.onload=function(){t.src=i,e&&e()},n.src=i}()}i(),n.addEventListener("scroll",function(){var t,e;t=i,e=n,clearTimeout(t.tId),t.tId=setTimeout(function(){t.call(e)},500)})}(this);</script>

</body><div style="display: block; opacity: 1;"></div></html>
