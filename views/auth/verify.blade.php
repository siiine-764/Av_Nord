@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"  style="background: linear-gradient(53.5deg, #834FE7 0%, #4ED3D3 98.83%); margin: 10px; border-radius: 10px; padding: 20px;box-shadow: 0px 8px 8px rgb(46, 44, 44) ;font-size:20px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
