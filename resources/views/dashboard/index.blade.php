@extends('dashboard.layouts.main')

@section('content')

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-server"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Registrant</p>
                                            {{ $submission->all()->count() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-shield"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Pending</p>
                                            {{ $submission->pending()->count() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-check-box"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Approved</p>
                                            {{ $submission->approved()->count() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-cup"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Winners</p>
                                            {{ $submission->winners()->count() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-md-9"><h4 class="title">Latest User</h4></div>
                                    <div class="col-md-3 text-right">
                                        <a href="{{ route('registrants.index') }}">View All</a>
                                    </div>
                                </div>

                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    @foreach($submission->latest(3) as $submission)
                                        <li>
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <div class="avatar">
                                                        <img src="{{ asset('dashboard/img/faces/face-0.jpg') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    {{ $submission->name }}
                                                    <br>
                                                    <span class="text-muted">
                                                        <small>{{ $submission->approved ? 'Approved' : 'Pending' }}</small>
                                                    </span>
                                                </div>


                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-md-9"><h4 class="title">Approved User</h4></div>
                                    <div class="col-md-3 text-right">
                                        <a href="{{ route('registrants.approved') }}">View All</a>
                                    </div>
                                </div>

                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    @foreach($submission->approved(3) as $submission)
                                        <li>
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <div class="avatar">
                                                        <img src="{{ asset('dashboard/img/faces/face-0.jpg') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    {{ $submission->name }}
                                                    <br>
                                                    <span class="text-success"><small>Approved</small></span>
                                                </div>


                                            </div>
                                        </li>
                                    @endforeach
                                {{-- <li>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="avatar">
                                                <img src="{{ asset('dashboard/img/faces/face-1.jpg') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            Creative Tim
                                            <br>
                                            <span class="text-success"><small>Approved</small></span>
                                        </div>


                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="avatar">
                                                <img src="{{ asset('dashboard/img/faces/face-3.jpg') }}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            Flume
                                            <br>
                                           <span class="text-success"><small>Approved</small></span>
                                        </div>


                                    </div>
                                </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                     <div class="card card-user">
                            <div class="image">
                                <img src="{{ asset('dashboard/img/background.jpg') }}" alt="...">
                            </div>
                            <div class="content" style="min-height: 140px;">
                                <div class="author">
                                  <img class="avatar border-white" src="{{ asset('dashboard/img/faces/face-0.jpg') }}">
                                  <h4 class="title">Dharma Saputra<br>
                                     <small>Winner</small>
                                  </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop

