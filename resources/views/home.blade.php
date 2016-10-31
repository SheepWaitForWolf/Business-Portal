@extends('layouts.master')

@section('Content')
<div class="container">
   <br>
      <br>
       <div class="row">
        <div class="col-md-3">
           <div class="info-box">
            <a href="/mailbox">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-blue"><i class="fa fa-envelope-o"></i></span>
            </a>
          <div class="info-box-content">
            <span class="info-box-text">Messages</span>
            <span class="info-box-number">{{$inboxcount}}</span>
          </div><!-- /.info-box-content -->

        </div><!-- /.info-box -->
    </div>




    <div class="col-md-3">
        <div class="info-box">
            <a href="/registration">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
         </a>
          <div class="info-box-content">
            <span class="info-box-text">Registered Children</span>
            <span class="info-box-number">{{$childcount}}</span>
          </div><!-- /.info-box-content -->
            </a>
        </div><!-- /.info-box -->
    </div>


    <div class="col-md-3">
    <!-- Apply any bg-* class to to the info-box to color it -->
    <div class="info-box bg-yellow">
      <a href="/attendance">
      <span class="info-box-icon bg-yellow"><i class="fa fa-calendar"></i></span>
        </a>
      <div class="info-box-content">
        <span class="info-box-text">Attendance</span>
        <span class="info-box-number">234 days</span>
        <!-- The progress section is optional -->
        <div class="progress">
          <div class="progress-bar" style="width: 93%"></div>
        </div>
        <span class="progress-description">
          93% year to date
        </span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
    </div>

    <div class="col-md-3">
        <!-- Apply any bg-* class to to the info-box to color it -->
    <div class="info-box bg-red">
      <a href="/feedback">
      <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
      </a>
      <div class="info-box-content">
        <span class="info-box-text">Feedback</span>
        <span class="info-box-number">19,410</span>
        <!-- The progress section is optional -->
        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
        <span class="progress-description">
          70% Increase in 30 Days
        </span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
    </div>

</div>

<br>
<h3>Welcome, {{$fname}}!</h3>
<br>

    <div>
    <p><strong>
        Your user profile displays your myaccount Business Portal information. Please have a look around and be
        sure to complete all the necessary steps for registration. If you would like some assistance setting up your profile
        try having a look at our <a href="/help">help</a> page.
    </strong>
    </p>

    <p><strong>
        We hope you find the experience of registering with myaccount comfortable and an improvement on the paper approach, if you have any questions or issues don't hesitate to log some <a href="/feedback">feedback</a> and we will get back to you as soon as we can.
    </strong>
    </p>
    
    </div>

</div>


@endsection
