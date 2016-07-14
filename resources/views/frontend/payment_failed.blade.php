@extends('layouts.frontend.layout2')
@section('title','Payment')

@push('page_css')
<style>
    h3 {
        padding:0;
    }
    table td, table th {
        border: none;
    }
    .height {
        min-height: 200px;
    }

    .icon {
        font-size: 47px;
        color: #5CB85C;
    }

    .iconbig {
        font-size: 77px;
        color: #5CB85C;
    }

    .table > tbody > tr > .emptyrow {
        border-top: none;
    }

    .table > thead > tr > .emptyrow {
        border-bottom: none;
    }

    .table > tbody > tr > .highrow {
        border-top: 3px solid;
    }
</style>
@endpush

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
                        <span class="current">Payment</span>
                    </div>
                    <h3 class="pageTitle h3">Payment</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="light_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <div class="result sc_infobox sc_infobox_style_error" style="display: block;">
                        Dear <b>{{ $ads->name }}</b>, Your payment is failed. Please contact our customer service for more information.
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection