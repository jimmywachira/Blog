<div>
    <div class="max-w-2xl mx-auto bg-white/10 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden">
        <div class="p-6 sm:p-8">
            <h1 class="text-3xl font-bold text-white mb-6">Create Article</h1>
            <form wire:submit="save" class="space-y-6">
                <div>
                    <label for="title" class="block text-sm font-medium text-white mb-1">Title</label>
                    <input type="text" id="title" wire:model="form.title" class="w-full rounded-md border-0 bg-white/5 py-2 px-3 text-white ring-1 ring-inset ring-white/10 placeholder:text-white/50 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6" placeholder="Enter article title">
                    @error('title') <span class="text-red-500 p-2 m-2 text-sm">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="article-content" class="block text-sm font-medium text-white mb-1">Article Content</label>
                    <textarea id="article-content" wire:model="form.content" rows="6" class="w-full rounded-md border-0 bg-white/5 py-2 px-3 text-white ring-1 ring-inset ring-white/10 placeholder:text-white/50 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6" placeholder="Enter article content"></textarea>
                    @error('content') <span class="text-red-500 p-2 m-2 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label class="flex items-center">
                        <input type="checkbox" name="published" wire:model.boolean="published" class="mr-2" />
                        Published
                    </label>
                </div>

                <div class="mb-4">
                    <div>Notification Options</div>
                    <div class="flex gap-6">
                        <label class="flex items-center">
                            <input type="radio" name="notification" value="email" wire:model="notification" class="mr-2" />
                            Email
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="notification" value="sms" wire:model="notification" class="mr-2" />
                            SMS
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="notification" value="none" wire:model="notification" class="mr-2" />
                            None
                        </label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Create Article
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
