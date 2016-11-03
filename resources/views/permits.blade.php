@extends('layouts.master')

@section('Title')
Licenses & Permits
@endsection


@section('Content')
<h3>Licenses & Permits</h3>
<br>
@stop

@section('Form')
<form class="form-horizontal" action="{{ url('/feedback/') }}" method="post">
  <fieldset>
    <div class="form-group">
      <label for="inputFirstName" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <input type="text" name="f_name" class="form-control" id="inputFirstName" placeholder="First Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputLastName" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input type="text" name="l_name" class="form-control" id="inputLastName" placeholder="Last Name">
      </div>
    </div>
      <div class="form-group">
      <label for="inputCompany" class="col-lg-2 control-label">Company</label>
      <div class="col-lg-10">
        <input type="text" name="company" class="form-control" id="inputCompany" placeholder="Widgets INC">
      </div>
    </div>
    <div class="form-group">
      <label for="inputService" class="col-lg-2 control-label">Select License Type</label>
      <div class="col-lg-10">
        <select name="service" class="form-control" id="inputService">
            <option value="Taxi or Private Hire Operator">Taxi or Private Hire Operator</option>
            <option value="Taxi or Private Hire Driver">Taxi or Private Hire Driver</option>
            <option value="Window Cleaner">Window Cleaner</option>
            <option value="Temporary Road Closure">Temporary Road Closure</option>
            <option value="Street Trading">Street Trading</option>
            <option value="Street Cafes">Street Cafes</option>
        </select>
      </div>
        <br>
      </div>
    <div class="form-group">
      <label for="inputRating" class="col-lg-2 control-label">Rating</label>
      <div class="col-lg-10">
        <select name="rating" class="form-control" id="inputRating">
            <option value="Excellent">Excellent</option>
            <option value="Good">Good</option>
            <option value="Average">Average</option>
            <option value="Poor">Poor</option>
            <option value="Very Poor">Very Poor</option>
        </select>
      </div>
        <br>
      </div>
      <div class="form-group">
      <label for="inputMessage" class="col-lg-2 control-label">Message</label>
      <div class="col-lg-10">
        <textarea rows="4" cols="50" name="message" class="form-control" id="inputMessage" placeholder="Type your message here">
        </textarea>
        <!-- <input type="textarea" rows="4" cols="50" name="message" class="form-control" id="inputMessage" placeholder="Type your message here"> -->
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

@section('List')

@endsection

