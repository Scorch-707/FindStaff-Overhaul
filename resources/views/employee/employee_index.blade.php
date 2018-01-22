@extends('layouts.app')
@section('content')
<h2>
  &nbsp;Employees
</h2>
<hr>
	<div class = "col-md-3 col-md-offset-9">
  <a href = "{{ route('employees.create') }}" class = "btn but btn-md pull-right">New Employee</a>
</div>

<br/>
<br/>

<div class="container-fluid">
  <div class = "panel-default panel">
    <div class="panel-heading" id="heading">
      List of Employees
    </div>
    <div class="panel-body">
      <table class="table table-responsive table-striped cell-border table-bordered" id = "cs_table" style="width: 100%;">
        <thead>
          <tr>
            <td>
              Name
            </td>
            <td>
              Roles
            </td>
            <td>
              Action
            </td>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>

@endsection
@push('styles')
<style>
	.class-employee
	{
		border-left: 10px solid #8ddfcc;
		background-color:rgba(128,128,128,0.1);
		color: #fff;
	}
</style>
@endpush

@push('scripts')
<script type="text/javascript">

	$('#collapse4').addClass('in');
	$('#employeecollapse').addClass('in');

  var data;
  var current_route = "";
  $(document).ready(function(){
    var cstable = $('#cs_table').DataTable({
      processing: false,
      serverSide: false,
      deferRender: true,
      ajax: '{{ route("em.data") }}',
      columns: [
      { data: 'firstName' },
      { data: 'roles',
      "render": function(data, type, row){
        return data.split(",").join("<br/>");}
      },
      {
        data: 'action',
        orderable: false,
        searchable: false
      }
      ],
    });

    $(document).on('click', '.view-employee', function(e){
      e.preventDefault();
      window.location.href = "{{ route('employees.index') }}/" + $(this).closest('tr').find('.employee-id').val() + "/view";
    })
    $(document).on('click', '.edit-employee', function(e){
      e.preventDefault();
      window.location.href = "{{ route('employees.index')}}/" + $(this).closest('tr').find('.employee-id').val() + "/edit";
    })
  })
</script>
@endpush
