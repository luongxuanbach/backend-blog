@extends('admin.layout.master')
@section('title')
    Post
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>List Post</strong></h1>
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
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Highlight Post</th>
                                    <th>Ation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr class="text-center">
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>.</td>
                                        <td>{{ $post->category->name }}</td>
                                        <td>{{ $post->highlight_post == 1 ? "x" : "" }}</td>
                                        <td>
                                            <a href="{{route('admin.post.edit', $post->id)}}"><button class="btn btn-warning">Edit</button></a>
                                            <a href="{{route('admin.post.delete', $post->id)}}"><button class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
						<div class="mt-5 d-flex justify-content-center">
							{{ $posts->links() }}
						</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
