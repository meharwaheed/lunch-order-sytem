<div class="col-md-3 col-xs-12">
    <div class="list-group mt-5">
        <a href="{{url('/items')}}" class="list-group-item list-group-item-action {{request()->path() == 'items' ? 'active' : ''}}">Add Product to Menu</a>
        <a href="{{url('/menu_management')}}" class="list-group-item list-group-item-action {{request()->path() == 'menu_management' ? 'active' : ''}}">Product Management</a>
        <a href="{{route('shoptime.index')}}" class="list-group-item list-group-item-action {{request()->path() == 'shoptime' ? 'active' : ''}}">Change Shop Timings</a>
        <a href="{{ url('/my-shop-orders') }}" class="list-group-item list-group-item-action {{request()->path() == 'my-shop-orders' ? 'active' : ''}}">View Shop Orders</a>
    </div>
</div>
