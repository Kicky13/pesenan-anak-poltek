@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div  class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="m-t-0 header-title"><b>{{$question->question}}</b></h4>
                                            <form role="form">
                                                <a href="{{$yes}}" class="btn btn-primary">Iya</a>
                                                <a href="{{$no}}" class="btn btn-danger">Tidak</a>
                                            </form>
                                        </div><!-- end col -->

                                    </div><!-- end row -->
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
