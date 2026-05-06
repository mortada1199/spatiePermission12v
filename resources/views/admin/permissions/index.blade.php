<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-2">


                <div class="bg-gray-900 border border-gray-800 rounded-xl p-6">

                    <!-- Header -->
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h2 class="text-lg font-semibold text-white">Permissions</h2>
                            {{-- <p class="text-sm text-gray-400">
                                    A list of all the users in your account including their name, title, email and role.
                                </p> --}}
                        </div>

                        <button class="bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-2 rounded-lg text-sm">
                            Add Permission
                        </button>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-gray-300">

                            <thead class="text-gray-400 border-b border-gray-800">
                                <tr>

                                    <th class="text-left py-3">Permission</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-800">

                                <!-- Row -->
                                @foreach ($permissons as $Permission)
                                    <tr class="hover:bg-gray-800/50 transition">
                                        <!-- Role -->
                                        <td class="py-4 text-gray-300">
                                           {{ $Permission->name }}
                                        </td>

                                        <!-- Action -->
                                        <td class="py-2 text-right space-x-3">

                                            <a href="#" class="text-indigo-400 hover:text-indigo-300 text-sm">
                                                Edit
                                            </a>

                                            <a href="#" class="text-red-400 hover:text-red-300 text-sm">
                                                Delete
                                            </a>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>

</x-admin-layout>
