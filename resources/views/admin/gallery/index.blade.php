@extends('admin.layouts.app')
@section('content')
<section class="content-section col primary-bg-light p-xl-4 p-3">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
    @endif
    <div class="bg-white rounded-3 shadow-sm p-3">
        <div class="row">
            <div class="col-12">
                <div class="small fw-medium d-flex flex-wrap">Gallery</div>
                <hr class="mb-4">
                <div class="d-flex justify-content-between gap-3 align-items-center">
                    <h5>Gallery</h5>
                    <a href="{{ route('admin.gallery.create') }}" class="btn btn-type1">Add New</a>
                </div>
            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table id="myTable" class="display table">
                        <thead>
                            <tr>
                                <th width="10%">S.NO</th>
                                <th width="70%"> TITLE</th>
                                <th width="20%">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($gallery as $gallery_data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $gallery_data->title }}</td>
                                <td>
                                    <a href="{{ route('admin.gallery.edit', $gallery_data->id) }}" class="btn py-02 btn-type3 my-1" title="View Details">View</a>

                                    <button type="button" class="btn py-02 btn-danger my-1" data-bs-toggle="modal" data-bs-target="#confirmDelete{{ $gallery_data->id }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- @foreach($gallery as $gallery_data)
    <div class="modal fade" id="confirmDelete{{ $gallery_data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="confirmDeleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="deleteForm" action="{{ route('admin.gallery.destroy', $gallery_data->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body fs-5">
                        Are you sure you want to delete this Gallery item?
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-dark border-0 shadow-sm" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-type1 border-0 shadow-sm" data-bs-target="#successPopup" data-bs-toggle="modal">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach --}}
</section>
@endsection