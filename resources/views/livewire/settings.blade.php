<div>
    <x-auth-session-status class="mb-4" :status="session('settings')" />

    <x-form class="max-w-sm mx-auto" wire:submit.prevent="submit">
        @wire
            <x-form-input name="user.name" :label="__('Your name')" />
            <x-form-textarea name="user.biography" label="Biography" />

            <div class="mt-3">
                <x-form-checkbox name="user.subscribe_to_newsletter" label="Do you want to subscribe to the newsletter?" />
            </div>

            <x-form-group name="user.theme" label="Which UI theme do you want to use?" inline>
                <x-form-radio name="user.theme" value="light" label="Light mode" />
                <x-form-radio name="user.theme" value="dark" label="Dark mode" />
            </x-form-group>

            <x-form-select name="user.language" :options="$languages" label="Select your language" />
        @endwire

        <x-form-submit>
            Save settings
        </x-form-submit>
    </x-form>
</div>
