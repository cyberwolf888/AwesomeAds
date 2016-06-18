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

   @if($ads->payment == $ads::P_CASH)
      <section class="light_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">

                  <div class="result sc_infobox sc_infobox_style_success" style="display: block;">
                     Dear <b>{{ $ads->name }}</b>, a notification was sent to your email address <span style="color: #ff6f58;">{{ $ads->email }}</span>, for steps on how to pay we sent via email.
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xs-12">
                  <div class="text-center">
                     <i class="fa fa-search-plus pull-left icon"></i>
                     <h2>Invoice #{{ $ads->id }}</h2>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-xs-12 col-md-4 col-lg-4 pull-left">
                        <div class="panel panel-default height">
                           <div class="panel-heading">Billing Details</div>
                           <div class="panel-body">
                              <strong>{{ $ads->name }}</strong><br>
                              {{ $ads->email }}<br>
                              {{ $ads->phone }}<br><br>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-4 col-lg-4">
                        <div class="panel panel-default height">
                           <div class="panel-heading">Payment Information</div>
                           <div class="panel-body">
                              <strong>Payment Method:</strong> Cash<br>
                              <strong>Payment Status:</strong> {{ \App\Models\Ads::L_STATUS[$ads->status] }}<br>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-md-4 col-lg-4">
                        <div class="panel panel-default height">
                           <div class="panel-heading">Company Information</div>
                           <div class="panel-body">
                              <strong>Awesome Advertisement</strong><br>
                              082 247 464196 <br>
                              awesome.advertiser8@gmail.com<br>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h3 class="text-center"><strong>Order summary</strong></h3>
                     </div>
                     <div class="panel-body">
                        <div class="table-responsive">
                           <table class="table table-condensed">
                              <thead>
                              <tr>
                                 <td><strong>Ad Type</strong></td>
                                 <td class="text-center"><strong>Issues</strong></td>
                                 <td class="text-center"><strong>Word Count</strong></td>
                                 <td class="text-center"><strong>Cost</strong></td>
                                 <td class="text-right"><strong>Total</strong></td>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                 <td>{{ $type->label }}</td>
                                 <td class="text-center">{{ $ads->issues }}</td>
                                 <td class="text-center">{{ $ads->words }}</td>
                                 <td class="text-center">Rp. {{ number_format($ads->cost) }}</td>
                                 <td class="text-right">Rp. {{ number_format($ads->total) }}</td>
                              </tr>
                              <tr>
                                 <td class="highrow"></td>
                                 <td class="highrow"></td>
                                 <td class="highrow"></td>
                                 <td class="highrow text-center"><strong>Tax</strong></td>
                                 <td class="highrow text-right">Rp. 0</td>
                              </tr>
                              <tr>
                                 <td class="emptyrow"></td>
                                 <td class="emptyrow"></td>
                                 <td class="emptyrow"></td>
                                 <td class="emptyrow text-center"><strong>Final Total</strong></td>
                                 <td class="emptyrow text-right">Rp. {{ number_format($ads->total) }}</td>
                              </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   @endif

@endsection