@extends('layouts.app-master')
@section('content')
<section class="section-conten padding-y bg">
    @include('layouts.partials.messages')

    <div class="container">
        <div class="row">
            @include('layouts.partials.dashboard_sidebar')
        <main class="col-md-9">
            <article class="card">
            <header class="card-header">
                <strong class="d-inline-block mr-3">Your subscription history </strong>
            </header>
            <div class="card-body">
                <div class="row"> 
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">order #</th>
                                    <th scope="col">Billing Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Order Total</th>
                                    <th scope="col">Date</th>

                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                    <th scope="row">058594540</th>
                                    <td>Ian Muhavi</td>
                                    <td>Ian Muhavi</td>
                                    <td>5000</td>
                                    <td>09-05-2022</td>

                                </tr>
                               
                            </tbody>
                          </table>
                    </div>
                </div> <!-- row.// -->
            </div> <!-- card-body .// -->
            
            </article> <!-- order-group.// --> 
        </main>
    </div> <!-- row.// -->
    </div>
    
    
    </section>

@endsection