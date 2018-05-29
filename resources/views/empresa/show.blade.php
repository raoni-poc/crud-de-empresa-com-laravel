@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Empresas</div>

                    <div class="card-body">

                        <div class="container">
                            @include('empresa.form')
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
