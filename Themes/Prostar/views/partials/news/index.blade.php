@extends('themes.prostar.layouts.prostar_layout')

@section('content')

    <div class="items-leading clearfix">

        <div class="leading-0" itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">

            <div class="page-header">
                <h2 itemprop="name">
                    <a href="/index.php/3-welcome-to-your-blog" itemprop="url">{{$item->title}}</a>
                </h2>
            </div>
            {!! $item->fulltext !!}

        </div>
        <br/><br/>
    </div>


@endsection
