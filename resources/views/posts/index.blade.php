@extends('layouts/shujin')

@section('content')
<div class="row mb-3">
    @foreach ($posts as $index => $post)
    <a href="{{ route('news.show', $post->slug) }}" class="hcf-headline__row">
        <div class="hcf-headline__block">
            <h3 class="hcf-headline__block-title">{{ $post->name }}</h3>
            <img src="{{ $post->header }}" class="img-fluid hcf-headline__block-header hcf-shadow" alt="">
            <div class="hcf-headline__block-footer">
                <span class="badge badge-primary hcf-headline__block-footer_category">{{ $post->category->name }}</span>
                <span class="hcf-headline__block-footer_datetime"><i class="fas fa-circle fa-green"></i> <i class="far fa-calendar-alt"></i> {{ date('j F Y', strtotime($post->created_at)) }}</span>
            </div>
        </div>
        <div class="hcf-headline__block-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, libero amet nesciunt error maxime, eius, illo quaerat veniam aliquid at ipsam deserunt incidunt provident? Molestias perferendis qui illo asperiores beatae laboriosam reiciendis, facilis soluta voluptatem necessitatibus? Mollitia suscipit, nam totam quos nesciunt officiis, iusto est impedit voluptatem recusandae quis ut obcaecati libero optio nihil molestiae quidem repudiandae similique vero ratione eum! Totam eum praesentium excepturi culpa laboriosam voluptatem facere consequatur accusantium consectetur odio eveniet maxime magni odit, ipsam in repellat nulla, saepe tempora necessitatibus incidunt. Esse ipsa veritatis blanditiis, aspernatur, modi quisquam unde provident itaque sit harum tempora amet dolores.
        </div>
    </a>
    @endforeach
</div>
@endsection