<x-layout>
	<x-slot:title>
		{{ $title }}
	</x-slot>
	Имя {{ $name }}
	Возраст {{ $age }}
	@unless($age > 18)
		Пока рано смотреть
	@endunless
</x-layout>