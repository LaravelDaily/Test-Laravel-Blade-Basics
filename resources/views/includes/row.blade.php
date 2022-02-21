<td>{{ $index+1 }}</td>
<td>{{ $user->name }}</td>
@if ($index == 0)
    <td class="font-bold">{{ $user->email }}</td>
@else
    <td>{{ $user->email }}</td>
@endif