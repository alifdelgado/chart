@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header bg-info text-white shadow-lg">
                    <h3 class="text-center">New Product</h3>
                </div>
                <div class="card-body">
                    <add-product-component></add-product-component>
                </div>
            </div>
        </div>
    </div>
@stop
