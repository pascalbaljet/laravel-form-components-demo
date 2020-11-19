<x-form class="max-w-sm mx-auto">
    @bind(request()->user())
        <x-form-input name="name" :label="__('Your name')" />
        <x-form-textarea name="biography" label="Biography" />

        <div class="mt-3">
            <x-form-checkbox name="subscribe_to_newsletter" label="Do you want to subscribe to the newsletter?" />
        </div>

        <x-form-group name="theme" label="Which UI theme do you want to use?" inline>
            <x-form-radio name="theme" value="light" label="Light mode" />
            <x-form-radio name="theme" value="dark" label="Dark mode" />
        </x-form-group>

        <x-form-select name="language" :options="$languages" label="Select your language" />
    @endbind

    <x-form-submit>
        Save settings
    </x-form-submit>
</x-form>