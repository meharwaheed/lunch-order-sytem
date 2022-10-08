<div class="col-md-3 col-xs-12">
    <div class="list-group mt-5">
        <a href="{{url('/account')}}" class="list-group-item list-group-item-action {{request()->path() == 'account' ? 'active' : ''}}">Add Balance</a>
        <a href="{{url('/setting')}}" class="list-group-item list-group-item-action {{request()->path() == 'setting' ? 'active' : ''}}">Update Profile</a>
        <a href="{{url('my-orders')}}" class="list-group-item list-group-item-action {{request()->path() == 'my-orders' ? 'active' : ''}}">My Orders</a>
    </div>
</div>
