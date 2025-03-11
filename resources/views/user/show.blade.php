<x-layout>
	<x-slot:title>
		{{ $title }}
	</x-slot>
	<table>
		<tr>
			<th>id</th>
			<th>Имя</th>
			<th>email</th>
			<th>Возраст</th>
			<th>Зарплата</th>
			<th>Время регистрации</th>
			<th>Последний апдейт</th>
		</tr>
		@foreach ($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->age}}</td>
				<td>{{$user->salary}}</td>
				<td>{{$user->created_at}}</td>
				<td>{{$user->updated_at}}</td>
			</tr>
		@endforeach 
	</table>
</x-layout>