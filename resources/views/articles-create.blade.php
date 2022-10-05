<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pievienot Rakstu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid p-2 place-items-left display:flex ">
                        <form class="mt-6" action="{{ route('articles.store') }}" method="POST">
                            @csrf
                            <div>
                                <label for="title" class="flex">
                                    Virsraksts:
                                </label>
                                <input id="title" type="text" name="title"/>
                                <br><br>

                                <label for="description" class="flex">
                                    Apraksts:
                                </label>
                                <textarea id="description" type="text" name="description"></textarea>
                                <br><br>

                                <label for="link" class="flex">
                                    Saite:
                                </label>
                                <input id="link" type="text" name="link"/>
                                <br><br>

                                <label for="image" class="flex">
                                    Saite uz attēlu:
                                </label>
                                <input id="image" type="text" name="image"/>
                                <br><br>

                                <label for="date" class="flex">
                                    Datums:
                                </label>
                                <input id="date" type="date" name="date"/>
                                <br><br>

                                <button type="submit" class=" flex py-3 mt-6 font-medium tracking-widest text-black uppercase shadow-lg focus:outline-none hover:text-gray-400">
                                    Pievienot Rakstu
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
