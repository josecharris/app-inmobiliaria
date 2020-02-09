@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel principal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->hasRole('admin'))
                      <div class="alert alert-success" role="alert">
                        <h2>Se ingresó como administrador</h2>
                      </div>
                    @endif

                    @if(Auth::user()->hasRole('user'))
                      <div class="alert alert-success" role="alert">
                        <h2>Se ingresó como usuario</h2>
                      </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
