@extends('layouts.app')

@section('content')
    <section id="main-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="stat-widget-two">
                        <div class="stat-content">
                            <div class="stat-text">Today Expenses </div>
                            <div class="stat-digit"> <i class="fa fa-usd"></i>8500</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sales Overview</h4>
                        <div id="morris-bar-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

