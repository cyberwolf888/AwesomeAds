@extends('layouts.master.main')

@section('title','Dashboard')

@section('content')
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Form Price</h3>

            <div class="md-card">
                <div class="md-card-content large-padding">
                    @if ( session()->has('success') )
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-alert uk-alert-success" data-uk-alert="">
                            <a href="#" class="uk-alert-close uk-close"></a>
                            {{ session()->get('success') }}
                        </div>
                    </div>
                    @endif
                    @if ( session()->has('error') )
                        <div class="uk-width-1-1 uk-row-first">
                            <div class="uk-alert uk-alert-danger" data-uk-alert="">
                                <a href="#" class="uk-alert-close uk-close"></a>
                                {{ session()->get('error') }}
                            </div>
                        </div>
                    @endif
                    <form id="form_validation" class="uk-form-stacked" method="POST">
                        {{ csrf_field() }}
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="parsley-row">
                                    <label for="email">Email<span class="req">*</span></label>
                                    <input type="email" name="email" data-parsley-trigger="change" required  class="md-input" value="{{ $model->email }}"/>

                                </div>
                            </div>
                        </div>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="password">New Password</label>
                                    <input type="password" name="password" id="password" required class="md-input"/>
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="password_confirm">Confirm Password</label>
                                    <input type="password" name="password_confirm" id="password_confirm" data-parsley-equalto="#password" data-parsley-trigger="change" required  class="md-input"/>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <button type="submit" class="md-btn md-btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin_script')
<script>
    // load parsley config (altair_admin_common.js)
    altair_forms.parsley_validation_config();
</script>
<!-- datatables -->
{!! Helper::registerJs("/master/bower_components/parsleyjs/dist/parsley.min.js") !!}

<!-- datatables custom integration -->
{!! Helper::registerJs("/master/js/pages/forms_validation.min.js") !!}

@endpush