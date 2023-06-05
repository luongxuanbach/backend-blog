@extends('admin.layout.master')
@section('title')
    User
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>List User</strong></h1>
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
                                    <th>Email</th>
                                    <th>Is admin</th>
                                    <th>Ation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="text-center">
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->is_admin == 1 ? 'x' : '' }}</td>
                                        <td>
                                            <a href="{{route('admin.user.edit', $user->id)}}"><button class="btn btn-warning">Edit</button></a>
                                            <a href="{{route('admin.user.delete', $user->id)}}"><button class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
						<div class="mt-5 d-flex justify-content-center">
							{{ $users->links() }}
						</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
