<x-layout>
    <h1>{{ $title }}</h1>
    <p>{{ $message }}</p>

    <h2>Contact options</h2>

    <ul>
        @foreach ($contacts as $contact)
            <li>{{ $contact }}</li>
        @endforeach
    </ul>
</x-layout>