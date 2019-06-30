@extends('layouts.app')

@section('content')

    <div class="page-main">
        @include('partials._topnav')
        @include('partials._navbar')
        <div class="app-content  my-3 my-md-5">
            <div class="side-app">
                <div class="page-header">
                    <h4 class="page-title">დაჯავშნა</h4>
                    <ol class="breadcrumb">

                    </ol>
                </div>
                <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 card-title">შევავსოთ დაჯავშნის ფორმა</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Enter Name</label>
                                <input type="text" class="form-control" name="example-text-input" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Disabled</label>
                                <input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled text area.." value="" disabled="">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Readonly</label>
                                <input type="text" class="form-control" name="example-disabled-input" placeholder="Read Only Text area." value="Read Only Text area. " readonly="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Valid Email</label>
                                <input type="text" class="form-control is-valid state-valid" name="example-text-input-valid" placeholder="Valid Email..">
                            </div>
                            <div class="form-group m-0">
                                <label class="form-label">Invalid Number</label>
                                <input type="text" class="form-control is-invalid state-invalid" name="example-text-input-invalid" placeholder="Invalid Number..">
                                <div class="invalid-feedback">Invalid feedback</div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="example-password-input" placeholder="Password..">
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group mb-0">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" name="example-textarea-input" rows="4" placeholder="text here.."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            </div>
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                            Copyright © 2018 - 2019 <a href="#">Spain</a>. Designed by <a href="#">Spruko</a> All rights reserved.
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection