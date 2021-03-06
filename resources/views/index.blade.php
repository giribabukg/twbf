@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Users</h1>
@stop

@section('adminlte_css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('public/vendor/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <style type="text/css">
  	.card {
  		width: 1600px;
  	}
  </style>
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
													<th>No.</th>
				                  <th>Name</th>
				                  <th>Email</th>
				                  <th>Father Name</th>
				                  <th>Gender</th>
				                  <th>DOB</th>
				                  <th>Address</th>
				                  <th>WhatsApp No</th>
				                  <th>District</th>
				                  <th>Constituency</th>
				                  <th>Ward No</th>
				                  <th>Voter ID</th>
				                  <th>Registered On</th>
				                </tr>
				                </thead>
				                <tbody>
												 @foreach ($users as $user)
					                <tr>
														<td>{{ ++$i }}</td>
					                  <td>{{ $user -> name}}</td>
					                  <td>{{ $user -> email}}</td>
					                  <td>{{ $user -> father_name}}</td>
					                  <td>{{ $user -> gender}}</td>
					                  <td>{{ $user -> dob}}</td>
					                  <td>{{ $user -> address}}</td>
					                  <td>{{ $user -> whatsapp_no}}</td>
					                  <td>{{ $user -> district}}</td>
					                  <td>{{ $user -> constituency}}</td>
					                  <td>{{ $user -> ward_no}}</td>
					                  <td>{{ $user -> voter_id}}</td>
					                  <td>{{ $user -> created_at}}</td>
					                </tr>
					                @endforeach
				                </tbody>
				              </table>
				              {!! $users->links() !!}
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
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@stop