@extends('layouts.login')

@section('content')
    <div class="md-card" id="login_card">
        <div class="md-card-content large-padding" id="login_form">
            <div class="login_heading">
                <div class="user_avatar"></div>
            </div>
            <form role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="uk-form-row">
                    <label for="email">Username</label>
                    <input id="email" type="email" class="md-input" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block" style="color: red;">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>
                <div class="uk-form-row">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="md-input" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block" style="color: red;">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>
                <div class="uk-margin-medium-top">
                    <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign In</button>
                </div>
                <div class="uk-margin-top">
                    <a href="#" id="login_help_show" class="uk-float-right">Need help?</a>
                    <span class="icheck-inline">
                            <input type="checkbox" name="remember" id="login_page_stay_signed" data-md-icheck />
                            <label for="login_page_stay_signed" class="inline-label">Stay signed in</label>
                        </span>
                </div>
            </form>
        </div>
        <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
            <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
            <h2 class="heading_b uk-text-success">Can't log in?</h2>
            <p>Here’s the info to get you back in to your account as quickly as possible.</p>
            <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps Lock is turned off, and that your username is spelled correctly, and then try again.</p>
        </div>
    </div>
@endsection
