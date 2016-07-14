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
                <p class="no_padding">Anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam.</p>
            </div>
        </div>
    </div>
</section>
</div>
@endsection