<div>
    <div class="max-w-2xl mx-auto bg-white/10 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden">
        <div class="p-6 sm:p-8">
            <h1 class="text-3xl font-bold text-white text-center mb-6">Edit Article ( ID: {{ $form->id }}) </h1>

            <form wire:submit="save" class="space-y-6">
                <div>
                    <label wire:dirty.class="text-blue-500/80" wire:target='form.title' for="title" class="block text-white/80 mb-1">
                        Title <span wire:dirty wire:target="form.title" class=" text-sm p-2 text-blue-500/80"> * </span>
                    </label>
                    <input type="text" id="title" wire:model="form.title" class="w-full rounded-md border-0 bg-white/5 py-2 px-3 text-white ring-1 ring-inset ring-white/10 placeholder:text-white/50 focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:text-sm sm:leading-6" placeholder="{{ $title ?? 'Enter article title' }}">
                    @error('form.title') <div class="text-red-500 mt-2 p-2 text-sm">{{ $message }}</div> @enderror
                </div>
                <div>
                    <label wire:dirty.class="text-blue-500/80" wire:target='form.content' for="body" class="block text-white/80 mb-1">
                        Content <span wire:dirty wire:target="form.content" class=" p-2 text-sm text-blue-500/80"> * </span>
                    </label>
                    <textarea id="body" wire:model="form.content" rows="6" class="w-full rounded-md border-0 bg-white/5 py-2 px-3 text-white ring-1 ring-inset ring-white/10 placeholder:text-white/50 focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:text-sm sm:leading-6" placeholder="{{ $content ?? 'Enter article content' }}"></textarea>
                    @error('form.content') <div class="text-red-500 mt-2 text-sm">{{ $message }}</div> @enderror
                </div>

                <div>
                    <label for="body" class="block text-white/80 mb-1">
                        Photo
                    </label>

                    <div class="flex items-center space-x-4 mb-4">
                        <input type="file" id="photo" wire:model="form.photo" class="w-full rounded-md border-0 bg-white/5 py-2 px-3 text-white ring-1 ring-inset ring-white/10 placeholder:text-white/50 focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:text-sm sm:leading-6" />
                    </div>

                    <div>
                        @if($form->photo)
                        <img src="{{ Storage::url($form->photo->temporaryUrl()) }}" class="w-1/2 rounded-lg shadow-md max-h-60" alt="">
                        @elseif ($form->photo_path)
                        <span class="text-sm text-white/80">Current Photo:</span>
                        <img src="{{ Storage::url($form->photo_path) }}" class="w-1/2 rounded-lg shadow-md max-h-60" alt="">

                        @else
                        <span class="text-sm text-white/80">No photo uploaded.</span>
                        @endif
                    </div>

                    @error('form.photo') <div class="text-red-500 mt-2 text-sm">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label wire:dirty.class="text-blue-500/80" wire:target='form.published' class="flex items-center">
                        <input type="checkbox" name="published" wire:model.boolean="form.published" class="mr-2" />
                        Published <span wire:dirty wire:target="form.published" class=" p-2 text-sm text-blue-500/80"> * </span>
                    </label>
                </div>

                <div class="mb-3" wire:target="form.notifications" wire:dirty.class="text-blue-500/80">
                    <div> Allow Notifications <span wire:dirty wire:target="form.allowNotifications" class=" p-2 text-sm text-blue-500/80"> * </span></div>
                </div>

                <div class="flex mt-2 gap-6">
                    <label class="flex items-center">
                        <input type="radio" value="true" wire:model.live="form.allowNotifications" class="mr-2" />
                        Yes
                    </label>
                    <label class="flex items-center">
                        <input type="radio" value="false" wire:model.live="form.allowNotifications" class="mr-2" />
                        No
                    </label>
                </div>

                <div x-data="{ allow: @entangle('form.allowNotifications') }" x-show="allow" class="flex mt-2 gap-6" style="display: none;">
                    <label class="flex items-center">
                        <input type="checkbox" value="email" wire:model="form.notifications" class="mr-2" />
                        Email
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" value="sms" wire:model="form.notifications" class="mr-2" />
                        SMS
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" value="push" wire:model="form.notifications" class="mr-2" />
                        Push
                    </label>
                </div>
        </div>

        <div class="grid grid-cols-2 justify-end p-4 w-1/2">
            <a href="/dashboard/articles" class="text-center p-2 border-2 hover:text-black border-black/50 shadow shadow-black text-white bg-inherit hover:border-black m-2">
                Cancel
            </a>

            <button type="submit" class="m-2 p-2 border-2 border-blue-700/50 shadow shadow-blue-700 text-white bg-inherit hover:text-blue-500/80 hover:border-blue-500/80">
                Update
            </button>
        </div>
        </form>
    </div>
</div>
