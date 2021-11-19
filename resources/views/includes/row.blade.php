@foreach ($users as $user)
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>    
@endforeach
