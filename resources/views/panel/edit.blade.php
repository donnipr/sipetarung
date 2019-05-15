@extends('layouts.master')
@section('content')

<head>
<title></title>
<script type="text/javascript" src="{{ asset('tiny\assets\js\tinymce\tinymce.min.js') }}"></script>

<script type="text/javascript">
    tinymce.init({
        selector : "textarea",
        invalid_elements : "span"
    });
</script>

</head>
<body>
<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left greentea">
                <h3>
                    Dashboard <small>Data Tanah Pemda </small>
                </h3>
            </div>
 
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                       <br/><br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 class="greentea">Update Data</h2>
                        <ul class="nav navbar-right panel_toolbox">
                           <a href="{{ route('certifi.index') }}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="" data-original-title="List View"><i class="fa fa-reply-all"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
                        {{ Form::model($data, ['route'=>['certifi.update', $data->id], 'method'=>'PATCH','enctype' => 'multipart/form-data','files' => 'true']) }}
                        <div class="box-body">
                            
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('desa', 'Desa') }}
                            {{ Form::text('desa', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('kec', 'Kecamatan') }}
                            {{ Form::text('kec', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('nosertf', 'No Sertifikat') }}
                            {{ Form::text('nosertf', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            {{ Form::label('hak', 'Jenis Hak') }}
                                <select name="hak" class="form-control">
                                @if($data->hak == 'Hak Milik')
                                <option value="Hak Milik">Hak Milik</option>
                                <option value="Hak Guna Usaha">Hak Guna Usaha</option>
                                <option value="Hak Guna Bangunan">Hak Guna Bangunan</option>
                                <option value="Hak Pakai">Hak Pakai</option>
                                <option value="Hak Pengelolaan">Hak Pengelolaan</option>
                                <option value="Hak Wakaf">Hak wakaf</option>
                                @elseif($data->hak == 'Hak Guna Usaha')
                                <option value="Hak Guna Usaha">Hak Guna Usaha</option>
                                <option value="Hak Milik">Hak Milik</option>
                                <option value="Hak Guna Bangunan">Hak Guna Bangunan</option>
                                <option value="Hak Pakai">Hak Pakai</option>
                                <option value="Hak Pengelolaan">Hak Pengelolaan</option>
                                <option value="Hak Wakaf">Hak wakaf</option>
                                @elseif($data->hak == 'Hak Guna Bangunan')
                                <option value="Hak Guna Bangunan">Hak Guna Bangunan</option>
                                <option value="Hak Milik">Hak Milik</option>
                                <option value="Hak Guna Usaha">Hak Guna Usaha</option>
                                <option value="Hak Pakai">Hak Pakai</option>
                                <option value="Hak Pengelolaan">Hak Pengelolaan</option>
                                <option value="Hak Wakaf">Hak wakaf</option>
                                @elseif($data->hak == 'Hak Pakai')
                                <option value="Hak Pakai">Hak Pakai</option>
                                <option value="Hak Guna Bangunan">Hak Guna Bangunan</option>
                                <option value="Hak Milik">Hak Milik</option>
                                <option value="Hak Guna Usaha">Hak Guna Usaha</option>
                                <option value="Hak Pengelolaan">Hak Pengelolaan</option>
                                <option value="Hak Wakaf">Hak wakaf</option>
                                @elseif($data->hak == 'Hak Pengelolaan')
                                <option value="Hak Pengelolaan">Hak Pengelolaan</option>
                                <option value="Hak Pakai">Hak Pakai</option>
                                <option value="Hak Guna Bangunan">Hak Guna Bangunan</option>
                                <option value="Hak Milik">Hak Milik</option>
                                <option value="Hak Guna Usaha">Hak Guna Usaha</option>
                                <option value="Hak Wakaf">Hak wakaf</option>
                                @elseif($data->hak == 'Hak wakaf')
                                <option value="Hak Wakaf">Hak wakaf</option>
                                <option value="Hak Pengelolaan">Hak Pengelolaan</option>
                                <option value="Hak Pakai">Hak Pakai</option>
                                <option value="Hak Guna Bangunan">Hak Guna Bangunan</option>
                                <option value="Hak Milik">Hak Milik</option>
                                <option value="Hak Guna Usaha">Hak Guna Usaha</option>
                                @endif
                            </select>
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                            </div>
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('luas', 'Luas Tanah') }}
                            {{ Form::text('luas', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('penggunaan', 'Penggunaan') }}
                            {{ Form::text('penggunaan', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('latlong', 'Latlong') }}
                            {{ Form::text('latlong', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('alamat', 'Alamat') }}
                            {{ Form::text('alamat', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('maprtrw', 'Peruntukan PTRW') }}
                            {{ Form::text('maprtrw', null, ['class'=>'form-control']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div>
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            {{ Form::label('featured_image', 'Sertifikat (.pdf)') }}
                            {{ Form::file('featured_image', null, ['class'=>'form-control', 'placeholder'=>'']) }}
                            {{ $errors->first('', '<p class="help-block"></p>') }}
                        </div><br/>                            
                        {{ Form::submit('Update',['class' => 'btn btn-success']) }}
                            </div>
                        {{ Form::close() }}  
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>
</body>
@endsection