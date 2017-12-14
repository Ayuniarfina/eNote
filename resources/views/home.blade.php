@extends('layouts.sidebar')

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
                            <?php foreach ($acaras as $acara ): ?>
                              <li>
                                <a href=""><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
                                <a href="{{ route('room') }}"><span class="glyphicon-class"><?php echo $acara -> name; ?></span></a>
                              </li>
                            <?php endforeach; ?>
                            <li>
                              <a href="{{ route('Acara.create') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                              <a href="{{ route('Acara.create') }}"><span class="glyphicon-class">Add Room</span></a>
                            </li>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
