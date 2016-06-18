@extends('layouts.frontend.layout2')
@section('title','Payment')

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
                        <span class="current">500</span>
                    </div>
                    <h3 class="pageTitle h3">500</h3>
                </div>
            </div>
        </div>
    </section>
    <div class="mainWrap without_sidebar">
        <section class="light_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page404">
                            <div class="titleError">500</div>
                            <div class="h2">The requested page is error</div>
                            <p>
                                Go back, or return to
                                <a href="{!! url()->route('home') !!}">Awesome Advertisement</a>
                                home page to choose a new page.
                                <br>Please report any broken links to our team.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection