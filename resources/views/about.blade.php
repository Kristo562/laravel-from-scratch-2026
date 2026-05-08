<x-layout>
    <h1>{{ $title }}</h1>
    <p>{{ $message }}</p>

    <h2>What I have learned</h2>

    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
</x-layout>