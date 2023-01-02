<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignar rol') }}
        </h2>
    </x-slot>

    @if (session('success'))
        <div class="py-none -mb-5 mt-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                    <span class="font-medium">{{session('success')}}</span>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {!! Form::label('name', 'Nombre', ['class' =>'']) !!}
                    {!! Form::text('name', $user->name, ['disabled', 'class' => 'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer']) !!}
                    <br>
                    {!! Form::label('email', 'E-mail', ['class' => '']) !!}
                    {!! Form::text('email', $user->email, ['disabled', 'class' => 'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer']) !!}
                    
                    {!! Form::open(['route' => ['admin.usuarios.update', $user], 'method' => 'put']) !!}
                        <br>
                        @foreach ($roles as $rol)
                            <div>
                                <label>
                                    {!! Form::checkbox('roles[]', $rol->id, (in_array($rol->id, $user->roles->pluck('id')->toArray()) ? true : false) , ['class' => 'mr-1']) !!}
                                    {{$rol->name}}
                                </label>
                            </div>
                        @endforeach
                        {!! Form::submit('Actualizar', ['class' => 'mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
