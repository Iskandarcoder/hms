<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hermes+') }}</title>

    <!-- Scripts & CSS -->
    @extends('layouts.assets')



</head>
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
      @include('nav')
      <div class="page-container">
      @include('sidebar')
            <div class="page-content-wrapper">
              <div class="page-content">
                @yield('content')
              </div>
            </div>
          </div>
      <!-- END CONTAINER -->
      <!-- BEGIN FOOTER -->
      <div class="page-footer">
      	<div class="page-footer-inner">
      		 2014 &copy; Metronic by keenthemes.
      	</div>
      	<div class="scroll-to-top">
      		<i class="icon-arrow-up"></i>
      	</div>
      </div>
</body>
</html>
