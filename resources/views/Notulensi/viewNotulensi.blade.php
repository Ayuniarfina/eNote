@extends('layouts.sidebar')

@section('content')
<div class="right_col" role="main">
  <div class="">

    <div class="page-title">
      <div class="title_left">
        <a href="{{ url('/room') }}"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
        <h3>Notulensi <small></small></h3>
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
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <?php foreach ($notulensi as $notulensis ): ?>
            <h2><?php echo $notulensis->judul; ?></h2>

            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <!-- /MAIL LIST -->

              <!-- CONTENT MAIL -->
              <div class="col-sm-12 mail_view">
                <div class="inbox-body">
                  <div class="mail_heading row">
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-4 text-right">
                      <p class="date"><?php echo $notulensis->created_at; ?></p>
                    </div>
                  </div>

                  <div class="view-mail">
                    <p><b>Tempat    : </b><?php echo $notulensis->tempat;?></p>
                    <p><b>Topik     : </b><?php echo $notulensis->topik;?></p>
                    <p><b>Moderator : </b><?php echo $notulensis->moderator;?></p>
                    <p><b>Jumlah    : </b><?php echo $notulensis->jumlah;?></p>
                    <h4>Kesimpulan  : </h4>
                    <p><?php echo $notulensis->kesimpulan;?></p>
                  </div>

                  <div class="btn-group">
                    <button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Reply</button>
                    <button class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Forward"><i class="fa fa-share"></i></button>
                    <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>
                    <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
                  </div>
                </div>

              </div>
              <!-- /CONTENT MAIL -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
@endsection
