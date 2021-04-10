@extends('layouts/shujin')

@section('content')
<div class="row mb-3">
    <div class="col hcf-headline__block">
        <h1 class="hcf-headline__block-title">
            {{ $page->name }}
        </h1>
        <div>
            {{ $page->content }}
        </div>
        </div>
    </div>
</div>
@endsection