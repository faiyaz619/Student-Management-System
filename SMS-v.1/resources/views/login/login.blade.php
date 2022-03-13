@extends('master.front.master')
@section('title')
    Login Page
@endsection
@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Login Form</div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                               <div class="row">
                                    <label class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <label class="col-md-3">Possword</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="Submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection