@extends('admin.layouts.app')
@section('content')
<section class="content-section col primary-bg-light p-xl-4 p-3">
                    <div class="bg-white rounded-3 shadow-sm p-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="small fw-medium d-flex flex-wrap">Enquiry list<span><i class="bi bi-chevron-right"></i></span>List</div>
                                <hr class="mb-4">
                                <h5>Enquiry list - List</h5>
                            </div>
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="myTable" class="display table">
                                        <thead>
                                            <tr>
                                                <th width="10%">Si No</th>
                                                <th width="25%">Check-In</th>
                                                <th width="30%">Check-Out</th>
                                                <th width="30%">Guests</th>
                                                <th width="30%">No of Bedrooms</th>
                                                <th width="30%">Bedroom Type</th>
                                                <th width="30%">Cruise Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if($user->isNotEmpty())
                                            @foreach($user as $index => $contact)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $contact->date_of_arrival }}</td>
                                                <td>{{ $contact->date_of_departure }}</td>
                                                <td>{{ $contact->number_of_guests }}</td>
                                                <td>{{ $contact->no_of_bedrooms }}</td>
                                                <td>{{ $contact->bedroom_type }}</td>
                                                <td>{{ $contact->cruise_type }}</td>
                                            </tr>
                                        @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@endsection