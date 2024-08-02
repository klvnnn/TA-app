@extends('layouts.app')

@section('content')
<div
class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
>
    <div>
        <h3 class="fw-bold mb-3">Dashboard</h3>
    </div>
</div>
<!-- Top Card -->
<div class="row">
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
        <div class="card-body">
            <div class="row align-items-center">
            <div class="col-icon">
                <div
                class="icon-big text-center icon-primary bubble-shadow-small"
                >
                <i class="fas fa-users"></i>
                </div>
            </div>
            <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                <p class="card-category">Register User</p>
                <h4 class="card-title">1,294</h4>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
        <div class="card-body">
            <div class="row align-items-center">
            <div class="col-icon">
                <div
                class="icon-big text-center icon-info bubble-shadow-small"
                >
                <i class="fas fa-user"></i>
                </div>
            </div>
            <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                <p class="card-category">Manager</p>
                <h4 class="card-title">1303</h4>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
        <div class="card-body">
            <div class="row align-items-center">
            <div class="col-icon">
                <div
                class="icon-big text-center icon-success bubble-shadow-small"
                >
                <i class="fas fa-user"></i>
                </div>
            </div>
            <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                <p class="card-category">Admin</p>
                <h4 class="card-title">1,345</h4>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
        <div class="card-body">
            <div class="row align-items-center">
            <div class="col-icon">
                <div
                class="icon-big text-center icon-secondary bubble-shadow-small"
                >
                <i class="far fa-user"></i>
                </div>
            </div>
            <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                <p class="card-category">Arsip Staff</p>
                <h4 class="card-title">576</h4>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- Surat & Arsip Chart -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
        <div class="card-header">
            <!-- Surat Chart -->
            <div class="card-title">Stats Surat Masuk & Surat Keluar</div>
        </div>
        <div class="card-body">
            <div class="chart-container">
            <canvas
                id="pieChart"
                style="width: 50%; height: 50%"
            ></canvas>
            </div>
        </div>
        </div>
    </div>
    <!-- Arsip Chart -->
    <div class="col-md-6">
        <div class="card">
        <div class="card-header">
            <div class="card-title">Stats Arsip</div>
        </div>
        <div class="card-body">
            <div class="chart-container">
            <canvas
                id="doughnutChart"
                style="width: 50%; height: 50%"
            ></canvas>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection