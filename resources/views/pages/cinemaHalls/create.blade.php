<x-layouts.app>
    <x-slot name="title">
      Add Cinema Hall to {{ucwords($cinema->name)}}
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
            <form action="{{ route('cinemas.cinema-halls.store', $cinema->id) }}" method="POST">
              @csrf
              @method('POST')
              <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-3">
                      <label for="cinema-name" class="block text-sm font-medium text-gray-700">
                        Cinema Hall Name
                      </label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                          Type name here
                        </span>
                        <input type="text" name="name" id="cinema-name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="ABC Cinema">
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