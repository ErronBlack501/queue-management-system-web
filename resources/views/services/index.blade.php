<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-white leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>
    <div>
        <h2 class="text-center my-3 text-secondary text-xl uppercase">list of services</h2>
        <div class="overflow-x-auto mx-8 rounded-lg border border-gray-200">
            <table class="table bg-white">
                <!-- head -->
                <thead class="bg-white">
                    <tr>
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox checkbox-primary" />
                            </label>
                        </th>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Favorite Color</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox checkbox-primary" />
                            </label>
                        </th>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle h-12 w-12">
                                        <img src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                                            alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900">Hart Hagerty</div>
                                    <div class="text-sm opacity-50">United States</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            Zemlak, Daniel and Leannon
                            <br />
                            <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
                        </td>
                        <td>Purple</td>
                        <th>
                            <button class="btn btn-ghost btn-xs text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                            </button>
                        </th>
                    </tr>
                    <!-- Other rows -->
                </tbody>
                <tfoot class="bg-white">
                    <tr>
                        <th colspan="5">
                            <div class="flex justify-between items-center p-2">
                                <div class="text-gray-700">0 of 5 row(s) selected.</div>
                                <div class="flex items-center gap-4">
                                    <label for="rowsPerPage" class="text-gray-700">Rows per page:</label>
                                    <select id="rowsPerPage" class="select select-bordered w-20">
                                        <option>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                    <span class="text-gray-700">1-10 of 50</span>
                                    <div class="join grid grid-cols-4">
                                        <button class="join-item btn btn-outline btn-secondary"> |< </button>
                                                <button class="join-item btn btn-outline btn-secondary">
                                                    < </button>
                                                        <button class="join-item btn btn-outline btn-secondary"> >
                                                        </button>
                                                        <button class="join-item btn btn-outline btn-secondary">
                                                            >|</button>
                                    </div>
                                </div>
                            </div>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</x-app-layout>
