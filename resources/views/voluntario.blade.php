@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Voluntario</div>

                <div class="card-body">
                    Voluntarios
                </div>
                <div class="card-body"><pre>@json($voluntarios)</pre></div>
            </div>
        </div>
    </div>
</div>
@endsection
