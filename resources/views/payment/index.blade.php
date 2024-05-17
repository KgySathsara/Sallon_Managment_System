<!-- resources/views/payment/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>Services</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->topic }}</td>
                        <td>{{ $service->price }}</td>
                        <td>
                            <button class="btn btn-primary add-to-bill" data-id="{{ $service->id }}" data-title="{{ $service->topic }}" data-price="{{ $service->price }}">Add</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <h2>Payment Bill</h2>
            <table class="table" id="payment-bill-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="payment-bill-body">
                </tbody>
            </table>
            <h3>Total: <span id="total">{{ $total }}</span></h3>

            <button id="submit-payment" class="btn btn-success">Submit Payment</button>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush
