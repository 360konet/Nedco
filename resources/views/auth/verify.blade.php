@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to I.T.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please contact IT to verify your registration.') }}<br><br>
                    {{ __('No verification link?') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
            <br>
            <br>
            <center><a href="{{url('/')}}"><button class="btn-primary" style="width:40%; height:50px"><b>Verified by admin? Go to login</b></button></a></center>
        </div>
    </div>
</div>
@endsection
