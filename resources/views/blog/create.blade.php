@extends('layouts.master')

@section('content')

    <div id="content">
        <div class="entry-content">

            <div class="page-title">
                <div class="container">
                    <h1>New Blog Post</h1>
                </div>
            </div>

            <div class="breadcrumbs">
                <div class="container">
                    <ul class="crumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li> <span>/</span>
                        <li class="active"> New Blog Post</li>
                    </ul>
                </div>
            </div>

            <div class="page-content">
                <section class="top-about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="/blog" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Title</label>
                                        <input name="title" type="text" class="form-control" id="exampleInputPassword1" placeholder="Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" onchange="readURL(this);">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <textarea name="body" class="form-control" name="" id="" cols="30" rows="20"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">POST</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <img id="post-image" src="http://placehold.it/750x631" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>

@endsection

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#post-image')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }


</script>