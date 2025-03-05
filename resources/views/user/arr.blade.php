<x-layout>
	<x-slot:title>
		{{ $title }}
	</x-slot>
	<ul>
		@foreach ($arr as $value)
		 {{ $value }}
		@endforeach
	</ul>
</x-layout>