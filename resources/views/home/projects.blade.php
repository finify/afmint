@extends('home.layout.layout')

@section('content')
<!-- PAGE TITLE -->
<div class="section bglight" style="padding: 60px 0 30px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h2 class="section-heading">All Projects</h2>
            </div>
        </div>
    </div>
</div>

<!-- PROJECTS GALLERY -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <nav class="categories">
                    <ul class="portfolio_filter dark">
                        <li><a href="" class="active" data-filter="*">All</a></li>
                        @foreach($projects as $project)
                        <li><a href="" data-filter=".{{ Str::slug($project['name']) }}">{{ $project['name'] }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row grid-services">
            @forelse($galleries as $gallery)
            <div class="col-sm-6 col-md-4 {{ Str::slug($gallery->project_name ?? '') }}">
                <div class="box-image-4">
                    <a href="{{ Storage::url($gallery->image) }}" title="{{ $gallery->heading }}" class="popup-img">
                        <div class="media">
                            <img src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->heading }}" class="img-responsive">
                        </div>
                        <div class="body">
                            <div class="content">
                                <h4 class="title">{{ $gallery->heading }}</h4>
                                <span class="category">{{ $gallery->subheading }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-sm-12 text-center" style="padding: 40px 0;">
                <p>No projects available at the moment.</p>
            </div>
            @endforelse
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-12 col-md-12 text-center">
                <a href="{{ route('home.index') }}" class="btn btn-default btn-lg">&larr; Back to Home</a>
            </div>
        </div>
    </div>
</div>
@endsection
