<x-layout>
	<x-slot:title>
		{{ $title }}
	</x-slot:title>
	<p>Страна: {{ $location['country'] ?? 'Россия'}}</p>
	<p>Город: {{ $location['city'] ?? 'Москва'}}</p>
</x-layout>