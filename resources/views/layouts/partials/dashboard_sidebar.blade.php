<aside class="col-md-3">
    <!--   SIDEBAR   -->
    <ul class="list-group">
        <a class="list-group-item" href="#"> Dashboard</a>
        <a class="list-group-item" href="{{route('payments.show', $payment->id)}}"> My Subscriptions </a>
        <a class="list-group-item " href="{{route('payments.create')}}">Make Payment </a>
        <a class="list-group-item" href="#">Change Password </a>
    </ul>
    <br>
    <a class="btn btn-light btn-block" href="{{ route('logout.perform') }}"> <i class="fa fa-power-off"></i> <span class="text">Log out</span> </a> 
    <!--   SIDEBAR .//END   -->
</aside>
