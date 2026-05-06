<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-gray-900 border border-gray-800 rounded-xl p-6">

                <h2 class="text-lg font-semibold text-white mb-6">
                    Edit Permission
                </h2>

                <form action="{{ route('admin.permissions.update', $permission->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="text-sm text-gray-400">Permission Name</label>
                        <input type="text" name="name"
                               value="{{ $permission->name }}"
                               class="w-full bg-gray-800 border border-gray-700 text-white rounded-lg px-3 py-2"
                               required>
                    </div>

                    <div class="flex justify-end space-x-3">
                        <a href="{{ route('admin.permissions.index') }}"
                           class="bg-gray-700 px-4 py-2 rounded-lg text-white text-sm">
                            Cancel
                        </a>

                        <button type="submit"
                                class="bg-indigo-600 px-4 py-2 rounded-lg text-white text-sm">
                            Update
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>

</x-admin-layout>