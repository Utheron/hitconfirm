@extends('layouts.shujin')

@section('content')
<div class="row mb-3">
    @foreach ($index_news as $news)
    <a href="{{ route('news.show', $news->slug) }}" class="col-lg-3 col-md-6 col-sm-12 hcf-headline__block">
        <h3 class="hcf-headline__block-title">{{ $news->name }} <span class="badge badge-success">new</span></h3>
        <img src="{{ $news->header }}" class="img-fluid hcf-headline__block-header" alt="">
        <div class="hcf-headline__block-footer">
            <span class="badge badge-primary hcf-headline__block-footer_category">{{ $news->category->name }}</span>
            <span class="hcf-headline__block-footer_datetime"><i class="far fa-calendar-alt"></i> {{ $news->created_at }}</span>
        </div>
    </a>
    @endforeach
</div>
<div class="row mb-3">
    //
</div>
@endsection