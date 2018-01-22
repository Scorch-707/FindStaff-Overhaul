<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\EmployeeType;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatatablesController extends Controller
{

    public function et_datatable(Request $request){
      $isActive = $request->isActive;
      if ($isActive == null){
        $ets = EmployeeType::select(['id', 'name', 'description', 'created_at']);

        return Datatables::of($ets)
        ->addColumn('action', function ($et){
          return
          '<button value = "'. $et->id .'" style="margin-right:10px;" class = "btn btn-md btn-primary edit">Update</button>'.
          '<button value = "'. $et->id .'" class = "btn btn-md btn-danger deactivate">Deactivate</button>';
        })
        ->editColumn('id', '{{ $id }}')
        ->make(true);
      }else{
        $ets = DB::table('employee_types')
        ->select('id','name', 'description', 'created_at', 'deleted_at')
        ->where('deleted_at','!=',null)
        ->get();

        return Datatables::of($ets)
        ->addColumn('status', function ($ets){
          if ($ets->deleted_at == null)
          {
            return 'Active';
          }else{
            return  'Inactive';
          }

        })
        ->addColumn('action', function ($ets){
          return
          '<button value = "'. $ets->id .'" class = "btn btn-md btn-success activate">Activate</button>';
        })

        ->editColumn('id', '{{ $id }}')
        ->make(true);
      }
    }


    	public function employee_datatable(){
    		$employees = DB::select("SELECT e.id, e.firstName, e.middleName, e.lastName, GROUP_CONCAT(t.name ORDER BY t.name) AS roles FROM employees e INNER JOIN employee_roles r ON e.id = r.employee_id LEFT JOIN employee_types t ON t.id = r.employee_type_id GROUP BY e.id");
    		return Datatables::of($employees)
    		->editColumn('firstName', '{{ $firstName . " " .$middleName . " ". $lastName }}')
    		->removeColumn('middleName')
    		->removeColumn('lastName')
    		->addColumn('action', function ($employee){
    			return
    			"<button class = 'btn btn-info view-employee' title = 'View'><span class = 'fa fa-eye'></span></button>
    			<button class = 'btn btn-primary edit-employee' title = 'Edit'><span class = 'fa fa-edit'></span></button>".
    			"<input type = 'hidden' value = '" . $employee->id . "' class = 'employee-id' />";
    		})
    		->editColumn('id', '{{ $id }}')
    		->make(true);
    	}

}
