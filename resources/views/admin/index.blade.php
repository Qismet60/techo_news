@extends('admin.main')
@section('main')
    <br><br><br>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-user-1"></i></div><strong>All Users</strong>
                            </div>
                            <div class="number dashtext-1">
                                60
                            </div>
                        </div>
                        <div class="progres">
                            <div><button class="btn btn-outline-warning">Show</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="fa fa-pencil"></i></div><strong>All Posts</strong>
                            </div>
                            <div class="number dashtext-1">
                                55
                            </div>
                        </div>
                        <div class="progres">
                            <div><button class="btn btn-outline-warning">Show</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="fa fa-pencil"></i></div><strong>All Category</strong>
                            </div>
                            <div class="number dashtext-1">
                                55
                            </div>
                        </div>
                        <div class="progres">
                            <div><button class="btn btn-outline-warning">Show</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
