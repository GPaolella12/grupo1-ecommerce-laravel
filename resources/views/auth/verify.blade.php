@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un link para verificar tu email!') }}
                        </div>
                    @endif

                    {{ __('Antes de seguir, por favor chequea tu email para verificar tu cuenta') }}
                    {{ __('Si no recibiste el mail') }}, <a href="{{ route('verification.resend') }}">{{ __('Clickea aca para recibir un nuevo link de verificación') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
