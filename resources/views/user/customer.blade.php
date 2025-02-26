<x-layout>
	<x-slot:title>
		{{ $title }}
	</x-slot>
	<p class="{{ $class }}" style={{ $color }}>{{ $name }}</p>
	<input value="{{ $age }}">
	<input value="{{ $salary }}">
	<input value="{{ $inputval }}">
	<p><a href={{ $href }}>{{ $text }}</a></p>
	<p>current timestamp: {{ date('d.m.Y') }}<p>
</x-layout>