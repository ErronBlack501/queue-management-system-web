<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Counter creation') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Create a new counter for a existing service.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('counters.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="counter_number" :value="__('Counter number')" />
            <x-text-input id="counter_number" name="counter_number" placeholder="{{ __('Enter the counter number') }}"
                type="text" value="{{ old('counter_number') }}" class="mt-1 block w-full" required />
            <x-input-error class="mt-2" :messages="$errors->get('counter_number')" />
        </div>

        <div>
            <h1 class="block font-medium text-sm text-gray-700">{{ __('Counter status') }}</h1>
            <div class="p-1 border border-secondary rounded-lg w-full max-w-xs">
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text">Open</span>
                        <input type="radio" name="counter_status" value="open" class="radio checked:bg-primary"
                            checked />
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text">Closed</span>
                        <input type="radio" name="counter_status" value="closed" class="radio checked:bg-secondary" />
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text">Suspended</span>
                        <input type="radio" name="counter_status" value="suspended" class="radio" />
                    </label>
                </div>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('counter_status')" />
        </div>


        <select id="service_id" name="service_id" class="select select-secondary w-full max-w-xs" required>
            <option value="" disabled selected>Pick a existing service that it belongs to</option>
            @foreach ($services as $service)
                <option value="{{ $service->id }}">{{ $service->service_name }}</option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('service_id')" />

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Create') }}</x-primary-button>
        </div>
    </form>
</section>
