<div>
    <div class="max-w-2xl mx-auto bg-white/10 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden">
        <div class="p-6 sm:p-8">
            <h1 class="text-3xl font-bold text-white text-center mb-6">Edit Article</h1>
            <form wire:submit="save" class="space-y-6">
                <div>
                    <label for="title" class="block text-white/80 mb-1">Title</label>
                    <input type="text" id="title" wire:model="form.title" class="w-full rounded-md border-0 bg-white/5 py-2 px-3 text-white ring-1 ring-inset ring-white/10 placeholder:text-white/50 focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:text-sm sm:leading-6" placeholder="{{ $title ?? 'Enter article title' }}">
                    <div> @error('title') <span class="text-red-500 mt-2 p-2 text-sm">{{ $message }}</span> @enderror</div>
                </div>
                <div>
                    <label for="body" class="block text-white/80 mb-1">Content</label>
                    <textarea id="body" wire:model="form.content" rows="6" class="w-full rounded-md border-0 bg-white/5 py-2 px-3 text-white ring-1 ring-inset ring-white/10 placeholder:text-white/50 focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:text-sm sm:leading-6" placeholder="{{ $content ?? 'Enter article content' }}"></textarea>
                    <div> @error('body') <span class="text-red-500 mt-2 text-sm">{{ $message }}</span> @enderror</div>
                </div>

                <div class="mb-3">
                    <label class="flex items-center">
                        <input type="checkbox" name="published" wire:model.boolean="form.published" class="mr-2" />
                        Published
                    </label>
                </div>

                <div class="mb-3">
                    <div>Notification Options</div>

                    <div class="flex mt-2 gap-6">
                        <label class="flex items-center">
                            <input type="radio" value="true" wire:model.boolean="form.allowNotifications" class="mr-2" />
                            Yes
                        </label>
                        <label class="flex items-center">
                            <input type="radio" value="false" wire:model.boolean="form.allowNotifications" class="mr-2" />
                            No
                        </label>
                    </div>

                    <div class="flex mt-2 gap-6">
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

                <div class="flex justify-end">
                    <a href="/dashboard/articles" class="inline-flex items-center px-4 py-2 border-2 hover:text-black border-white/50 shadow text-white bg-inherit hover:border-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 mr-2">
                        Cancel
                    </a>

                    <button type="submit" class="inline-flex items-center px-4 py-2 border-2 hover:text-blue-700 border-white/50 shadow text-white bg-inherit hover:border-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
