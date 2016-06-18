@extends('layouts.frontend.layout2')
@section('title','Place an ads')

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
                        <span class="current">Place and ad</span>
                    </div>
                    <h3 class="pageTitle h3">Place and ad</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="light_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="sc_contact_form sc_contact_form_contact_1">
                        <h1 class="title">Send Us Your Inquiry</h1>
                        {!! Form::open(['method'=>'post', 'id'=>'adsForm', 'enctype'=>'multipart/form-data']) !!}
                        <div class="row">
                            <div class="result sc_infobox"></div>
                            @if (count($errors) > 0)
                                <div class="result sc_infobox sc_infobox_style_error" style="display: block;">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <p class="error_item">{{ $error }}</p>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="col-sm-4">
                                {!!  Form::label('type', 'Ad Type') !!}
                                {!!  Form::select('type', $type, $ad, ['placeholder'=>' -- Select Ad Type -- ']) !!}
                            </div>
                            <div class="col-sm-4">
                                {!!  Form::label('name', 'Your Name') !!}
                                {!!  Form::text('name','',['placeholder'=>'Name']) !!}
                            </div>
                            <div class="col-sm-4">
                                {!!  Form::label('email', 'Email Address') !!}
                                {!!  Form::text('email','',['placeholder'=>'Email']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                {!!  Form::label('phone', 'Phone Number') !!}
                                {!!  Form::text('phone','',['placeholder'=>'Phone Number']) !!}
                            </div>
                            <div class="col-sm-4">
                                {!!  Form::label('issues', 'Issues') !!}
                                {!!  Form::number('issues','1',['placeholder'=>'Issues','min'=>1]) !!}
                            </div>
                            <div class="col-sm-4">
                                {!!  Form::label('payment', 'Payment') !!}
                                {!!  Form::select('payment', [\App\Models\Ads::P_PAYPAL=>"PayPal", \App\Models\Ads::P_CASH=>"Cash"], '', ['placeholder'=>' -- Select Payment -- ']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="message">
                                    <div class="">
                                        {!!  Form::label('ad_content', 'Ad Content') !!}
                                        {!!  Form::textarea('ad_content','',['placeholder'=>'Content' ,'class'=>'textAreaSize']) !!}
                                        <span style="font-size: 12px;">* Please ensure that you have included your contact phone number and/or e-mail address for replies to this ad in the ad text that you are typing here.
                                            <br>** Ads with email addresses receive more replies</span>
                                    </div>
                                </div>
                                {!!  Form::hidden('words','0',['id'=>'words']) !!}
                                {!!  Form::hidden('cost','0',['id'=>'cost']) !!}
                                {!!  Form::hidden('total','0',['id'=>'total']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::label('image[]','Your Ad Design (Optional)') !!}
                                {!! Form::file('image[]',['class'=>'form-control','multiple'=>true]) !!}
                                <span style="font-size: 12px;display: block;">* You can upload up to 3 file at once</span>
                                <span style="font-size: 12px;">** Only files png,gif,jpeg,jpg,psd,pdf,ai and max size 5MB</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                Word Count : <span id="wcount">0</span>
                            </div>
                            <div class="col-sm-4">
                                Price Per Word : Rp. <span class="currency">0</span>
                            </div>
                            <div class="col-sm-4">
                                Total Cost : Rp. <span id="tcost">0</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="sc_contact_form_button">
                                    <div class="squareButton ico">
                                        {!! Form::button('Send Inquiry',['type'=>'submit', 'name'=>'contact_submit', 'class'=>'sc_contact_form_submit icon-comment-1']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('plugin_script')
{!! Helper::registerJs("/frontend/js/custom/_form_ads.js") !!}
@endpush

@push('page_script')
<script type="text/javascript">
    (function($) {
        $(function() {
            function getCost(){
                var id_type = $("#type").val();
                $.get('{!! url('/getprice') !!}' + '/' + id_type, function (data) {
                    $("#cost").val(data);
                    $(".currency").empty().html(data.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                })
            }
            function recalc(){
                wc = $("#ad_content").val().split(/[\n\r]| /).filter(function(e){return e}).length;
                $("#wcount").html(wc);
                $("#words").val(wc);

                // $("#issues").val(Math.abs($("#issues").val()))
                // if ($("#issues").val() == 0) {
                //  $("#issues").val(1);
                // }
                // $("#issues").val().replace(/[^0-9\.]/g,'');
                //$("#issues").html($("#issues").val());

                if(wc > 30){
                    $("#total").val((parseInt($("#cost").val() ) * wc * Math.abs($("#issues").val())));
                }
                else{
                    $("#total").val((parseInt($("#cost").val() ) * wc * Math.abs($("#issues").val())));
                }
                $("#tcost").html($("#total").val().toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));

                return wc;
            }

            $("#ad_content").keyup(function(){
                var id_type = $("#type").val();
                if(id_type == ''){
                    alert("Please select ads type first.");
                }else{
                    recalc();
                }
            });
            $("#issues").keyup(function(){ recalc(); });
            $("#issues").mouseup(function(){ recalc(); });

            $(".currency").each(function(){
                $(this).html( $(this).html().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
            });
            $("#type").change(function(){getCost();});
            recalc();

            if($("#type").val() != ''){
                getCost();
            }
        });

    })(jQuery);
</script>
@endpush