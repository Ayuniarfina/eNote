@extends('layouts.sidebar')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <a href="{{ url('/room') }}"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
                <h3>Tambah Notulensi</h3>
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

                     {!! Form::open(array('route' => 'Notulensi.store', 'data-parsley-validate', 'class'=>'form-horizontal form-label-left',
                                     'id'=>'demo-form2')) !!}

                    <div class="form-group">
                        <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Judul Notulensi') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('judul', null,
                            array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Judul Notulensi')) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Tanggal') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::date('tanggal', null,
                            array('required',
                                'class'=>'form-control',
                                'placeholder'=>'dd/mm/yyyy')) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Tempat') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('tempat', null,
                            array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Tempat')) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Moderator') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('moderator', null,
                            array('required',
                                'class'=>'form-control',
                                'placeholder'=>'moderator')) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Topik Rapat') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('topik', null,
                            array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Topik Rapat')) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Jumlah Peserta') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::number('jumlah', null,
                            array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Jumlah Peserta')) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="control-label col-md-3 col-sm-3 col-xs-12">
                        {!! Form::label('Kesimpulan') !!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::textarea('kesimpulan', null,
                            array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Kesimpulan')) !!}
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        {!! Form::submit('Tambah',
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
