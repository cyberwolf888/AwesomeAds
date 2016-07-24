@extends('layouts.master.main')

@section('title','Dashboard')

@section('content')
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Dashboard</h3>

            <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                            <span class="uk-text-muted uk-text-small">Total Inquiry (last 7d)</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>{{ $total_inquiry }}</noscript></span></h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <span class="uk-text-muted uk-text-small">Total Sales (last 7d)</span>
                            <h2 class="uk-margin-remove">Rp. <span class="countUpMe">0<noscript>{{ $total_sales }}</noscript></span></h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data">64/100</span></div>
                            <span class="uk-text-muted uk-text-small">Inquiry Paid</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>{!! round(($total_paid*100)/$total) !!}</noscript></span>%</h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_live peity_data">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span></div>
                            <span class="uk-text-muted uk-text-small">Total Inquiry (All time)</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>{{ $total }}</noscript></span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Last 5 Inquiry
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <table id="dt_individual_search" class="uk-table uk-table-hover" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Issues</th>
                                    <th>Word Count</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($last_ads as $data)
                                    <tr>
                                        <td>{{ ucfirst($data->name) }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->issues }}</td>
                                        <td>{{ $data->words }}</td>
                                        <td>{{ Helper::formatMoney($data->total) }}</td>
                                        <td><span class="@if($data->status == 2) md-color-light-green-800 @else md-color-light-blue-A700 @endif">{{ \App\Models\Ads::L_STATUS[$data->status] }}</span></td>
                                        <td>{{ date('d F Y',strtotime($data->created_at)) }}</td>
                                        <td class="uk-text-center">
                                            <a href="{{ route('master.inquiry.detail',['id'=>$data->id]) }}" target="_blank" class="ts_remove_row "><i class="md-icon material-icons md-color-light-blue-A700">find_in_page</i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('plugin_script')
{!! Helper::registerJs("/master/bower_components/countUp.js/dist/countUp.min.js") !!}
{!! Helper::registerJs("/master/bower_components/peity/jquery.peity.min.js") !!}

@endpush

@push('page_script')
<script>
    $(".countUpMe").each(function(){var e=this,t=$(e).text();theAnimation=new CountUp(e,0,t,0,2),theAnimation.start()});

    function e(e,t){return Math.floor(Math.random()*(t-e+1))+e}
    $(".peity_orders").peity("donut",{height:24,width:24,fill:["#8bc34a","#eee"]}),$(".peity_visitors").peity("bar",{height:28,width:48,fill:["#d84315"],padding:.2}),$(".peity_sale").peity("line",{height:28,width:64,fill:"#d1e4f6",stroke:"#0288d1"}),$(".peity_conversions_large").peity("bar",{height:64,width:96,fill:["#d84315"],padding:.2});var t=$(".peity_live");if(t.length){var a=t.peity("line",{height:28,width:64,fill:"#efebe9",stroke:"#5d4037"});$("#peity_live_text").text("0"),setInterval(function(){var t=Math.round(10*Math.random()),i=a.text().split(",");i.shift(),i.push(t),a.text(i.join(",")).change();var n=parseInt($("#peity_live_text").text()),r=e(20,100);if(n==r)var r=e(20,120);var s=new CountUp("peity_live_text",n,r,0,1.2);s.start()},2e3)}
</script>
@endpush