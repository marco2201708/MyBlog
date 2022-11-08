@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--/*@if (Auth::user()->tipo == 'C')
                        <div>
                            {{Auth::user()->tipo}}
                        </div>
                    @endif*/-->
                    {{ __('You are logged in!') }}
                    <h1>Compo da página inicial</h1>
                    <br><br><br><br><br><br>
                    
            </div>
        </div>
    </div>
</div>
@endsection
