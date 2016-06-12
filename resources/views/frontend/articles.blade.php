@extends('layouts.frontend.layout2')
@section('title','Articles')

@push('plugin_css')
{!! Helper::registerCss("/frontend/js/vendor/mediaelement/mediaelementplayer.css") !!}
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
                            <span class="current">Articles</span>
                        </div>
                        <h3 class="pageTitle h3">Articles</h3>
                    </div>
                </div>
            </div>
        </section>
        <div class="mainWrap without_sidebar">
            <section class="light_section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <article class="postCenter hrShadow post">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="post_title">
                                            <a href="#">Optimizing your Website for Mobile Search</a>
                                        </h2>
                                        <div class="sc_section post_thumb thumb">
                                            <a href="#">
                                                <img alt="Optimizing your Website for Mobile Search" src="{!! asset('/assets/frontend/images/8-714x402.jpg') !!}">
                                            </a>
                                        </div>
                                        <div class="postStandard">
                                            Sole proprietorship: A sole proprietorship is owned by one person and operates for their benefit. The owner may operate the business alone or with other people. A sole proprietor has unlimited...
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="postSharing">
                                            <ul>
                                                <li class="squareButton light ico">
                                                    <a class="icon-link" title="More" href="#">More</a>
                                                </li>
                                                <li class="squareButton light ico">
                                                    <a class="icon-eye" title="Views - 188" href="#">188</a>
                                                </li>
                                                <li class="squareButton light ico">
                                                    <a class="icon-comment-1" title="Comments - 0" href="#comments">0</a>
                                                </li>
                                                <li class="squareButton light ico likeButton like" data-postid="544" data-likes="17" data-title-like="Like" data-title-dislike="Dislike">
                                                    <a class="icon-heart-1" title="Like - 17" href="#">
                                                        <span class="likePost">17</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post_info infoPost">
                                            Posted
                                            <a href="#" class="post_date">August 21, 2014</a>
                                            <span class="separator">|</span>
                                            by
                                            <a href="#" class="post_author">admin</a>
                                            <span class="separator">|</span>
<span class="post_cats">
in
<a class="cat_link" href="#">Blog with sidebar,</a>
<a class="cat_link" href="#">Blog without sidebar</a>
</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="postRight hrShadow post">
                                <div class="row">
                                    <div class="sc_section col-sm-6 post_thumb thumb">
                                        <a href="#">
                                            <img alt="Advanced Guide to Google Penalty Removal" src="{!! asset('/assets/frontend/images/11-714x402.jpg') !!}">
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <h2 class="post_title">
                                            <a href="#">Advanced Guide to Google Penalty Removal</a>
                                        </h2>
                                        <div class="postStandard">
                                            Many businesses are operated through a separate entity such as a corporation or a partnership (either formed with or without limited liability). Most legal jurisdictions allow people to organize...
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="postSharing">
                                            <ul>
                                                <li class="squareButton light ico">
                                                    <a class="icon-link" title="More" href="#">More</a>
                                                </li>
                                                <li class="squareButton light ico">
                                                    <a class="icon-eye" title="Views - 160" href="#">160</a>
                                                </li>
                                                <li class="squareButton light ico">
                                                    <a class="icon-comment-1" title="Comments - 0" href="#comments">0</a>
                                                </li>
                                                <li class="squareButton light ico likeButton like" data-postid="550" data-likes="11" data-title-like="Like" data-title-dislike="Dislike">
                                                    <a class="icon-heart-1" title="Like - 11" href="#">
                                                        <span class="likePost">11</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post_info infoPost">
                                            Posted <a href="#" class="post_date">August 20, 2014</a>
                                            <span class="separator">|</span>
                                            by <a href="#" class="post_author">admin</a>
                                            <span class="separator">|</span>
<span class="post_cats">
in
<a class="cat_link" href="#">Blog with sidebar,</a>
<a class="cat_link" href="#">Blog without sidebar,</a>
<a class="cat_link" href="#">Timeline example</a>
</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="postLeft hrShadow post">
                                <div class="row">
                                    <div class="sc_section col-sm-6 post_thumb thumb">
                                        <a href="#">
                                            <img alt="Website Speed and Search Rankings" src="{!! asset('/assets/frontend/images/13-714x402.jpg') !!}">
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <h2 class="post_title">
                                            <a href="#">Website Speed and Search Rankings</a>
                                        </h2>
                                        <div class="postStandard">
                                            Building first evolved out of the dynamics between needs (shelter, security, worship, etc.) and means (available and attendant skills). As human cultures developed and knowledge began to be...
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="postSharing">
                                            <ul>
                                                <li class="squareButton light ico">
                                                    <a class="icon-link" title="More" href="#">More</a>
                                                </li>
                                                <li class="squareButton light ico">
                                                    <a class="icon-eye" title="Views - 120" href="#">120</a>
                                                </li>
                                                <li class="squareButton light ico">
                                                    <a class="icon-comment-1" title="Comments - 0" href="#comments">0</a>
                                                </li>
                                                <li class="squareButton light ico likeButton like" data-postid="552" data-likes="6" data-title-like="Like" data-title-dislike="Dislike">
                                                    <a class="icon-heart-1" title="Like - 6" href="#">
                                                        <span class="likePost">6</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post_info infoPost">
                                            Posted <a href="#" class="post_date">August 19, 2014</a>
                                            <span class="separator">|</span>
                                            by <a href="#" class="post_author">admin</a>
                                            <span class="separator">|</span>
<span class="post_cats">
in
<a class="cat_link" href="#">Blog with sidebar,</a>
<a class="cat_link" href="#">Blog without sidebar,</a>
<a class="cat_link" href="#">Timeline example</a>
</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="postCenter hrShadow post">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="post_title">
                                            <a href="#">Improving SEO Rankings with Google Plus</a>
                                        </h2>
                                        <div class="sc_section post_thumb thumb">
                                            <a href="#">
                                                <img alt="Improving SEO Rankings with Google Plus" src="{!! asset('/assets/frontend/images/7-714x402.jpg') !!}">
                                            </a>
                                        </div>
                                        <div class="postStandard">
                                            A hybrid mobile phone can hold up to four SIM cards. SIM and RUIM cards may be mixed together to allow both GSM and CDMA networks to be accessed. From 2010 onwards they became popular in India and...
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="postSharing">
                                            <ul>
                                                <li class="squareButton light ico">
                                                    <a class="icon-link" title="More" href="#">More</a>
                                                </li>
                                                <li class="squareButton light ico">
                                                    <a class="icon-eye" title="Views - 104" href="#">104</a>
                                                </li>
                                                <li class="squareButton light ico">
                                                    <a class="icon-comment-1" title="Comments - 1" href="#comments">1</a>
                                                </li>
                                                <li class="squareButton light ico likeButton like" data-postid="554" data-likes="3" data-title-like="Like" data-title-dislike="Dislike">
                                                    <a class="icon-heart-1" title="Like - 3" href="#">
                                                        <span class="likePost">3</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="post_info infoPost">
                                            Posted <a href="#" class="post_date">August 17, 2014</a>
                                            <span class="separator">|</span>
                                            by <a href="#" class="post_author">admin</a>
                                            <span class="separator">|</span>
<span class="post_cats">
in
<a class="cat_link" href="#">Blog with sidebar,</a>
<a class="cat_link" href="#">Blog without sidebar,</a>
<a class="cat_link" href="#">Timeline example</a>
</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection

@push('plugin_script')
{!! Helper::registerJs("/frontend/js/vendor/mediaelement/mediaelement-and-player.min.js") !!}
@endpush