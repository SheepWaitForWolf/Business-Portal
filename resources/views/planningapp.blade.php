@extends('layouts.master')

@section('Title')
Submit Planning Application
@endsection


@section('Content')
<p> Please be aware that the way planning applications are submitted online in Scotland will change from 13 January 2016 with the launch of a new online portal - ePlanning.scot (link is external).

The good news is that new ePlanning portal will feel a lot like the current site, with a few tweaks and improvements added in.

However, users will be required to re-register on the new portal - no details will be transferred.

Similarly, any applications on the outgoing website which have not been submitted before 17 March will be lost.

The new website will be available from 13 January 2016 and anyone applying for planning permission from that date is strongly advised to use the new portal. You will not be able to start a new application on the old portal from this date.

The website will:

guide you through each stage of the application process
allow you to purchase ordnance survey plans to include with your application
help avoid common mistakes when submitting an application.
Once we have received a complete application, we will register and start to consider your application.

We have produced a Planning Toolkit which sets out the stages in processing applications.

Planning Processing Agreements

If you want to submit a planning application for a major development you are encouraged to use processing agreements. These can guide the developer on:

timescales
information required for the application
the processes that will take place before a decision is made on the application.
Along with the processing agreement there should be discussions between the planning authority, developer, statutory agencies and other relevant consultation bodies.

A processing agreement does not guarantee that planning permission will be granted, but it does set out the expectations of all parties and makes sure that everyone involved is clear on the key stages and dates within the process, and the level of detail that is required.</p>
@endsection

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