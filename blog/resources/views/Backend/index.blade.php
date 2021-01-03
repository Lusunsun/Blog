@extends('layouts.Backend.main')

@section('content')
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">文章列表</h3>
                <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                </div>
            </div>
            <div>
                <div class="input-group col-md-7">

                    <input class="form-control" type="text">
                    <span class="input-group-btn"><button class="btn btn-primary" type="button">Go!</button></span>


                    @include('layouts.Backend.tagList')

                </div>
            </div>

            <div class="panel-body no-padding" style="display: block;">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>标题</th>
                        <th>关键词</th>
                        <th>描述</th>
                        <th>Tags</th>
                        <th>创建时间</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td><a href="{{ route('backendArticleDetail', ['articleId' => $article->article_id]) }}">{{$article->article_id}}</a></td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->keyword}}</td>
                            <td>{{$article->desc}}</td>
                            <td><span class="label label-success">{{$article->tag_name}}</span></td>
                            <td>{{$article->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

