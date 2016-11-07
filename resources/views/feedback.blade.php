@extends('layouts.master')

@section('Title')
Report Feedback
@endsection

@section('Content')
<h3>Submit Feedback</h3>
<br>
<p> User feedback is very important to myaccount Business Portal as it allows us to assess the quality of service provided and also to address issues as early as possible.</p>
<p> We are committed to responding to all instances of user feedback within 48 hours and in most cases the problem will be resolved in this timeframe also.
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
      <label for="inputCompanyt" class="col-lg-2 control-label">Company</label>
      <div class="col-lg-10">
        <input type="text" name="company" class="form-control" id="inputCompany" placeholder="Widgets INC">
      </div>
    </div>
    <div class="form-group">
      <label for="inputService" class="col-lg-2 control-label">Select Service</label>
      <div class="col-lg-10">
        <select name="service" class="form-control" id="inputService">
            <option value="Waste Collection">Waste Collection</option>
            <option value="Business Rates">Business Rates</option>
            <option value="Licensing & Permits">Licensing & Permits</option>
            <option value="Planning Applications">Planning Applications</option>
            <option value="Property Directory">Property Directory</option>
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

