@extends('layouts.app-master')

@section('content')
<section class="section-conten padding-y bg">


    <div class="container">
        <div class="row">
            @include('layouts.partials.dashboard_sidebar')
        <main class="col-md-9">
            <article class="card">
            <header class="card-header">
                <strong class="d-inline-block mr-3">Logged in as: </strong>
                <span>Ian</span>
            </header>
            <div class="card-body">
                <div class="row"> 
                    <div class="col-md-6">
                        <div class="card text-align: center;">
                            <div class="card-body">
                                <h5 class="card-title">Total Subscriptions</h5>
                                <h4>5</h4>
                                <a href="#">View orders</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="text-align: center;">
                            <div class="card-body">
                                <img src="https://www.w3schools.com/howto/img_avatar.png" alt="User Profile Picture" width="50" height="50" style="border-radius: 50%;">
                                <p class="mb-0">ian@gmail.com</p> 
                                <p>070406960596</p> 

                            </div>
                        </div>
                    </div>
                </div> <!-- row.// -->
            </div> <!-- card-body .// -->
            
            </article> <!-- order-group.// --> 
        </main>
    </div> <!-- row.// -->
    </div>
    
    
    </section>
 @endsection