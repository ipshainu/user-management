@forelse($users as $user)
<div class="col-md-4 user-item mb-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text"><strong>{{ $user->department->name }}</strong></br>
                {{ $user->designation->name }}
            </p>
        </div>
    </div>
</div>
@empty
<p>No users found.</p>
@endforelse