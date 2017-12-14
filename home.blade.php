@extends('layouts.app')

@section('profil')
<div class="profile clearfix">
  <div class="profile_info">
    <span>Welcome,</span>
      <h2>{{ Auth::user()->name }}</h2>
  </div>
</div>
@endsection

@section('sidebar')
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> My room <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
    </ul>
  </div>
  <div>
                        <a href="{{ route('Acara.create') }}" class="btn btn-primary">Tambah Acara</a>
                        <a href="{{ route('Notulensi.create')}}" class="btn btn-primary"> Tambah Notulensi </a>
                    </div>
</div>
@endsection

@section('footer_sidebar')
<div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
@endsection

@section('content')
<!-- START PAGE CONTAINER -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>My Room</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="bs-glyphicons">
                          <ul class="bs-glyphicons-list">
                            <li>
                              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                              <span class="glyphicon-class">Add Room</span>
                            </li>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
