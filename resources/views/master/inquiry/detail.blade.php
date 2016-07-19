@extends('layouts.master.main')

@section('title','Detail Inquiry')

@section('content')
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">
                Detail Inquiry
                @if($ads->status==1)
                <span style="float: right;">
                    <a class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light" href="javascript:confirmmation()">Confirm</a>
                </span>
                @endif
            </h3>


            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-small-1-2 uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_b uk-margin-bottom">Personal Info</h4>
                            <div class="uk-form-row">
                                <div class="uk-width-medium-1-1">
                                    <label>Name</label>
                                    <input type="text" class="md-input" value="{{ $ads->name }}" readonly/>
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <div class="uk-width-medium-1-1">
                                    <label>Phone</label>
                                    <input type="text" class="md-input" value="{{ $ads->phone }}" readonly/>
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <div class="uk-width-medium-1-1">
                                    <label>Email</label>
                                    <input type="text" class="md-input" value="{{ $ads->email }}" readonly/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_b uk-margin-bottom">Inquiry</h4>
                            <div class="uk-form-row">
                                <div class="uk-width-medium-1-1">
                                    <label>Ad Type</label>
                                    <input type="text" class="md-input" value="{{ $ads->adtype->label }}" readonly/>
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <div class="uk-width-medium-1-1">
                                    <label>Issues</label>
                                    <input type="text" class="md-input" value="{{ $ads->issues }} Issues" readonly/>
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <div class="uk-width-medium-1-1">
                                    <label>Total Words</label>
                                    <input type="text" class="md-input" value="{{ $ads->words }} Words" readonly/>
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <div class="uk-width-medium-1-1">
                                    <label>Content</label>
                                    <textarea cols="30" rows="4" class="md-input" readonly>{{ $ads->ad_content }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-small-1-2 uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_b uk-margin-bottom">Payment</h4>
                            <div class="uk-form-row">
                                <div class="uk-width-medium-1-1">
                                    <label>Status</label>
                                    <input type="text" class="md-input" value="{{ \App\Models\Ads::L_STATUS[$ads->status] }}" readonly/>
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <div class="uk-width-medium-1-1">
                                    <label>Payment</label>
                                    <input type="text" class="md-input" value="{{ $ads->getLabelPayment($ads->payment) }}" readonly/>
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <div class="uk-width-medium-1-1">
                                    <label>Cost/word</label>
                                    <input type="text" class="md-input" value="Rp. {{ number_format($ads->cost,0,',','.') }}" readonly/>
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <div class="uk-width-medium-1-1">
                                    <label>Total</label>
                                    <input type="text" class="md-input" value="Rp. {{ number_format($ads->total,0,',','.') }}" readonly/>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($ads->design->count()>0)
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_b uk-margin-bottom">Design</h4>
                            <ul class="md-list md-list-addon md-list-right">
                                @foreach($ads->design as $design)
                                    <li>
                                        <div class="md-list-addon-element" style="cursor:pointer;">
                                            <i class="md-list-addon-icon material-icons md-color-green-800" onCLick="javascript:window.location='{{ route('master.inquiry.download',['id'=>$design->id]) }}';">&#xE884;</i>
                                        </div>
                                        <div class="md-list-content">
                                            <span class="md-list-heading md-color-blue-A400" style="cursor:pointer;" onCLick="javascript:window.location='{{ route('master.inquiry.download',['id'=>$design->id]) }}';">{{ $design->image }}</span>
                                            <span class="uk-text-small uk-text-muted">{{ Helper::FileSizeConvert(filesize($design->PATH_IMG.'/'.$design->image)) }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>

            </div>

        </div>
    </div>
@endsection

@push('page_script')
<script>
    function confirmmation(){
        var r = confirm("Are you sure to set this inquiry to PAID ?");
        if (r == true) {
            window.location = '{{ route('master.inquiry.confirm',['id'=>$ads->id]) }}';
        } else {
            return false;
        }
    }
</script>
@endpush