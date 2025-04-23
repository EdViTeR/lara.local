<x-layout>
	<x-slot:title>
		{{ $title }}
	</x-slot>
	<table>
		<tr>
			<th>Имя</th>
			<th>Почта</th>
			<th>Дата</th>
		</tr>
		@foreach ($users as $user)
			<tr>
				<td>{{ $user->name}}</td>
				<td>{{ $user->email}}</td>
				<td>{{ $user->created_at}}</td>
			</tr>
		@endforeach
	</table>
</x-layout>