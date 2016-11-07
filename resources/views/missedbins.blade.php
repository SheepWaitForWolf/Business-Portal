@extends('layouts.master')

@section('Title')
Report a Missed Collection
@endsection

@section('Content')
      <div class="col-md-12">
      <h2> Report a Missed Collection </h2>
      <br>
    </div>
@endsection

@section('Form')
<div class="node-content">
    <form class="webform-client-form webform-client-form-499" enctype="multipart/form-data" action="/webform/missed-bin-collection" method="post" id="webform-client-form-499" accept-charset="UTF-8">
      <div>
        <fieldset class="webform-component-fieldset webform-component--information form-wrapper">
          <div class="fieldset-wrapper">
            <div class="form-item webform-component webform-component-markup webform-component--information--information-statement">
                <h4>This form is to report the collection of your bins missed.</h4>
                  <p>If your bins have not been collected on your normal collection day, please submit this form reporting which bins have been missed. We will arrange a collection of them within two working days. The bin will need to be left at their collection point.</p>
                  <p> </p>

            </div>
          </div>
     </div>
        </fieldset>
        <fieldset class="webform-component-fieldset webform-component--customer-details form-wrapper"><legend><span class="fieldset-legend">Customer Details</span></legend>
          <div class="fieldset-wrapper">
            <div  class="form-item webform-component webform-component-select webform-component--customer-details--title">
              <label for="edit-submitted-customer-details-title">Title </label>
                 <select id="edit-submitted-customer-details-title" name="submitted[customer_details][title]" class="form-select"><option value="" selected="selected">Please Select</option><option value="1">Dame</option><option value="2">Dr</option><option value="3">Lady</option><option value="4">Lord</option><option value="5">Miss</option><option value="6">Mr</option><option value="7">Mrs</option><option value="8">Ms</option><option value="9">Mx</option><option value="10">Rev</option><option value="11">Sir</option></select>
            </div>
              <div class="form-item webform-component webform-component-textfield webform-component--customer-details--first-name">
                <label for="edit-submitted-customer-details-first-name">First name <span class="form-required" title="This field is required.">*</span></label>
                 <input required="required" type="text" id="edit-submitted-customer-details-first-name" name="submitted[customer_details][first_name]" value="" size="60" maxlength="128" class="form-text required" />
              </div>
                <div  class="form-item webform-component webform-component-textfield webform-component--customer-details--last-name">
                  <label for="edit-submitted-customer-details-last-name">Last name <span class="form-required" title="This field is required.">*</span></label>
                    <input required="required" type="text" id="edit-submitted-customer-details-last-name" name="submitted[customer_details][last_name]" value="" size="60" maxlength="128" class="form-text required" />
                </div>
                <div id="addressfield-wrapper">
                  <div  class="form-item webform-component webform-component-addressfield webform-component--customer-details--address">
                      <label for="edit-submitted-customer-details-address">Address <span class="form-required" title="This field is required.">*</span></label>
                    <div class="form-item form-type-select form-item-submitted-customer-details-address-country">
                         <label for="edit-submitted-customer-details-address-country">Country </label>
                         <select class="country form-select" autocomplete="country" id="edit-submitted-customer-details-address-country" name="submitted[customer_details][address][country]"><option value="" selected="selected">- None -</option><option value="GB">United Kingdom</option></select>
                    </div>

                  </div>
                </div>
                    <div  class="form-item webform-component webform-component-number webform-component--customer-details--phone">
                       <label for="edit-submitted-customer-details-phone">Phone </label>
                        <input type="text" id="edit-submitted-customer-details-phone" name="submitted[customer_details][phone]" step="any" class="form-text form-number" />
                    </div>
                          <div  class="form-item webform-component webform-component-email webform-component--customer-details--email-address">
                              <label for="edit-submitted-customer-details-email-address">Email </label>
                               <input class="email form-text form-email" placeholder="In order to receive a confirmation email please provide this information" type="email" id="edit-submitted-customer-details-email-address" name="submitted[customer_details][email_address]" size="60" />
                          </div>
          </div>
         </fieldset>

    <fieldset class="webform-component-fieldset webform-component--bin-collection-details form-wrapper"><legend><span class="fieldset-legend">Bin collection details</span></legend><div class="fieldset-wrapper">
      <div  class="form-item webform-component webform-component-checkboxes webform-component--bin-collection-details--which-bins-have-been-missed">
        <label for="edit-submitted-bin-collection-details-which-bins-have-been-missed">Which bins have been missed? <span class="form-required" title="This field is required.">*</span></label>
          <div id="edit-submitted-bin-collection-details-which-bins-have-been-missed" class="form-checkboxes">
            <div class="form-item form-type-checkbox form-item-submitted-bin-collection-details-which-bins-have-been-missed-Grey">
               <input type="checkbox" id="edit-submitted-bin-collection-details-which-bins-have-been-missed-1" name="submitted[bin_collection_details][which_bins_have_been_missed][Grey]" value="Grey" class="form-checkbox" />  <label class="option" for="edit-submitted-bin-collection-details-which-bins-have-been-missed-1">Grey domestic waste bin </label>
            </div>
              <div class="form-item form-type-checkbox form-item-submitted-bin-collection-details-which-bins-have-been-missed-Green">
                <input type="checkbox" id="edit-submitted-bin-collection-details-which-bins-have-been-missed-2" name="submitted[bin_collection_details][which_bins_have_been_missed][Green]" value="Green" class="form-checkbox" />  <label class="option" for="edit-submitted-bin-collection-details-which-bins-have-been-missed-2">Green garden waste bin </label>
              </div>
                <div class="form-item form-type-checkbox form-item-submitted-bin-collection-details-which-bins-have-been-missed-Blue">
                   <input type="checkbox" id="edit-submitted-bin-collection-details-which-bins-have-been-missed-3" name="submitted[bin_collection_details][which_bins_have_been_missed][Blue]" value="Blue" class="form-checkbox" />  <label class="option" for="edit-submitted-bin-collection-details-which-bins-have-been-missed-3">Blue recycling bin </label>

                </div>
                  <div class="form-item form-type-checkbox form-item-submitted-bin-collection-details-which-bins-have-been-missed-Brown">
                     <input type="checkbox" id="edit-submitted-bin-collection-details-which-bins-have-been-missed-4" name="submitted[bin_collection_details][which_bins_have_been_missed][Brown]" value="Brown" class="form-checkbox" />  <label class="option" for="edit-submitted-bin-collection-details-which-bins-have-been-missed-4">Brown recycling bin </label>

                  </div>
                      <div class="form-item form-type-checkbox form-item-submitted-bin-collection-details-which-bins-have-been-missed-Food">
                          <input type="checkbox" id="edit-submitted-bin-collection-details-which-bins-have-been-missed-5" name="submitted[bin_collection_details][which_bins_have_been_missed][Food]" value="Food" class="form-checkbox" />  <label class="option" for="edit-submitted-bin-collection-details-which-bins-have-been-missed-5">Kerbside food caddy </label>

                      </div>
                        <div class="form-item form-type-checkbox form-item-submitted-bin-collection-details-which-bins-have-been-missed-Communal">
                            <input type="checkbox" id="edit-submitted-bin-collection-details-which-bins-have-been-missed-6" name="submitted[bin_collection_details][which_bins_have_been_missed][Communal]" value="Communal" class="form-checkbox" />  <label class="option" for="edit-submitted-bin-collection-details-which-bins-have-been-missed-6">Communal recycling bins </label>
                        </div>
                            <div class="form-item form-type-checkbox form-item-submitted-bin-collection-details-which-bins-have-been-missed-Canvas">
                             <input type="checkbox" id="edit-submitted-bin-collection-details-which-bins-have-been-missed-7" name="submitted[bin_collection_details][which_bins_have_been_missed][Canvas]" value="Canvas" class="form-checkbox" />  <label class="option" for="edit-submitted-bin-collection-details-which-bins-have-been-missed-7">Canvas bag </label>

                            </div>
          </div>
      </div>

        <div  class="form-item webform-component webform-component-radios webform-component--bin-collection-details--assisted-collection">
            <label for="edit-submitted-bin-collection-details-assisted-collection">Was this an assisted collection? <span class="form-required" title="This field is required.">*</span></label>
              <div id="edit-submitted-bin-collection-details-assisted-collection" class="form-radios">
                <div class="form-item form-type-radio form-item-submitted-bin-collection-details-assisted-collection">
                  <input required="required" type="radio" id="edit-submitted-bin-collection-details-assisted-collection-1" name="submitted[bin_collection_details][assisted_collection]" value="Yes" class="form-radio" />  <label class="option" for="edit-submitted-bin-collection-details-assisted-collection-1">Yes </label>

                </div>
                <div class="form-item form-type-radio form-item-submitted-bin-collection-details-assisted-collection">
                    <input required="required" type="radio" id="edit-submitted-bin-collection-details-assisted-collection-2" name="submitted[bin_collection_details][assisted_collection]" value="No" class="form-radio" />  <label class="option" for="edit-submitted-bin-collection-details-assisted-collection-2">No </label>
                </div>
              </div>
        </div>

    <div class='form-item webform-component webform-component-matrix webform-component--which-dates webform-component-which-dates' id='edit-which_dates-14'><label>Which dates did we miss?</label><table id="edit-which_dates-14-table" class="sticky-enabled">
     <thead><tr><th>Each collection missed</th><th>Date</th> </tr></thead>
    <tbody>
     <tr class="odd"><td><div id="edit-submitted-bin-collection-details-which-dates-1-1" class="form-item form-type-item">
      <label class="element-invisible" for="edit-submitted-bin-collection-details-which-dates-1-1">Each collection missed </label>
     Date Missed
    </div>
    </td><td><div  class="form-item webform-component webform-component- webform-component--bin-collection-details--which-dates--1--2">
      <label class="element-invisible" for="edit-submitted-bin-collection-details-which-dates-1-2">Date </label>
     <div class="webform-container-inline webform-datepicker"><div class="form-item form-type-select form-item-submitted-bin-collection-details-which-dates-1-2-day">
      <label class="element-invisible" for="edit-submitted-bin-collection-details-which-dates-1-2-day">Day </label>
     <select class="day form-select" id="edit-submitted-bin-collection-details-which-dates-1-2-day" name="submitted[bin_collection_details][which_dates][1][2][day]"><option value="">Day</option><option value="1">1</option><option value="2">2</option><option value="3" selected="selected">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
    </div>
    <div class="form-item form-type-select form-item-submitted-bin-collection-details-which-dates-1-2-month">
      <label class="element-invisible" for="edit-submitted-bin-collection-details-which-dates-1-2-month">Month </label>
     <select class="month form-select" id="edit-submitted-bin-collection-details-which-dates-1-2-month" name="submitted[bin_collection_details][which_dates][1][2][month]"><option value="">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11" selected="selected">Nov</option><option value="12">Dec</option></select>
    </div>
    <div class="form-item form-type-select form-item-submitted-bin-collection-details-which-dates-1-2-year">
      <label class="element-invisible" for="edit-submitted-bin-collection-details-which-dates-1-2-year">Year </label>
     <select class="year form-select" id="edit-submitted-bin-collection-details-which-dates-1-2-year" name="submitted[bin_collection_details][which_dates][1][2][year]"><option value="">Year</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected="selected">2016</option><option value="2017">2017</option><option value="2018">2018</option></select>
    </div>
    <input type="image" src="/sites/all/modules/webform/images/calendar.png" class="webform-calendar webform-calendar-start-2014-11-03 webform-calendar-end-2018-11-03 webform-calendar-day-0" alt="Open popup calendar" title="Open popup calendar" />
    </div>
    </div>
    </td> </tr>
     <tr class="even"><td colspan="2"></td> </tr>
    </tbody>
    </table>
    <input type="submit" id="edit-submitted-bin-collection-details-which-dates-add-row-which-dates" name="add_row_which_dates" value="Add another date" class="form-submit" /></div></div></fieldset>
    <fieldset class="webform-component-fieldset webform-component--data-protection-statement form-wrapper"><legend><span class="fieldset-legend">Data Protection Statement</span></legend><div class="fieldset-wrapper"><div class="fieldset-description">The information provided in this form will be processed by East Dunbartonshire Council in accordance with the Data Protection Act 1998. The data you have provided will be used for processing your enquiry and for statistical purposes.</div></div></fieldset>
    <div  class="form-item webform-component webform-component-markup webform-component--privacy-statement">
     <p><a href="/system_pages/privacy_statement.aspx" target="_blank">Privacy Statement</a></p>

    </div>
    <input type="hidden" name="details[sid]" />
    <input type="hidden" name="details[page_num]" value="1" />
    <input type="hidden" name="details[page_count]" value="1" />
    <input type="hidden" name="details[finished]" value="0" />
    <input type="hidden" name="form_build_id" value="form-1pkfhKI4tSwnCqA4pnAONtl5OkcwA30V8vu9FAGTwbY" />
    <input type="hidden" name="form_id" value="webform_client_form_499" />
    <div class="form-actions"><input class="webform-submit button-primary form-submit" type="submit" name="op" value="Submit" /></div></div></form>  </div>

      
      
      <span property="dc:title" content="Missed bin collection" class="rdf-meta element-hidden"></span></article>

      </div>    </div> </div>       
@endsection 


@section('Modal')
    <div class="modal fade" id="myFeedbackModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Amend Details</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmfeedbacks" name="frmfeedbacks" class="form-horizontal" novalidate="">

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
                                    <label for="service" class="col-sm-3 control-label">Service</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="service" name="service" placeholder="Registration" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="rating" class="col-sm-3 control-label">Rating</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="rating" name="rating" placeholder="Excellent" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="message" class="col-sm-3 control-label">Message</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="message" name="message" placeholder="Excellent" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save-feedback" value="add">Save changes</button>
                            <input type="hidden" id="feedback_id" name="feedback_id" value="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection