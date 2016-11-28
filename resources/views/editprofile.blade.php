@extends('layouts.master')

@section('Form')
<!-- this script displays the value of the travel radius slider -->
<script>
function updateTextInput(val) {
          document.getElementById('textInput').value=val; 
        }
</script>

<?php 
     if(Auth::check()){
     $id = Auth::id(); 

    $sql = DB::table('business_users_mst')->select('name', 'email', 'mobile_number', 'post_code', 'dob', 'avatar')->where('id', '=', $id)->get();
    
    $name = $sql[0]->name;
    $email = $sql[0]->email;
    $telephone = $sql[0]->mobile_number;
    $postcode = $sql[0]->post_code;
    $dob = $sql[0]->dob;
    $avatar = $sql[0]->avatar;
    }
?>

<form class="form-horizontal" action="{{ url('/editprofile/') }}" method="post">
  <fieldset>
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-6">
        <input type="text" name="name" class="form-control" id="inputName" value="<?php echo $name ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="username" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-6">
        <input type="text" name="username" class="form-control" id="username" value="">
      </div>
    </div>
    <div class="form-group">
      <label for="avatar" class="col-lg-2 control-label">Avatar</label>
      <div class="col-lg-3">
        <input type="file" name="avatar" class="form-control" id="avatar" value="<?php echo $avatar ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="dob" class="col-lg-2 control-label">Date of Birth</label>
      <div class="col-lg-6">
        <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $dob ?>">
      </div>
      </div>
 
      <div class="form-group">
      <label for="inputTel" class="col-lg-2 control-label">Contact Telephone</label>
      <div class="col-lg-6">
        <input type="telephone" name="telephone" class="form-control" id="inputTel" value="<?php echo $telephone ?>">
      </div>
        <br>
      </div>
    <div class="form-group">
      <label for="inputPostcode" class="col-lg-2 control-label">Post Code</label>
      <div class="col-lg-6">
         <input type="postcode" name="postcode" class="form-control" id="inputPostcode" value="<?php echo $postcode ?>">
      </div>
        <br>
      </div>
       <div class="form-group">
      <div class="col-lg-10">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
        <br>
      </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
@endsection