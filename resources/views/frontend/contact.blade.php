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
                            <span class="current">Contact Us</span>
                        </div>
                        <h3 class="pageTitle h3">Contact Us</h3>
                    </div>
                </div>
            </div>
        </section>
        <div class="mainWrap without_sidebar">
            <section class="light_section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div id="sc_googlemap_1" class="sc_googlemap sc_googlemap_style_1" data-address="San Francisco, CA 94102, US" data-latlng="" data-zoom="16" data-style="default" data-point="" data-title="San Francisco" data-description="San Francisco, CA 94102, US"> </div>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="sc_title sc_title_regular">
                                Stay in Touch
                            </h1>
                            <div>Anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam anak ayam. </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="light_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="sc_contact_form sc_contact_form_contact_1">
                                <h1 class="title">Send Us a Message</h1>
                                <form id="contact_form" class="contact_1" method="post" action="{{ route('send_contact') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="text" name="name" id="sc_contact_form_username" placeholder="Name">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="email" id="sc_contact_form_email" placeholder="Email">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="subject" id="sc_contact_form_subj" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="message">
                                                <div class="">
                                                    <textarea id="sc_contact_form_message" class="textAreaSize" name="message" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="sc_contact_form_button">
                                                <div class="squareButton ico">
                                                    <button type="submit" name="contact_submit" class="sc_contact_form_submit icon-comment-1">Send Message</button>
                                                </div>
                                            </div>
                                            <div class="result sc_infobox"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <h1 class="sc_title sc_title_regular">Business hours</h1>
                            <p>
                                <big>Monday – Friday 9am to 5pm<br/>
                                    Saturday – 9am to 2pm<br/>
                                    Sunday – Closed</big>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection

@push('plugin_script')
{!! Helper::registerJs("/frontend/js/custom/_form_contact.min.js") !!}
{!! Helper::registerJs("/frontend/js/vendor/chart.min.js") !!}
{!! Helper::registerJs("/frontend/js/vendor/diagram.raphael.min.js") !!}
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
{!! Helper::registerJs("/frontend/js/custom/_googlemap_init.js") !!}
@endpush