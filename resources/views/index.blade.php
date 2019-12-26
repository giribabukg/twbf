@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Users</h1>
@stop

@section('adminlte_css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('public/vendor/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
									<div class="box">
				            <div class="box-header">
				              <h3 class="box-title">Registered Users</h3>
				            </div>
				            <!-- /.box-header -->
				            <div class="box-body">
				              <table id="example2" class="table table-bordered table-hover">
				                <thead>
				                <tr>
				                  <th>Rendering engine</th>
				                  <th>Browser</th>
				                  <th>Platform(s)</th>
				                  <th>Engine version</th>
				                  <th>CSS grade</th>
				                </tr>
				                </thead>
				                <tbody>
				                <tr>
				                  <td>Trident</td>
				                  <td>Internet
				                    Explorer 4.0
				                  </td>
				                  <td>Win 95+</td>
				                  <td> 4</td>
				                  <td>X</td>
				                </tr>
				                <tr>
				                  <td>Trident</td>
				                  <td>Internet
				                    Explorer 5.0
				                  </td>
				                  <td>Win 95+</td>
				                  <td>5</td>
				                  <td>C</td>
				                </tr>
				                </tbody>
<!-- 				                <tfoot>
				                <tr>
				                  <th>Rendering engine</th>
				                  <th>Browser</th>
				                  <th>Platform(s)</th>
				                  <th>Engine version</th>
				                  <th>CSS grade</th>
				                </tr>
				                </tfoot>
 -->				              </table>
				            </div>
				            <!-- /.box-body -->
				          </div>
        				</div>
            </div>
        </div>
    </div>
@stop

@section('adminlte_js')
<!-- DataTables -->
<script src="{{ asset('public/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('public/vendor/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@stop