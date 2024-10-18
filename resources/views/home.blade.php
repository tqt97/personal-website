<x-guest-layout>
    <div class="max-w-7xl mx-auto">
        <div class=" dark:bg-gray-800 sm:rounded-lg">
            <h1 class="text-3xl font-bold text-center p-4">Latest Blogs</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 lg:gap-8 px-4 lg:p-2">
                <x-cards.blog />
                <x-cards.blog />
                <x-cards.blog />
                <x-cards.blog />
                <x-cards.blog />
                <x-cards.blog />
                <x-cards.blog />
                <x-cards.blog />
            </div>
            <div class="p-4 mt-4 text-center">
                <a href="#" class="px-4 py-3 bg-gray-900 text-white border-2 border-gray-800 rounded hover:scale-95 hover:bg-white hover:text-gray-900 transition">View all</a>
            </div>
        </div>
    </div>
</x-guest-layout>
