<x-layout>
	<x-slot:title>
		{{ $title }}
	</x-slot>
	<p>{{ $customer['name'] }}<p>
	<p>{{ $customer['age'] }}<p>
	<p>{{ $customer['salary'] }}<p>
	<ul>
	@foreach ($arr as $elem)
		@if ($loop->first)
			<li>{{ $elem }}</li>
		@endif
		
		@if ($loop->last)
			<li class="last">
		@endif
		{{ $elem }}</li>
	@endforeach
	</ul>
</x-layout>