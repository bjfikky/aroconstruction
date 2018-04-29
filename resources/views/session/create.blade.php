@extends('layouts.master')

@section('content')

    <div id="content">
        <div class="entry-content">

            <div class="page-title">
                <div class="container">
                    <h1>Login</h1>
                </div>
            </div>

            <div class="page-content">
                <section class="top-about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <form method="POST" action="/sign-in">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id=""  placeholder="Enter email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control"  placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>





        </div>
    </div>

@endsection