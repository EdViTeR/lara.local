<x-layout>
	<x-slot:title>
		{{ $title }}
	</x-slot>
	<ul>
		@foreach ($arr as $value)
			@if ($value == $nday)
				<li class="active">{{ $value }}</li>
			@else
				<li>{{ $value }}</li>
			@endif
		@endforeach
	</ul>
</x-layout>