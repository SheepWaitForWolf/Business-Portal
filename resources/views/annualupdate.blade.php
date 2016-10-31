@extends('layouts.master')

@section('Title')
Annual Detail Check
@stop

@section('Content')
<br>
<br>
<div class="container">
	<div class="col-md-10">
		<p> <strong>Annual Detail Checker </strong><br>
			<br>
		
		This is the place where you can check that the records we keep are up to date and accurate. This is planned to replace
		the paper form that is normally sent home with children each year. Please ensure that the details we have are correct for you.
		<br>
		<br>
	</div>


	@foreach ($children as $child)
  <div class="col-lg-3" id="child{{$child->child_id}}">
    <div class="box box-solid box-success">
      <div class="box-header with-border">
       <h3 class="box-title">{{ $child->f_name }}  {{$child->l_name}}</h3>
         <div class="box-tools pull-right">
           <!-- Buttons, labels, and many other things can be placed here! -->
          <!-- Here is a label for example -->
          <span class="label label-primary">#{{$child->child_id}}</span>
        </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
        <ul class="list-unstyled">
          <li>Date of Birth : {{ $child->dob}} </li>
          <li>Gender : {{ $child->gender}}</li>
          <li>School : {{ $child->school}} </li>
          <li>Class : {{ $child->class_level}}</li>
          <li>Attendance : </li>
        </ul>
      </div><!-- /.box-body -->

  <div class="box-footer">

    <button class="btn btn-warning btn-xs btn-detail open-modal pull-center" value={{$child->child_id}}>Edit</button>
    <button class="btn btn-danger btn-xs btn-delete delete-child pull-right" value={{$child->child_id}}>Delete</button>
  </div><!-- box-footer -->

    </div><!-- /.box -->
 </div>
 @endforeach 




</div>




</div>
@endsection

@section('Modal')
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Amend Details</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmchilds" action="{{ url('/registration/addchild') }}" method="post" name="frmchilds" class="form-horizontal" novalidate="">
                                <div class="form-group error">
                                    <label for="f_name" class="col-sm-3 control-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="f_name" name="f_name" placeholder="First Name" value="">
                                    </div>
                                </div>
                                
                                <div class="form-group error">
                                    <label for="l_name" class="col-sm-3 control-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="l_name" name="l_name" placeholder="Last Name" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="gender" class="col-sm-3 control-label">Gender</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="gender" name="gender" placeholder="gender" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="dob" class="col-sm-3 control-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="school" class="col-sm-3 control-label">School</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="school" name="school" placeholder="Abbotswell School" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="class_level" class="col-sm-3 control-label">Class Level</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="class_level" name="class_level" placeholder="S4" value="">
                                    </div>
                                </div>
                                <input type="hidden" id="child_id" name="child_id">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection