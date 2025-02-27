<x-layout>
	<x-slot:title>
		{{ $title }}
	</x-slot>
	<table>
		<tr>
			<th>#</th>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Зарплата</th>
		</tr>
		@foreach ($employees as $employer)
				<tr>
					<th>{{ $loop->iteration }}</th>
					@foreach ($employer as $key => $value)
						<td>{{ $value }}</td>
					@endforeach
				</tr>
		@endforeach
	</table>
</x-layout>