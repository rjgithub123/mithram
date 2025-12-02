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
                                                <th width="10%">S.NO</th>
                                                <th width="25%">NAME</th>
                                                <th width="30%">EMAIL</th>
                                                <th width="20%">COMPANY NAME</th>
                                                <th width="15%">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            {{-- @if($contacts->isNotEmpty())
                                            @foreach($contacts as $index => $contact)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $contact->name }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->company_name }}</td>
                                                <td>
                                                    <a href="{{ route('admin.contact_details', $contact->id) }}" class="btn py-02 btn-type3 my-1" title="View Details">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @endif --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@endsection