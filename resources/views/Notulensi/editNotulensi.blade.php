@extends('layouts.sidebar')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <a href="{{ URL::previous() }}"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
                <h3>Edit Notulensi</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                     {!! Form::open(array('route' => ['Notulensi.update', $notulensi->id_notulensi], 'data-parsley-validate', 'class'=>'form-horizontal form-label-left',
                                     'id'=>'demo-form2', 'method'=>'PUT')) !!}
                                     
                    <div class="form-group">
                        <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Judul Notulensi') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('judul', $notulensi->judul,
                            array('required',
                                'class'=>'form-control')) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Tanggal') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::date('tanggal', $notulensi->tanggal,
                            array('required',
                                'class'=>'form-control')) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Tempat') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('tempat', $notulensi->tempat,
                            array('required',
                                'class'=>'form-control')) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Moderator') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('moderator', $notulensi->moderator,
                            array('required',
                                'class'=>'form-control')) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Topik Rapat') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('topik', $notulensi->topik,
                            array('required',
                                'class'=>'form-control')) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Jumlah Peserta') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::number('jumlah', $notulensi->jumlah,
                            array('required',
                                'class'=>'form-control')) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Kesimpulan') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::textarea('kesimpulan', $notulensi->kesimpulan,
                            array('required',
                                'class'=>'form-control')) !!}
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        {!! Form::submit('Edit',
                        array('class'=>'btn btn-primary')) !!}
                      </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
