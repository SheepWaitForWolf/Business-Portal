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

        $sql = json_decode(json_encode(DB::table('users')->select('f_name')->where('id', '=', $id)->get()));
        $fname = $sql[0]->f_name;
        

        $sql2 = json_decode(json_encode(DB::table('users')->select('l_name')->where('id', '=', $id)->get()));
        $lname = $sql2[0]->l_name;

        $sql3 = json_decode(json_encode(DB::table('users')->select('type')->where('id', '=', $id)->get()));
        $type = $sql3[0]->type;

        $sql4 = json_decode(json_encode(DB::table('users')->select('artist')->where('id', '=', $id)->get()));
        $artist = $sql4[0]->artist;

        $sql5 = json_decode(json_encode(DB::table('users')->select('telephone')->where('id', '=', $id)->get()));
        $telephone = $sql5[0]->telephone;

        $sql6 = json_decode(json_encode(DB::table('users')->select('postcode')->where('id', '=', $id)->get()));
        $postcode = $sql6[0]->postcode;

        $sql7 = json_decode(json_encode(DB::table('users')->select('dob')->where('id', '=', $id)->get()));
        $dob = $sql7[0]->dob;

        $sql8 = json_decode(json_encode(DB::table('users')->select('travel_radius')->where('id', '=', $id)->get()));
        $travel_radius = $sql8[0]->travel_radius;

        $sql9 = json_decode(json_encode(DB::table('users')->select('avatar')->where('id', '=', $id)->get()));
        $avatar = $sql9[0]->avatar;
        }
?>

<form class="form-horizontal" action="{{ url('/editprofile/') }}" method="post">
  <fieldset>
    <div class="form-group">
      <label for="inputFirstName" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-6">
        <input type="text" name="f_name" class="form-control" id="inputFirstName" value="<?php echo $fname ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputLastName" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-6">
        <input type="text" name="l_name" class="form-control" id="inputLastName" value="<?php echo $lname ?>">
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
      <label for="doa" class="col-lg-2 control-label">Date of Birth</label>
      <div class="col-lg-6">
        <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $dob ?>">
      </div>
      </div>
      <div class="form-group">
      <label for="inputType" class="col-lg-2 control-label">Account Type</label>
      <div class="col-lg-6">
        <select name="type" class="form-control" id="inputType">
            <option value="1" <?php if($type == "1") echo "selected" ?> >Artist</option>
            <option value="2" <?php if($type == "2") echo "selected" ?> >Engineer</option>            
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputArtist" class="col-lg-2 control-label">Artist/Band Name</label>
      <div class="col-lg-6">
        <input type="artist" name="artist" class="form-control" id="inputArtist" value="<?php echo $artist ?>">
      </div>
        <br>
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
      <label for="travel_radius" class="col-lg-2 control-label">Travel Radius (miles)</label>
      <div class="col-lg-3">
        <input type="range" name="travel_radius" id="inputDistance" min="0" max="100" class="form-control" onchange="updateTextInput(this.value);">
      </div>
      <div class="col-lg-3">
        <input type="text" id="textInput" value="<?php echo $travel_radius ?>">
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