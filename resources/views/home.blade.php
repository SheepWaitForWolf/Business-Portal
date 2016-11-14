@extends('layouts.master')

@section('Content')
<div class="container">

<h3>Welcome, {{$fname}}!</h3>
<br>


       
<!-- 
<div class="col-md-12">
  <div class="box box-solid box-primary">
    <div class="box-header with-border">
      Business Details
    </div>
    <div class="box-body">

    </div>
  </div>
</div> -->


<div class="col-md-6 col-sm-12">
  <div class="row">
      <div class="col-md-12">
      <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Business Details</h3>
          </div>
          <div class="box-body" style="display: block;">
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  
                    <h4>Trade Name</h4>
                    <p class="lead">Business Solutions</p>
                  
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  
                    <h4>Business Name</h4>
                    <p class="lead"></p>
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  
                    <h4>Legal Form</h4>
                    <p class="lead"></p>
                  
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  
                    <h4>Legal Entity</h4>
                    <p class="lead"></p>
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  
                    <h4>Company Registeration Number</h4>
                    <p class="lead">123456</p>
                  
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  
                    <h4>VAT Registeration Number</h4>
                    <p class="lead">1334245356</p>
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  
                    <h4>Charity Reference Number</h4>
                    <p class="lead"></p>
                  
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  
                    <h4>Website</h4>
                    <p class="lead"></p>
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  
                    <h4>Relationship Type</h4>
                    <p class="lead">Primary</p>
                  
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <h4>Verification Status</h4>
                                            <p class="lead text-red">Not Verified</p>
                                    </div>
              </div>

          
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<div class="col-md-6 col-sm-12">
  <div class="row">
      <div class="col-md-12">       
        <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h4 class="box-title">Address Details</h4>
          </div>
          <div class="box-body" style="display: block;">
          <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <h4>Address Type</h4>
                      <p class="lead"></p>
                  </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <h4>Verification Status</h4>
                                            <p class="lead text-red">Not Verified</p>
                                    </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                 <div class="form-group">
                    <h4>Address</h4>
                      <p class="lead">123 Big Street  </p>
                  </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  
                    <h4>Town</h4>
                    <p class="lead">Somewhere</p>
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  
                    <h4>Postcode</h4>
                    <p class="lead">AB12 2EF</p>
                  
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  
                    <h4>Country</h4>
                    <p class="lead">gbr</p>
                  
                </div>
              </div>

                      </div>
          </div>
        </div>
    </div>
  </div>
</div>

 <button type="button" class="btn btn-sm btn-success"><a href="/editprofile">Edit Profile</a></button>


  <div class="row box-row">
     <div class="col-md-3">
           <div class="info-box">
            <a href="/mailbox">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-blue"><i class="fa fa-envelope-o"></i></span>
            </a>
          <div class="info-box-content">
            <span class="info-box-text">New Messages</span>
            <span class="info-box-number">{{$inboxcount}}</span>
          </div><!-- /.info-box-content -->

        </div><!-- /.info-box -->
    </div>

    <div class="col-md-3">
        <div class="info-box">
            <a href="#">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
         </a>
          <div class="info-box-content">
            <span class="info-box-text">Live Services</span>
            <span class="info-box-number">24</span>
          </div><!-- /.info-box-content -->
            </a>
        </div><!-- /.info-box -->
    </div>


    <div class="col-md-3">
    <!-- Apply any bg-* class to to the info-box to color it -->
    <div class="info-box bg-yellow">
      <a href="/infographs">
      <span class="info-box-icon bg-yellow"><i class="fa fa-industry"></i></span>
        </a>
      <div class="info-box-content">
        <span class="info-box-text">Global Users</span>
        <span class="info-box-number">15,680</span>
        <!-- The progress section is optional -->
        <div class="progress">
          <div class="progress-bar" style="width: 93%"></div>
        </div>
        <span class="progress-description">
          and counting...
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
