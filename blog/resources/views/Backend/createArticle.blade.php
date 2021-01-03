@extends('layouts.Backend.main')

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">创建文章</h3>
        </div>
        <div class="panel-body">
            <input type="text" class="form-control" placeholder="标题">
            <br>
            <input type="text" class="form-control" placeholder="文章描述">
            <br>
            <div class="col-md-12">
                <div id="my-editormd" >
                    <textarea id="my-editormd-markdown-doc" name="my-editormd-markdown-doc" style="display:none;"></textarea>
                    <!-- 注意：name属性的值-->
                    <textarea id="my-editormd-html-code" name="my-editormd-html-code" style="display:none;"></textarea>
                </div>
            </div>
            <br>
            @include('layouts.Backend.tagList')
            <br>
            <input type="text" class="form-control" placeholder="标签(用逗号隔开)">
            <br>
            <div class="row">
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block">提交</button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-warning btn-block">重置</button>
                </div>
            </div>
        </div>
    </div>
@endsection

<link rel="stylesheet"href="/editormd/css/editormd.css" />

<script src="/editormd/js/jquery.min.js"></script>
<script src="/editormd/js/editormd.min.js"></script>
<script type="text/javascript">
    $(function() {
        editormd("my-editormd", {//注意1：这里的就是上面的DIV的id属性值
            width   : "100%",
            height  : 640,
            syncScrolling : "single",
            path    : "/editormd/lib/",//注意2：你的路径
            saveHTMLToTextarea : true//注意3：这个配置，方便post提交表单
        });
    });
</script>
