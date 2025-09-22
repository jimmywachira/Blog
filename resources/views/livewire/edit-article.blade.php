<div>
    <div class="max-w-2xl mx-auto bg-white/10 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden">
        <div class="p-6 sm:p-8">
            <h1 class="text-3xl font-bold text-white text-center mb-6">Edit Article</h1>

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

        <div class="flex justify-end p-6">
            <a href="/dashboard/articles" class="inline-flex items-center px-4 py-2 border-2 hover:text-black border-white/50 shadow text-white bg-inherit hover:border-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 m-2">
                Cancel
            </a>

            <button type="submit" class="inline-flex items-center m-2 px-4 py-2 border-2 border-white/50 shadow text-white bg-inherit hover:text-blue-500/80 hover:border-blue-500/80 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                Update
            </button>
        </div>
        </form>
    </div>
</div>
