@extends('layouts.merge.site')
@section('titulo', 'Notícias')
@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area item-bg2">
    <div class="container">
        <div class="page-title-content">
            <h2>Notícias</h2>
            <ul>
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li>Notícias</li>
            </ul>
        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-110">
    <div class="container">
        <div class="row">



            @foreach ($news as $item)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="entry-thumbnail">
                        <a href="#"><img src="/storage/{{ $item->path}}" alt="image"></a>
                    </div>

                    <div class="entry-post-content">
                        <div class="entry-meta">
                            <ul>

                                <li>{{ date('d/m/Y', strtotime($item->date)) }}</li>
                            </ul>
                        </div>

                        <h3><a href="#">{{ $item->title }}  </a></h3>

                        <a href="#" class="learn-more-btn">Saber Mais <i class="flaticon-add"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <b>{{ $news->links() }}</b>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->

@endsection
