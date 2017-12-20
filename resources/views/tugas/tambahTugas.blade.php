@extends('layouts.sidebar')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <a href="{{ url('/home') }}"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
                <h3>Tambah Room Baru</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    {!! Form::open(array('route'=>'Tugas.store', 'data-parsley-validate', 'class'=>'form-horizontal form-label-left',
                                    'id'=>'demo-form2', 'method'=>'POST')) !!}

                    <div class="form-group">
                      <div class="control-label col-md-3 col-sm-3 col-xs-12">
                          {!! Form::label('Deskripsi')!!}
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('deskripsi', null,
                              array('required',
                                    'class'=>'form-control')) !!}
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
        </div>
@endsection
