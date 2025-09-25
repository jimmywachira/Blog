<div class="m-auto w-3/4 ">
    <h2 class="text-4xl mb-3 text-white text-center">Login</h2>

    <form wire:submit.prevent="authenticate">
        <div class="m-2 p-2">
            <label class="block p-2" for="email">Email:</label>
            <input class="w-full p-2 border-2 text-white bg-inherit" placeholder="Enter your email" type="email" value="{{ old('email') }}" id="email" wire:model="email">
            @error('email') <span class=" m-2 p-2 text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="m-2 p-2">
            <label class="block p-2" for="password">Password:</label>
            <input class="w-full p-2 border-2 text-white bg-inherit" placeholder="Enter your password" type="password" id="password" wire:model="password">
            @error('password') <span class=" m-2 p-2 text-red-500">{{ $message }}</span> @enderror
        </div>

        <button class="text-blue-500 hover:text-blue-700 px-4 py-2 border-2 border-blue-500 shadow hover:shadow-blue-500 hover:border-blue-700 rounded m-2" type="submit">Login</button>
    </form>

    @if (session()->has('message'))
    <div class="alert my-3">
        {{ session('message') }}
    </div>
    @endif
</div>
