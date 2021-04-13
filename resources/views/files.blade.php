<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Files') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div>
                    <div class="flex flex-wrap items-center justify-between mb-4">
                        <div class="flex-grow md:mr-3 mt-4 md:mt-0 order-3 md:order-1 w-full md:w-auto">
                            <input type="search" placeholder="Pesquisar arquivos e pastas" class="w-full px-3 h-12 border-2 rounded-lg">
                        </div>
                        <div class="order-2">
                            <div>
                                <button class="bg-gray-200 px-6 h-12 rounded-lg mr-2">
                                    Nova Pasta
                                </button>
                                <button class="bg-blue-600 px-6 h-12 rounded-lg mr-2 text-white font-bold">
                                    Upload Arquivos
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="border-2 border-gray-200 rounded-lg">
                        <div class="py-2 px-3">
                            <div class="flex items-center ">
                                <a href="" class="font-bold text-gray-400">Breadcrumb</a>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300 mx-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="overflow-auto">
                            <table class="w-full">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-left py-2 px-3">Name</th>
                                        <th class="text-left py-2 px-3 w-2/12">Tamanho</th>
                                        <th class="text-left py-2 px-3 w-2/12">Criado</th>
                                        <th class="p-2 w-2/12"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-gray-100 border-b-2 hover:bg-gray-100">
                                        <td class="py-2 px-3 flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                            </svg>
                                            <a href="" class="p-2 font-bold text-blue-700 flex-grow">File/Folder Name</a>
                                        </td>
                                        <td class="py-2 px-3">
                                            &mdash;
                                        </td>
                                        <td class="py-2 px-3">
                                            Created at
                                        </td>
                                        <td class="py-2 px-3">
                                            <div class=" flex justify-end items-center">
                                                <ul class="flex items-center">
                                                    <li class="mr-4">
                                                        <button class="text-gray-400 font-bold">Renomear</button>
                                                    </li>
                                                    <li>
                                                        <button class="text-red-400 font-bold">Excluir</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="p-3 text-gray-700"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
