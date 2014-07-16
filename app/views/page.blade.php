@extends('index')

{{-- Update the Meta Title --}}
@section('meta_title')
@parent

@stop

{{-- Update the Meta Description --}}
@section('meta_description')
	{{ $page->meta_description }}
@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
	{{ $page->meta_keywords }}
@stop

@section('content')
<div class="content all">

    <div class="breadcrumbs">

        <a href="#">Главная</a>

        <a href="#">Платья на свадьбу</a>

        <a href="#">Все о свадебных платьях</a>

    </div>

    <h1>

        {{{ $page->title }}}

    </h1>

    {{ $page->content }}

</div>
@stop