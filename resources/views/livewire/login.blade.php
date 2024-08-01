<div>
    <x-slot name="title">Login</x-slot>
    <div class="space-y-8">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="bg-gray-800 text-white rounded-t-lg py-5"></div>
            <div class="p-6">
                <form wire:submit.prevent="login">

                    <x-form.form-input id="email" name="email" label="Email Address" type="email" />

                    <x-form.form-input id="password" name="password" label="Password" type="password" />
                    
                    <div class="mb-4">
                        <label for="remember" class="flex items-center">
                            <input type="checkbox" wire:model="remember" id="remember" name="remember" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                            <span class="ml-2 block text-sm text-gray-900">Remember me</span>
                        </label>
                    </div>
                    <div class="mt-4 text-start">
                        <span class="text-sm text-gray-700">Belum punya akun?</span>
                        <a href="/register" class="text-sm font-medium text-indigo-600 hover:text-indigo-500" wire:navigate>Register</a>
                    </div>
                    <div class="my-4">
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
