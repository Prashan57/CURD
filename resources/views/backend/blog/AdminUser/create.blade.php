@extends('layouts.backend.dashboard')

@section('title',"Blog | Admin User")

@section('content')
    <!-- Form Styling -->
    <link rel="stylesheet" href="/backend/css/from.css">
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blog<br/>
                <small>New Admin User</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href=" {{ url("/home") }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route("blog.index") }}">Blog</a>
                </li>
                <li class="active">Add new admin user</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body ">

                            <form action="{{ route('AdminUser.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="caption">Username :</label>
                                <input type="text" name="name" id="name" required>
                                <label for="location">Photo / Featured Image :</label>
                                <input type="file" name="image">
                                <hr>
                                <input type="submit" value="SUBMIT">
                            </form>
                        </div>
                        <!-- /.box-body -->

                    </div>

                    <!-- /.box -->
                </div>
            </div>
            <!-- ./row -->
        </section>
    </div>
@endsection

@section("script")
    <script type="text/javascript">
        $("ul.pagination").addClass("no margin pagination-sm");
    </script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@endsection
