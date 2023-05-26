@extends('admin.layout.master')
@section('title')
    Category
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>List Category</strong></h1>
            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">
                        {{-- <div class="card-header">
									<h5 class="card-title mb-0">Latest Projects</h5>
								</div> --}}
						@if (session('success'))
							<div class="alert alert-success">
								{{	session('success')	}}
							</div>
						@endif
                        <table class="table table-hover my-0">
                            <thead>
                                <tr class="text-center">
                                    <th>Name</th>
                                    <th class="d-none d-xl-table-cell">Slug</th>
                                    <th class="d-none d-md-table-cell">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="text-center">
                                        <td>{{ $category->name }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $category->slug }}</td>
                                        <td>
                                            <a href="{{route('admin.category.edit', $category->id)}}"><button class="btn btn-warning">Edit</button></a>
                                            <a href="{{route('admin.category.delete', $category->id)}}"><button class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
						<div class="mt-5 d-flex justify-content-center">
							{{ $categories->links() }}
						</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
