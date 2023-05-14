@foreach ($users -> $user)
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
@endforeach
