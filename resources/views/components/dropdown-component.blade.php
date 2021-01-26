<div class="space-y-4">
    <select name="countries" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm dark:text-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:focus:border-indigo-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        @foreach ($options as $key => $option)
            <option {{ $isSelected($key) ? 'selected="selected"': '' }}  value="{{ $option }}">
                {{ $option }}
            </option>
        @endforeach
    </select>
    <p class="ml-2 text-sm">
       Pre-selected value is <span class="font-bold">{{ $options[$selected] }}</span>.
    </p>
</div>
