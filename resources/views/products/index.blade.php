@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header bg-info text-white shadow-lg">
                    <h3 class="text-center">Products</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('products.create') }}" class="btn btn-success">Create Product</a>
                    <chart-component></chart-component>
                </div>
            </div>
        </div>
    </div>
@stop
