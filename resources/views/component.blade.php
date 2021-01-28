<x-app-layout>
    <div class="flex justify-center h-screen items-center dark:bg-gray-800 dark:text-gray-200">
        <div class="w-1/3">
            <x-admin.auth.logged-user-has-permissions :logged-user="true" :show-only-icons="true" />
        </div>
    </div>
</x-app-layout>
