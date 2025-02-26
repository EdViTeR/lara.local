<x-layout>
	<x-slot:title>
		{{ $title }}
	</x-slot:title>
	<p>Год: {{ $viewDate['year'] ?? date('Y')}}</p>
	<p>Месяц: {{ $viewDate['month'] ?? date('m')}}</p>
	<p>{{-- Здесь в задаче 38 мы передавали день --}}</p>
	<p>День: {{ $viewDate['day'] ?? date('d')}}</p>
</x-layout>