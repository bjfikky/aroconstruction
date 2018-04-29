@extends('layouts.master')

@section('content')

    <div id="content">
        <div class="entry-content">

            <div class="page-title">
                <div class="container">
                    <h1>Dashboard <span class="pull-right logout-button"><a href="{{ action('SessionController@destroy') }}"><i class="fa fa-power-off" aria-hidden="true"></i></a></span></h1>
                </div>
            </div>

            <div class="page-content">
                <section class="top-about">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6">
                                <h5><a class="add-new-post"><i class="fa fa-plus" aria-hidden="true"></i><span> Add New</span></a></h5>
                                <ul class="list-group">
                                    <li class="list-group-item disabled"><h3>Blog Posts</h3></li>
                                    <a class="list-group-item">Dapibus ac facilisis in</a>
                                    <a class="list-group-item">Morbi leo risus</a>
                                    <a class="list-group-item">Porta ac consectetur ac</a>
                                    <a class="list-group-item">Vestibulum at eros</a>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item disabled">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </section>
            </div>





        </div>
    </div>

@endsection