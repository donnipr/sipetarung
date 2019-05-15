@extends('layouts.master')
@section('content')


<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <a href="{{ route('certifi.index') }}" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="" data-original-title="List View"><i class="fa fa-reply-all"></i></a>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   
                    <span class="input-group-btn">
                     
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <!-- form input mask -->
              <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>DETAIL DATA</b></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        
                          <tr class="headings">
                            <th class="column-title greentea">Desa </th>
                          </tr>
                          <tr>
                             <td class=" "><b>{{ $data->desa}}</b></td>
                          </tr>
                            
                          <tr class="headings">
                            <th class="column-title greentea">Kecamatan </th>
                          </tr>
                          <tr>
                             <td class=" "><b>{{ $data->kec }}</b></td>
                          </tr>

                          <tr class="headings">
                            <th class="column-title greentea">No Sertifikat </th>
                          </tr>
                          <tr>
                             <td class=" "><b>{{ $data->nosertf }}</b></td>
                          </tr>

                          <tr class="headings">
                            <th class="column-title greentea">Jenis Tanah </th>
                          </tr>
                          <tr>
                             <td class=" "><b>{{ $data->hak }}</b></td>
                          </tr>

                          <tr class="headings">
                            <th class="column-title greentea">Luas </th>
                          </tr>
                          <tr>
                             <td class=" "><b>{{ $data->luas }}</b></td>
                          </tr>

                          <tr class="headings">
                            <th class="column-title greentea">Penggunaan </th>
                          </tr>
                          <tr>
                             <td class=" "><b>{{ $data->penggunaan }}</b></td>
                          </tr>

                          <tr class="headings">
                            <th class="column-title greentea">Latlong </th>
                          </tr>
                          <tr>
                             <td class=" "><b>{{ $data->latlong }}</b></td>
                          </tr>

                          <tr class="headings">
                            <th class="column-title greentea">Alamat </th>
                          </tr>
                          <tr>
                             <td class=" "><b>{{ $data->alamat }}</b></td>
                          </tr>

                          <tr class="headings">
                            <th class="column-title greentea">Peruntukan RTRW </th>
                          </tr>
                          <tr>
                             <td class=" "><b>{{ $data->maprtrw }}</b></td>
                          </tr>

                           <tr class="headings">
                            <th class="column-title greentea">Download File Sertifikat</th>
                          </tr>
                          <tr>
                             <td class=" "><b><a href="{{asset('storage/upload/'.$data->image)}}">{{ $data->image }}</a></b></td>
                          </tr>                  
                      </table>
                      </div>
                      <div class="ln_solid"></div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /form input mask -->

              <!-- form color picker -->
              <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>DOCUMENT</b></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal ">

                      <div class="form-group">
                        
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <embed src="{{asset('storage/upload/'.$data->image)}}" type="application/pdf" width="700" height="700"> </embed>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /form color picker -->
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection