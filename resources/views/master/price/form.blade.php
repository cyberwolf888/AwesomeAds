@extends('layouts.master.main')

@section('title','Price')

@section('content')
    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Form Validation</h3>

            <div class="md-card">
                <div class="md-card-content large-padding">
                    <form id="form_validation" class="uk-form-stacked" method="POST">
                        {{ csrf_field() }}
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="fullname">Type Name<span class="req">*</span></label>
                                    <input type="text" name="label" required class="md-input" value="{{ $ad_type->label }}"/>
                                </div>
                            </div>
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <label for="email">Price<span class="req">*</span></label>
                                    <input type="number" name="price" data-parsley-trigger="change" required  class="md-input" value="{{ $price->price }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="parsley-row">
                                    <label for="message">Descriptions (10 chars min, 255 max)</label>
                                    <textarea class="md-input" name="description" cols="10" rows="3" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="255" data-parsley-validation-threshold="10" data-parsley-minlength-message = "Come on! You need to enter at least a 20 caracters long comment..">{{ $ad_type->description }}</textarea>
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