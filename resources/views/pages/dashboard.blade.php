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
                <h4 id="totalUser" class="card-title">{{ $registeredUser }}</h4>
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
                <h4 id="totalManager" class="card-title">{{ $manager }}</h4>
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
                <h4 id="totalAdmin" class="card-title">{{ $admin }}</h4>
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
                <h4 id="totalStaff" class="card-title">{{ $archivist }}</h4>
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
            <div class="card-title">Persentase total Arsip 
                <p id="totalArsipSigned" hidden>{{ $arsipsigned }}</p>
                <p id="totalArsipDiproses" hidden>{{ $arsipdiproses }}</p>
                <p id="totalArsipDitolak" hidden>{{ $arsipditolak }}</p>
            </div>
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
            <div class="card-title">Jumlah total Arsip</div>
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