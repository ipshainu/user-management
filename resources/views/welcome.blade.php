@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="form-group">
                        <input type="text" id="search" class="form-control" placeholder="Search by Name/Department/Designation">
                    </div>
                    <hr />
                    <div class="row" id="user-list">
                        @include('user_list', ['users' => $users])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#search').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $(".user-item").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection