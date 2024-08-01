<div>
    <x-slot name="title">Register</x-slot>
    <div class="space-y-8">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="bg-gray-800 text-white rounded-t-lg py-5"></div>
            <div class="p-6">
                <form wire:submit.prevent="register">
                    <x-form.form-input id="name" name="name" label="Name" type="text" />
                    <x-form.form-input id="email" name="email" label="Email Address" type="email" />
                    <x-form.form-input id="password" name="password" label="Password" type="password" />
                    <x-form.form-input id="password_confirmation" name="password_confirmation" label="Password Confirmation" type="password" />
                    <div class="mt-4 text-start">
                        <span class="text-sm text-gray-700">Sudah punya akun?</span>
                        <a href="/login" class="text-sm font-medium text-indigo-600 hover:text-indigo-500" wire:navigate>Login</a>
                    </div>
                    <div class="my-4">
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
