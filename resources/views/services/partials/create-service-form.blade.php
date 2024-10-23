<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Service creation') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Create a new service.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('services.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="service_name" :value="__('Service name')" />
            <x-text-input id="service_name" name="service_name" placeholder="{{ __('Enter the service name') }}"
                type="text" value="{{ old('service_name') }}" class="mt-1 block w-full" required />
            <x-input-error class="mt-2" :messages="$errors->get('service_name')" />
        </div>

        <div>
            <x-input-label for="service_description" :value="__('Service description')" />
            <textarea id="service_description" name="service_description"
                class="textarea textarea-secondary textarea-bordered w-full"
                placeholder="{{ __('What is the description of the service ? ') }}" required>{{ old('service_description') }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('service_description')" />
        </div>

        <div class="flex flex-col gap-y-1">
            <x-input-label for="is_active" :value="__('Is active ?')" />
            <div class="flex flex-row gap-x-4">
                <div>
                    <span class="text-secondary">No</span>
                    <input id="radio-false" type="radio" name="is_active" value="false"
                        class="radio checked:bg-secondary" />
                </div>
                <div>
                    <span class="text-secondary">Yes</span>
                    <input id="radio-true" type="radio" name="is_active" value="true"
                        class="radio checked:bg-primary" checked="checked" />
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Create') }}</x-primary-button>
        </div>
    </form>
</section>
