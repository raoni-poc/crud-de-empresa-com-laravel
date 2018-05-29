@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Criar Empresa</div>

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


@push('scripts')
<script type="application/javascript">
$(document).ready(function () {
    $('#fieldset_master').prop( "disabled", false );
    $('#button_submit').removeAttr( "style");
})
</script>
@endpush