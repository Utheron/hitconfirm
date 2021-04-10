@extends('layouts/shujin')

@section('content')
<div class="row mb-3">
    @foreach ($posts as $index => $post)
    @if ($index < 4)
    <a href="{{ route('news.show', $post->slug) }}" class="col-lg-3 col-md-6 col-sm-12 hcf-headline__block">
        <h3 class="hcf-headline__block-title">{{ $post->name }} <span class="badge badge-success">new</span></h3>
        <img src="{{ $post->header }}" class="img-fluid hcf-headline__block-header" alt="">
        <div class="hcf-headline__block-footer">
            <span class="badge badge-primary hcf-headline__block-footer_category">{{ $post->category->name }}</span>
            <span class="hcf-headline__block-footer_datetime"><i class="far fa-calendar-alt"></i> {{ $post->created_at }}</span>
        </div>
    </a>
    @endif
    @endforeach

    <ul>
    @foreach ($posts as $index => $post)
        @if ($index > 3)
            <a href="{{ route('news.show', $post->slug) }}">
                <li>{{ $post->name }}</li>
            </a>
        @endif
    @endforeach
    </ul>
</div>
@endsection