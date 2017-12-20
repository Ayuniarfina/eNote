@extends('layouts.sidebar')

@section('content')
<div class="right_col" role="main">
  <div class="">

    <div class="page-title">
      <div class="title_left">
        <a href="{{ URL::previous() }}"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
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
              <div class="btn-group">
                <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
              </div>
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

                  <div class="form-group">
                    <br>
                        <textarea id="message" placeholder="Tulis komentar kamu disini" required="" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="50" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>

                          <br/>
                          <span class="btn btn-primary">Kirim</span>
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
