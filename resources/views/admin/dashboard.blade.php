@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Welcome</h4>
                <p class="card-category">Here's a list of registered users:</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Id</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th> <!-- New column for delete button -->
                        </thead>
                        <tbody>
                            @foreach($users as $user) <!-- Start of loop -->
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td> <!-- Form for delete button -->
                                    <form action="{{ route('users.delete', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach <!-- End of loop -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Scripts -->
@endsection
