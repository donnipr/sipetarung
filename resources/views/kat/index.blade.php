@extends('layouts.master')

@section('content')

<div class="right_col" role="main">
 
    <div class="">
        <div class="page-title">
            <div class="title_left greentea">
                <h3>
                    Dashboard <small>Data Tanah Pemda </small>
                </h3>
            </div>
 
            <div class="title_right">
           
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 class="greentea">List Data</h2>
                        <ul class="nav navbar-right panel_toolbox">
                           <a href="" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add Data"><i class="glyphicon glyphicon-plus"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->
                            <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No </th>
                            <th class="column-title">nama </th>
                            <th class="column-title">add </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php $no=1; ?>
                            @foreach($data as $key)
                          <tr class="even pointer">
                            <td class=" ">{{ $no++ }}</td>
                            <td class=" ">{{ $key->nama }}</td>
                            <td class=" ">{{ $key->add }}</td>
                            <td class=" last">
                                <a class="btn btn-success fa fa-eye" href="" data-toggle="tooltip" data-placement="left" title="" data-original-title="Show data">  </a>
                                <a class="btn btn-info fa fa-pencil-square-o" href="" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit">  </a>
                                <a href="" onclick="return confirm('Are you sure want to delete data selected?')" class="btn btn-danger fa fa-trash" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class=""></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      </div>
                        <!-- content ends here -->
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @if (flashMe()->ok())
        {!!  flashMe_flash() !!}
    @endif
@endsection