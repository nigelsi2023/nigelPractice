@extends('layouts.guest.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold my-0 float-start">All Websites</h4>
                    <button type="button" class="btn btn-dark btn-sm float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create New</button>
                </div>

                <div class="card-body pb-0">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">URL</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($websites as $key => $website)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $website->name }}</td>
                                    <td>
                                        <a href="{{ $website->url }}" class="btn btn-link">{{ $website->url }}</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-dark btn-sm">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('website.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Assign New Website</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Website Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Daraz" required>
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Website URL <span class="text-danger">*</span></label>
                        <input type="url" name="url" class="form-control" placeholder="https://daraz.com.bd" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Assign Now</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection