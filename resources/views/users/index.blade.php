<x-layouts.main>
    <x-slot:title>Manage Users</x-slot:title>

    <x-page-hdr>Manage Users</x-page-hdr>

    <div class="container py-5">

        {{-- Flash message if you added one --}}
        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form method="POST" action="{{ route('admin.users.updateRoles', $user) }}">
                                @csrf
                                @foreach ($roles as $role)
                                <input type="checkbox" value="{{ $role->id }}" name="roles[]" 
                                    id="role-{{ $user->id }}-{{ $role->id }}" 
                                    class="form-check-input"
                                    {{ $user->roles->contains($role->id) ? 'checked' : '' }}>
                                @endforeach
                                <label for="role">{{ $role->name }}</label>
                                <button type="submit" class="btn btn-primary btn-sm mt-2">Save</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $users->links() }}

    </div>
</x-layouts.main>