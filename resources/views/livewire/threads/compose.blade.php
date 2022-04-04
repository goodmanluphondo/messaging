<div class="flex-shrink-0 bg-gray-50 px-4 py-6 sm:px-6">
    <div class="flex space-x-3">
        <div class="flex-shrink-0">
            <x-user.avatar />
        </div>
        <div class="min-w-0 flex-1">
            <form
                x-data="{
                    submit() {
                        this.$refs.submit.click();
                    }
                }"
                action="#"
                wire:submit.prevent="send"
            >
                <div>
                    <label for="comment" class="sr-only">About</label>
                    <textarea wire:model="body" x-on:keydown.enter="submit" id="comment" name="comment" rows="3" class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-gray-300 rounded-md" placeholder="Type a message"></textarea>
                </div>
                <div class="mt-3 flex items-center justify-between">
                    <a href="#" class="group inline-flex items-start text-sm space-x-2 text-gray-500 hover:text-gray-900">
                        <x-icon.question-mark-circle />
                        <span>{{__('Press ENTER to send message.')}}</span>
                    </a>
                    <x-button.primary type="submit" x-ref="submit">{{__('Comment')}}</x-button.primary>
                </div>
            </form>
        </div>
    </div>
</div>
