<div class="col-md-3 col-xs-12">
<?php

//dd(request()->path());
?>
    <div class="list-group mt-5">
{{--        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">--}}
{{--            The current link item--}}
{{--        </a>--}}
        <a href="{{url('/home')}}" class="list-group-item list-group-item-action {{request()->path() == 'home' ? 'active' : ''}}">Dashboard</a>
        <a href="{{route('users.create')}}" class="list-group-item list-group-item-action {{request()->path() == 'users/create' ? 'active' : ''}}">Add new User</a>
        <a href="{{ route('users.index') }}" class="list-group-item list-group-item-action {{request()->path() == 'users' ? 'active' : ''}}">View all Users</a>

        <a href="{{route('shops.create')}}" class="list-group-item list-group-item-action {{request()->path() == 'shops/create' ? 'active' : ''}}">Add new Shop</a>
        <a href="{{route('shops.index')}}" class="list-group-item list-group-item-action {{request()->path() == 'shops' ? 'active' : ''}}">View all Shops</a>

        <a href="{{route('shopStaff.create')}}" class="list-group-item list-group-item-action {{request()->path() == 'shopStaff/create' ? 'active' : ''}}">Assign shop to staff</a>
        <a href="{{route('shopStaff.index')}}" class="list-group-item list-group-item-action {{request()->path() == 'shopStaff' ? 'active' : ''}}">View Shop Staff</a>

        <a href="{{route('products.create')}}" class="list-group-item list-group-item-action {{request()->path() == 'products/create' ? 'active' : ''}}">Add Product</a>
        <a href="{{route('products.index')}}" class="list-group-item list-group-item-action {{request()->path() == 'products' ? 'active' : ''}}">View all products</a>
{{--        <a href="#" class="list-group-item list-group-item-action">Add Balance</a>--}}
    </div>
</div>
