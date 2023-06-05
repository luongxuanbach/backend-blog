@extends('admin.layout.master')
@section('title')
    Edit User
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Edit User</h1>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if (count($errors))
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }} <br>
                                    @endforeach
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{ $user->name }}" placeholder="Enter name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control" type="email" id="email" value="{{ $user->email }}"
                                        placeholder="Enter email" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" name="password" id="password"
                                        placeholder="Enter password">
                                </div>
                                <div class="mb-3">
                                    <label for="confirm" class="form-label">Confirm Password</label>
                                    <input class="form-control" type="password" name="confirm" id="confirm"
                                        placeholder="Enter confirm password">
                                </div>
                                <div class="mb-3">
                                    <label for="is_admin" class="form-label">Role</label>
                                    <label class="form-label">
                                        <input type="radio" checked name="is_admin"
                                            @if (!$user->is_admin) checked @endif value="0" id="is_admin">
                                        User
                                    </label>

                                    <label class="form-label">
                                        <input type="radio" name="is_admin"
                                            @if ($user->is_admin) checked @endif value="1" id="is_admin">
                                        Admin
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
