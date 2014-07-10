@extends('index')

{{-- Web site Title --}}
@section('title')
@parent
 - @lang('labels.articles')
@stop

{{-- Update the Meta Title --}}
@section('meta_title')
@parent

@stop

{{-- Update the Meta Description --}}
@section('meta_description')
@parent

@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
@parent

@stop


{{-- Content --}}
@section('content')
<div class="breadcrumbs">

    <a href="#">Главная</a>

    <a href="#">Платья на свадьбу</a>

    <a href="#">Все о свадебных платьях</a>

</div>

<h1>
{{dd(public_path())}}
    Статьи

</h1>

<div class="sidebar left">
    @include('articles.categories')
</div>

<div class="content articles">

    <h2>

        Все о свадебных платьях

    </h2>

    <div class="content_preview">
        @foreach($articles as $article)
        <div class="prev">

            <img src="../images/other/domingo.png" />

            <div class="hover">

                <div class="preview">

                    <a href="#" class="love"></a>

                    <a href="#" class="add"></a>

                </div>

            </div>

            <h5>
                <a href="{{ URL::to('articles/'.$article->id) }}">{{{ $article->title }}}</a>
            </h5>

            <p>
                {{{ Str::words($article->body, 20) }}}
            </p>

            <span class="views">
                {{ $article->pageviews }}
            </span>

            <span class="heart">
                {{ $article->likes }}
            </span>

        </div>
        @endforeach

    </div>

    <a href="#" class="show_more left">Показать еще</a>

</div>

</div>
@stop