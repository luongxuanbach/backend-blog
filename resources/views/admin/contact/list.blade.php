@extends('admin.layout.master')
@section('title')
    Contact
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>List Contact</strong></h1>
            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">
						@if (session('success'))
							<div class="alert alert-success">
								{{	session('success')	}}
							</div>
						@endif
                        <table class="table table-hover my-0" id="datatables-example">
                            <thead>
                                <tr class="text-center">
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Delete</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr class="text-center">
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->address }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>
                                            <a href="{{route('admin.contact.delete', $contact->id)}}"><button class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
						<div class="mt-5 d-flex justify-content-center">
							{{ $contacts->links() }}
						</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
