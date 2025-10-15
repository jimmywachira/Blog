<div class="flex min-h-full flex-col justify-center px-3 py-6 lg:px-4">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-5 text-center text-3xl font-bold leading-9 tracking-tight text-white">Sign in </h2>
    </div>

    <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white/5 backdrop-blur-sm shadow-lg rounded-xl overflow-hidden">
            <form wire:submit="authenticate" class="space-y-6 p-8">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-white/80">Email address</label>
                    <div class="mt-2">
                        <input id="email" wire:model="email" type="email" class="w-full border-0 bg-white/5 py-2 px-3 text-white ring-1 ring-inset ring-white/10 placeholder:text-white/50 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6" placeholder="you@example.com">
                    </div>
                    @error('email') <span class="mt-2 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-white/80">Password</label>
                    <div class="mt-2">
                        <input id="password" wire:model="password" type="password" class="w-full border-0 bg-white/5 py-2 px-3 text-white ring-1 ring-inset ring-white/10 placeholder:text-white/50 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6" placeholder="••••••••">
                    </div>
                    @error('password') <span class="mt-2 text-sm text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center bg-blue-600 px-3 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition">Sign in</button>
                </div>

                @if (session()->has('message'))
                <div class="text-center text-sm text-red-400">
                    {{ session('message') }}
                </div>
                @endif
            </form>
        </div>
    </div>
</div>
