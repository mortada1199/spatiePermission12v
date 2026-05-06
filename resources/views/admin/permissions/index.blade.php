<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-2">

                <div class="bg-gray-900 border border-gray-800 rounded-xl p-6">

                    <!-- Header -->
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h2 class="text-lg font-semibold text-white">Permissions</h2>
                        </div>

                        <a href="{{ route('admin.permissions.create') }}"
                            class="bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-2 rounded-lg text-sm inline-block">
                            Add Permission
                        </a>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-gray-300">

                            <thead class="text-gray-400 border-b border-gray-800">
                                <tr>
                                    <th class="text-left py-3">Permission</th>
                                    <th class="text-right py-3">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-800">

                                @forelse ($permissions as $permission)
                                    <tr class="hover:bg-gray-800/50 transition">

                                        <!-- Name -->
                                        <td class="py-4 text-gray-300">
                                            {{ $permission->name }}
                                        </td>

                                        <!-- Actions -->
                                        <td class="py-2 text-right space-x-3">

                                            <!-- Edit -->
                                            <a href="{{ route('admin.permissions.edit', $permission->id) }}"
                                                class="text-indigo-400 hover:text-indigo-300 text-sm">
                                                Edit
                                            </a>

                                            <!-- Delete -->
                                            <form action="{{ route('admin.permissions.destroy', $permission->id) }}"
                                                method="POST" class="inline">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this permission?')"
                                                    class="text-red-400 hover:text-red-300 text-sm">
                                                    Delete
                                                </button>

                                            </form>

                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2" class="text-center text-gray-500 py-6">
                                            No permissions found
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>

                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>

</x-admin-layout>
