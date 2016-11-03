@extends('layouts.master')

@section('Title')
Property Listings
@endsection

@section('Content')
Property Listings
@stop

@section('List')
 <!-- Table-to-load-the-data Part -->
 <div class="row">

    <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Property ID</th>
                        <th>Address</th>
                        <th>Postcode</th>
                        <th>Town/City</th>
                        <th>UPRN</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody id="property-list" name="property-list">
                    @foreach ($properties as $property)
                    <tr id="property{{$property->property_id}}">
                        <td>{{$property->property_id}}</td>
                        <td>{{$property->address_lines}}</td>
                        <td>{{$property->post_code}}</td>
                        <td>{{$property->post_town}}</td>
                        <td>{{$property->uprn}}</td>
                        <td>{{$property->telephone}}</td>
                        <td>
                            <button class="btn btn-warning btn-xs btn-detail open-modal-property" value={{$property->property_id}}>Edit</button>
                            <button class="btn btn-danger btn-xs btn-delete delete-property" value={{$property->property_id}}>Delete</button>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
          </div>
          </div>
@endsection

