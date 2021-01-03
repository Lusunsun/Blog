@extends('layouts.header')
@section('content')
    <div class="container archives">
        <div>
            <ul class="tag-list" itemprop="keywords">
                @foreach($tags as $tag)
                    <li class="tag-list-item">
                        <a class="tag-list-link" href="{{ route('index', ['tag_id' => $tag['tag_id']]) }}" rel="tag">{{$tag['tag_name']}}</a>
                        <span class="tag-list-count">{{$tag['count']}}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
