@extends('layouts.website')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('user.sidebar')
            <div class="col-md-8">
                <div class="card mt-5 p-5">
                    <div class="col-md-12 px-2">
                        <h3 class="text-center">Add Balance</h3>
                        <div class="fs-5  text-center">Available Balance: <span class="">$ {{auth()->user()->balance == null? '0' : auth()->user()->balance}}</span></div>
                    </div>
                    <div class="panel panel-default credit-card-box">
                        <div class="panel-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    <strong>Success!</strong> {{session()->get('success')}}
                                </div>
                            @endif
                            @if (session()->has('fail-message'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    <strong>Error!</strong> {{session()->get('fail-message')}}
                                </div>
                            @endif

                            <form
                                role="form"
                                action="{{route('stripePost')}}"
                                method="post"
                                class="require-validation"
                                data-cc-on-file="false"
                                id="payment-form">
                                @csrf
                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

                                <div class='form-row row'>
                                    <div class='col-xs-12 form-group required'>
                                        <label class='control-label'>Enter Amount</label>
                                        <input class="form-control @error('amount') is-invalid @enderror"   name="amount" type='number'>
                                        @error('amount')
                                        <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class='form-row row mt-3'>
                                    <div class='col-xs-12 form-group required'>
                                        <label class='control-label'>Card Number</label>
                                        <input autocomplete='off' name="card_last4" class='form-control card-number' maxlength="16" type='text'>
                                        @error('card_last4')
                                        <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                                        @enderror
                                    </div>
                                </div>

                                <div class='form-row row mt-3'>
                                    <div class='col-12 form-group cvc required'>
                                        <label class='control-label'>CVC</label>
                                        <input autocomplete='off'  maxlength="3" name="cvc" class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                        @error('cvc')
                                        <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class='col-12 mt-3 form-group expiration required'>
                                        <label class='control-label'>Expiration Month</label>
                                        <input  maxlength="2" name="card_exp_month" class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                        @error('card_exp_month')
                                        <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class='col-12 mt-3 form-group expiration required'>
                                        <label class='control-label'>Expiration Year</label>
                                        <input  maxlength="4" name="card_exp_year" class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                        @error('card_exp_year')
                                        <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-12">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Deposit Money</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
