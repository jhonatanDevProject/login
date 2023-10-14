@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Hi boss!
                    Hi {{ auth('admin')->user()->name }}!
                    {{-- Aquí se muestra el nombre del administrador --}}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection