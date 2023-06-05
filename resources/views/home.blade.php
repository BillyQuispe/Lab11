@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mapa de los gimnasios') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-info" role="alert">
                            Dentro de  este mapa interactivo puedes encontrar los gimnasios a tu disposicion.
                        </div>
                    @endif

                    <div class="alert alert-info" role="alert">
                    Dentro de  este mapa interactivo puedes encontrar los gimnasios a tu disposicion
                    </div>

                    <div class="container">
        <div class="d-flex justify-content-center">
            <section id="map">
                <!-- Map -->
                <iframe src="https://www.google.com.qa/maps/d/u/0/embed?mid=1pshTmbrfwcH5IYEPyY2_egABIhP7M2A&ehbc=2E312F" width="640" height="480"></iframe>
            </section>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
