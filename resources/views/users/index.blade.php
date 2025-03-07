<table>
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->full_name }}</td>
                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->age }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $users->links() }}
