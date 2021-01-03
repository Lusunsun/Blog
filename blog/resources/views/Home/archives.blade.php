@extends('layouts.header')
@section('content')
    <div class="container archives">
        <div class="post-list">
            @foreach($archives as $year => $data)
                <div class="content-title">
                    <h2>
                        <span>{{$year}}</span>
                    </h2>
                </div>
                @foreach($data as $title)
                <div class="post-item" title="{{$title['title']}}">
                    <div class="time-m-d">{{$title['date']}}</div>
                    <div class="title">
                        <a href="{{ route('articleDetail', ['articleId' => $title['id']]) }}">
                            <span>{{$title['title']}}</span>
                        </a>
                    </div>
                </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
