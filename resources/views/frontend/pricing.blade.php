@extends('layouts.frontend.main')

@push('page_css')
<style>
    .sc_table_style_custom1.sc_pricing_table .sc_pricing_columns:hover .sc_price_item .sc_price_money {
        color: #363842;
        margin-top: 60px;
        margin-left: 31px !important;
    }
    .sc_table_style_custom1.sc_pricing_table .sc_price_item .sc_price_money {
        font-size: 36px;
        line-height: 36px;
        height: 36px;
        font-weight: 700;
        color: #ffffff;
        margin-top: 50px;
        margin-left: 25px;
    }
</style>
@endpush

@section('title', 'Pricing')

@section('content')
    <?php
        $hello_ads = \App\Models\AdsType::find(4);
        $business_ads = \App\Models\AdsType::find(1);
        $employment_ads = \App\Models\AdsType::find(3);
    ?>
    <section class="orange_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h1 class="sc_title sc_title_regular sc_title_bold margin_top_large">We Make your Business Popular</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center animated">
                        <div class="sc_button sc_button_style_dark sc_button_size_banner squareButton dark banner">
                            <a href="{{ route('ads') }}" class="">Start Placing Ads</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mainWrap without_sidebar">
        <div class="content">
            <section class="light_section">
                <div class="container">
                    <div class="row animated">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <h1 class="sc_title sc_title_bold sc_title_regular">Our Populer Services Price Plans</h1>
                                <h3 class="sc_title sc_title_regular margin_bottom_small">No long-term contracts, no hidden fees, and no shenanigans. Just affordable, reasonable pricing plans for all types of businesses.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row animated">
                        <div class="col-sm-12">
                            <div class="sc_pricing_table columns_3 alignCenter sc_table_style_custom1">
                                <div class="sc_pricing_columns sc_pricing_column_1">
                                    <ul class="columnsAnimate">
                                        <li class="sc_pricing_data sc_pricing_title">{{ $hello_ads->label }}</li>
                                        <li class="sc_pricing_data sc_pricing_price">
                                            <div class="sc_price_item">
                                                <div class="sc_price_money">{{ $hello_ads->price->price }}</div>
                                                <div class="sc_price_info">
                                                    <div class="sc_price_period">/Word</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="sc_pricing_data">
                                            <strong>1</strong> Isues</li>
                                        <li class="sc_pricing_data">
                                            <strong>Unlimited</strong> Keywords</li>
                                        <li class="sc_pricing_data">
                                            <strong>15</strong> Social Accounts</li>
                                        <li class="sc_pricing_data sc_pricing_footer">
                                            <div class="sc_button sc_button_style_global sc_button_size_huge squareButton global huge margin_bottom_small ico">
                                                <a href="{{ route('ads').'/'.$hello_ads->id }}" class="inherit">Order Now!</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sc_pricing_columns sc_pricing_column_2 highlight">
                                    <ul class="columnsAnimate">
                                        <li class="sc_pricing_data sc_pricing_title">{{ $business_ads->label }}</li>
                                        <li class="sc_pricing_data sc_pricing_price">
                                            <div class="sc_price_item">
                                                <div class="sc_price_money">{{ $business_ads->price->price }}</div>
                                                <div class="sc_price_info">
                                                    <div class="sc_price_period">/Word</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="sc_pricing_data">
                                            <strong>1</strong> Isues</li>
                                        <li class="sc_pricing_data">
                                            <strong>Unlimited</strong> Keywords</li>
                                        <li class="sc_pricing_data">
                                            <strong>50</strong> Social Accounts</li>
                                        <li class="sc_pricing_data sc_pricing_footer">
                                            <div class="sc_button sc_button_style_global sc_button_size_huge squareButton global huge margin_bottom_small ico">
                                                <a href="{{ route('ads').'/'.$business_ads->id }}" class="inherit">Order Now!</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sc_pricing_columns sc_pricing_column_3">
                                    <ul class="columnsAnimate">
                                        <li class="sc_pricing_data sc_pricing_title">{{ $employment_ads->label }}</li>
                                        <li class="sc_pricing_data sc_pricing_price">
                                            <div class="sc_price_item">
                                                <div class="sc_price_money">{{ $employment_ads->price->price }}</div>
                                                <div class="sc_price_info">
                                                    <div class="sc_price_period">/Word</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="sc_pricing_data">
                                            <strong>1</strong> Isues</li>
                                        <li class="sc_pricing_data">
                                            <strong>Unlimited</strong> Keywords</li>
                                        <li class="sc_pricing_data">
                                            <strong>20</strong> Social Accounts</li>
                                        <li class="sc_pricing_data sc_pricing_footer">
                                            <div class="sc_button sc_button_style_global sc_button_size_huge squareButton global huge margin_bottom_small ico">
                                                <a href="{{ route('ads').'/'.$employment_ads->id }}" class="inherit">Order Now!</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="lightgrey_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-7">
                            <h2 class="sc_title sc_title_bold sc_title_regular">Do you need more options?</h2>
                            <span class="sc_highlight sc_highlight_style_6">We have larger plans made specifically for agency and enterprise use.</span>
                        </div>
                        <div class="col-md-4 col-sm-5">
                            <div class="text-center">
                                <div class="sc_button sc_button_style_global sc_button_size_banner squareButton global banner margin_top_small">
                                    <a href="{{ route('faq') }}" class="">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
