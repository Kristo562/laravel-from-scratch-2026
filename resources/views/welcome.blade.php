<x-layout>
    <h1>{{ $title }}</h1>
    <p>{{ $message }}</p>

    <h2>Useful Links</h2>

    <ul>
        @foreach ($links as $link)
            <li>{{ $link }}</li>
        @endforeach
    </ul>
</x-layout>