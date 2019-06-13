@extends('layouts.app')

@section('title')
  Incoming List
@endsection

@section('content')

    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
      <ul class="page-breadcrumb">
        <li>
          <i class="fa fa-home"></i>
          <a href="index.html">Home</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="#">Incoming</a>
        </li>
      </ul>
    </div>
    <h3 class="page-title">
    Dashboard <small>reports & statistics</small>
    </h3>
    <!-- END PAGE HEADER-->
    <!-- BEGIN DASHBOARD STATS -->
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue-madison">
          <div class="visual">
            <i class="fa fa-envelope"></i>
          </div>
          <div class="details">
            <div class="number">
               1349
            </div>
            <div class="desc">
               Новые
            </div>
          </div>
          <a class="more" href="javascript:;">
          Новые входящие документы <i class="m-icon-swapright m-icon-white"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green-haze">
          <div class="visual">
            <i class="fa fa-envelope"></i>
          </div>
          <div class="details">
            <div class="number">
               549
            </div>
            <div class="desc">
               На исполнении
            </div>
          </div>
          <a class="more" href="javascript:;">
          Документы на исполнении <i class="m-icon-swapright m-icon-white"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple-plum">
          <div class="visual">
            <i class="fa fa-envelope"></i>
          </div>
          <div class="details">
            <div class="number">
               255
            </div>
            <div class="desc">
               Исполнено
            </div>
          </div>
          <a class="more" href="javascript:;">
          Исполнено <i class="m-icon-swapright m-icon-white"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red-intense">
          <div class="visual">
            <i class="fa fa-envelope"></i>
          </div>
          <div class="details">
            <div class="number">
               521
            </div>
            <div class="desc">
               Просрочено
            </div>
          </div>
          <a class="more" href="javascript:;">
          Просрочено <i class="m-icon-swapright m-icon-white"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- END DASHBOARD STATS -->
    <div class="clearfix">
    </div>
@endsection
