<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-gray-900 border border-gray-800 rounded-xl p-6">

                <!-- Header -->
                <div class="mb-6">
                    <h2 class="text-lg font-semibold text-white">Create Permission</h2>
                </div>

                <!-- Form -->
                <form action="{{ route('admin.permissions.store') }}" method="POST">
                    @csrf

                    <!-- Permission Name -->
                    <div class="mb-4">
                        <label class="block text-sm text-gray-400 mb-2">Permission Name</label>
                        <input type="text" name="name"
                            class="w-full bg-gray-800 border border-gray-700 text-white rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-500"
                            placeholder="Enter permission name" required>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end space-x-3">
                        <a href="{{ route('admin.permissions.index') }}"
                            class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg text-sm">
                            Cancel
                        </a>

                        <button type="submit"
                            class="bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-2 rounded-lg text-sm">
                            Save Permission
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>

</x-admin-layout>