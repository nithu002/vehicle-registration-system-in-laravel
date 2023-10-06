<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href={{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset('assets/dist/css/adminlte.min.css') }}>
</head>
@extends('layouts.main')


@section('sidebar')

<li class="nav-item ">
    <a href={{ url('home') }} class="nav-link active">
        <img src=" {{ asset('assets/img/icons/baseline_leaderboard_white_18dp.png') }}"></img>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link ">
        <img src=" {{ asset('assets/img/icons/baseline_view_module_white_18dp.png') }}"></img>
        <p>
            Request

            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href={{ url('requests') }} class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Vehicle Requests</p>
            </a>
        </li>

    </ul>
</li>

<li class="nav-item ">
    <a href="#" class="nav-link ">
        <img src="{{ asset('assets/img/icons/baseline_dns_white_18dp.png') }}"></img>
        <p>
            Vehicle info
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href={{ url('add_vechile') }} class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New Vehicle </p>
            </a>
        </li>

    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <img src="{{ asset('assets/img/icons/baseline_dashboard_customize_white_18dp.png') }}"></img>
        <p>
            Users
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href={{ url('staff') }} class="nav-link  ">
                <i class="far fa-circle nav-icon"></i>
                <p> Staff Details</p>
            </a>
        </li>
        <li class="nav-item">
            <a href={{ url('system_users') }} class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>System Users</p>
            </a>
        </li>
        <li class="nav-item">
            <a href={{ url('department') }} class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Department</p>
            </a>
        </li>
        <li class="nav-item">
            <a href={{ url('budget') }} class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Budget</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item ">
    <a href="#" class="nav-link">
        <img src="{{ asset('assets/img/icons/outline_poll_white_18dp.png') }}"></img>
        <p>
            Reports
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item ">
            <a href={{ url('by_user') }} class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>By User</p>
            </a>
        </li>

        <li class="nav-item">
            <a href={{ url('by_vehicle') }} class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>By Vehicle</p>
            </a>
        </li>
        <li class="nav-item">
            <a href={{ url('by_department') }} class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>By Department</p>
            </a>
        </li>
    </ul>
</li>

@endsection


@section('main')

<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>150</h3>

          <p>New Orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>

          <p>Bounce Rate</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>44</h3>

          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>65</h3>

          <p>Unique Visitors</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>

@endsection




  <!-- jQuery -->
  <script src={{ asset('assets/plugins/jquery/jquery.min.js') }}></script>
  <!-- Bootstrap 4 -->
  <script src={{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
  <!-- AdminLTE App -->
  <script src={{ asset('assets/dist/js/adminlte.min.js') }}></script>


  </body>
  </html>
