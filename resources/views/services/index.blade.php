<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-white leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>
    <div x-data="{ visibleModal: false }" class="static mx-8">
        <div class="flex justify-center">
            <button class="mt-2 btn btn-circle btn-accent">
                <a href="{{ route('services.create') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        class="size-6 stroke-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg></a>
            </button>
        </div>

        <h2 class="text-center text-secondary text-xl uppercase">list of services</h2>

        <div class="flex justify-end items-center gap-x-1">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-accent btn-sm">
                    <span class="text-white">Columns</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="size-5 fill-white">
                        <path fill-rule="evenodd"
                            d="M10 3a.75.75 0 0 1 .75.75v10.638l3.96-4.158a.75.75 0 1 1 1.08 1.04l-5.25 5.5a.75.75 0 0 1-1.08 0l-5.25-5.5a.75.75 0 1 1 1.08-1.04l3.96 4.158V3.75A.75.75 0 0 1 10 3Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="size-4">
                                <path fill-rule="evenodd"
                                    d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Column 1
                        </span>
                    </li>
                    <li>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="size-4">
                                <path fill-rule="evenodd"
                                    d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Column 2
                        </span>
                    </li>
                </ul>
            </div>
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="Search" />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="h-4 w-4 opacity-70">
                    <path fill-rule="evenodd"
                        d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                        clip-rule="evenodd" />
                </svg>
            </label>
        </div>
        <div class="overflow-x-auto mt-1 mb-3 bg-white rounded-lg border border-gray-200 shadow-lg">
            <table class="table table-zebra bg-white">
                <!-- head -->
                <thead class="bg-white">
                    <tr>
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox checkbox-primary" />
                            </label>
                        </th>
                        <th>Id Service</th>
                        <th>Service name</th>
                        <th>Service description</th>
                        <th>Estimated duration</th>
                        <th>Is active ?</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <!-- row 1 -->
                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox checkbox-primary" />
                                </label>
                            </th>
                            <td>
                                <span>{{ $service->id }}</span>
                            </td>
                            <td>
                                <span>{{ $service->service_name }}</span>
                            </td>
                            <td>
                                <div class="whitespace-prewrap">{{ $service->service_description }}</div>
                            </td>
                            @if ($service->estimated_duration == null)
                                <td class="text-center">?</td>
                            @else
                                <td>{{ $service->estimated_duration }}</td>
                            @endif
                            <td class="flex justify-center">
                                @if ($service->is_active)
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" class="size-6 stroke-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" class="size-6 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                @endif
                            </td>
                            <td>{{ Carbon\Carbon::parse($service->created_at)->format('d M Y H:i:s') }}</td>
                            <td>{{ Carbon\Carbon::parse($service->updated_at)->format('d M Y H:i:s') }}</td>
                            <th>
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button class="btn btn-ghost btn-xs">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                            </svg>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('services.edit', $service)">
                                            <div class="flex flex-row items-center gap-x-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                                <p>{{ __('Edit') }}</p>
                                            </div>
                                        </x-dropdown-link>
                                        <button
                                            class="'block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out' flex flex-row items-center gap-x-1"
                                            onclick="view_modal.showModal()">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="1.5" class="size-6 fill-white stroke-gray-500">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            <p>{{ __('View') }}</p>
                                        </button>
                                        <x-dropdown-link :href="route('services.destroy', $service)">
                                            <div class="flex flex-row items-center gap-x-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                                <p>{{ __('Delete') }}</p>
                                            </div>
                                        </x-dropdown-link>
                                    </x-slot>
                                </x-dropdown>
                            </th>
                        </tr>
                        <!-- Other rows -->
                    @endforeach
                </tbody>
                <tfoot class="bg-white">
                    <tr>
                        <th colspan="9">
                            <div class="flex justify-between items-center p-2">
                                <div class="text-gray-700">0 of 5 row(s) selected.</div>
                                <div class="flex justify-items-end items-center gap-4">
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
        @switch(session('status'))
            @case('service-created')
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)" role="alert"
                    class="absolute bottom-0 right-0 alert w-1/4 mb-2 bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-white" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-semibold text-lg text-white">{{ __('Service created successfully.') }}</span>
                </div>
            @break

            @case('service-updated')
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)" role="alert"
                    class="absolute bottom-0 right-0 alert w-1/4 mb-2 bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-white" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-semibold text-lg text-white">{{ __('Service updated successfully.') }}</span>
                </div>
            @break

            @default
        @endswitch
        <dialog id="view_modal" class="modal modal-bottom sm:modal-middle">
            <div class="modal-box">
                <h3 class="text-lg font-bold">Hello!</h3>
                <p class="py-4">Press ESC key or click the button below to close</p>
                <div class="modal-action">
                    <button class="btn" onclick="document.getElementById('view_modal').close()">Close</button>
                </div>
            </div>
        </dialog>
    </div>
</x-app-layout>
