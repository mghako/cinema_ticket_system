<x-layouts.app>
    <h3 class="uppercase font-extrabold mb-6 text-indigo-600">
        Now Showing Movies
    </h3>
    <div class="grid grid-cols-4 gap-6">
        @foreach ($todayMovies as $todayMovie)
        <div class="border-2 rounded-xl border-indigo-600 p-6 hover:bg-gray-800 hover:text-white cursor-pointer">
            <a href="{{ route('movies.show', $todayMovie->id) }}">
                <h4 class="uppercase font-bold text-center mb-4">{{$todayMovie->title}}</h4>
                <img src="{{ asset('/images/dora.jpg') }}" alt="">
            </a>
        </div>
        @endforeach
    </div>
    {{-- <div class="grid grid-cols-4 gap-6">
        @foreach ($todayShows as $todayShow)
        <div class="border-2 rounded-xl border-indigo-600 p-6 hover:bg-gray-800 hover:text-white cursor-pointer">
            <a href="{{ route('movies.show', $todayShow->movie->id) }}">
                <h4 class="uppercase font-bold text-center mb-4">{{$todayShow->movie->title}}</h4>
                <img src="{{ asset('/images/dora.jpg') }}" alt="">
                <div class="flex justify-between align-middle mt-4">
                    <p class="font-bold">Start Time</p>
                    <p>{{ $todayShow->start_time}}</p>
                </div>
                <div class="flex justify-between align-middle mt-1">
                    <p class="font-bold">End Time</p>
                    <p>{{ $todayShow->end_time}}</p>
                </div>
                <div class="flex justify-between align-middle mt-1">
                    <p class="font-bold">Cinema Hall Name</p>
                    <p>{{ $todayShow->cinemaHall->name}}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div> --}}
</x-layouts.app>