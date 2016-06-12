@extends('layouts.frontend.layout2')
@section('title','Contact Us')

@section('content')
<section id="topOfPage" class="topTabsWrap no_container_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="speedBar">
                    <a class="home" href="{!! url('/') !!}">Home</a>
                            <span class="breadcrumbs_delimiter">
                                <i class="icon-right-open-mini"></i>
                            </span>
                    <span class="current">About Us</span>
                </div>
                <h3 class="pageTitle h3">About Us</h3>
            </div>
        </div>
    </div>
</section>
<section class="light_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <figure class="sc_image  sc_image_shape_square">
                    <img src="{!! asset('/assets/frontend/images/seo-about-1.jpg') !!}" alt="">
                </figure>
            </div>
            <div class="col-sm-6">
<span class="sc_highlight sc_highlight_style_7">
Short story about our company
</span>
                <p class="no_padding">Producing long lasting organic SEO results for brands of different kinds for more than a decade, we understand that your company is unique. That is why we approach to each of the projects individually, and we come up with smart solutions and put our technology to work to make us the most efficient among all other SEO agencies. We have been on web marketing for 12 years helping you compete on Internet and converting your visitors into your clients.</p>
            </div>
        </div>
    </div>
</section>
</div>
@endsection