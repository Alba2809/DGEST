<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead  class="bg-white dark:bg-slate-800">
                          <tr>
                              <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 white:text-slate-200 text-center">ID</th>
                              <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 white:text-slate-200 text-center">Nombre</th>
                              <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 white:text-slate-200 text-center">Email</th>
                          </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-slate-800">
                          @foreach($users as $user)
                          <tr>
                              <th class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{$user->id}}</th>
                              <th class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$user->name}}</th>
                              <th class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$user->email}}</th>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
