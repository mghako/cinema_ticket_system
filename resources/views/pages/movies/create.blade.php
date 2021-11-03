<x-layouts.app>
    <x-slot name="title">
      Add Movie
    </x-slot>
    
    <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          @if (session('success'))
          <div class="w-full bg-green-500 py-2 rounded-xl">
              <p class="text-white text-center uppercase text-2xl">{{ session('success') }}</p>
          </div>
          @endif
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <form action="{{ route('movies.store') }}" method="POST">
              @csrf
              @method('POST')
              <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                      <label for="movie-title" class="block text-sm font-medium text-gray-700">Movie Title</label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                          Type name here
                        </span>
                        <input type="text" name="title" id="movie-title" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="ABC Cinema">
                      </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <label for="description" class="block text-sm font-medium text-gray-700">
                        Description
                      </label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                          Type name here
                        </span>
                        <textarea type="text" name="description" id="description" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 align-middle block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"></textarea>
                      </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3 flex justify-items-start">
                        <div class="mr-4">
                            <label for="duration" class="block text-sm font-medium text-gray-700">
                                Duration
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                  Type name here
                                </span>
                                <input type="time" name="duration" id="duration" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="ABC Cinema">
                              </div>
                        </div>
                        <div>
                            <label for="released-date" class="block text-sm font-medium text-gray-700">
                                Released Date
                              </label>
                              <div class="mt-1 flex rounded-md shadow-sm">
                                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                  Type released date here
                                </span>
                                <input type="date" name="released_date" min='13:00' max= '15:00' id="released-date" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"">
                              </div>
                        </div>
                    </div>
                    
                  </div>
                  @if ($errors)
                      @foreach ($errors->all() as $message)
                        <p class="text-sm text-red-600">{{$message}}</p>
                      @endforeach
                    @endif
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </x-layouts.app>