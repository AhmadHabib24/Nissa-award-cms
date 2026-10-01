<!-- Mobile Bottom Navigation (App-like) for Admin Panel -->
<div class="lg:hidden fixed bottom-0 left-0 w-full bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 z-[100] pb-2 pt-3 px-2 flex justify-between items-center text-xs text-gray-500 dark:text-gray-400 shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.05)] rounded-t-2xl">
    <a href="{{ url('/admin') }}" class="flex flex-col items-center justify-center w-1/5 hover:text-primary-600 dark:hover:text-primary-500 {{ request()->is('admin') ? 'text-primary-600 dark:text-primary-500' : '' }} transition">
        <x-heroicon-o-home class="w-6 h-6 mb-1" />
        <span class="truncate w-full text-center">Home</span>
    </a>
    
    <a href="{{ url('/admin/categories') }}" class="flex flex-col items-center justify-center w-1/5 hover:text-primary-600 dark:hover:text-primary-500 {{ request()->is('admin/categories*') ? 'text-primary-600 dark:text-primary-500' : '' }} transition">
        <x-heroicon-o-tag class="w-6 h-6 mb-1" />
        <span class="truncate w-full text-center">Category</span>
    </a>
    
    <a href="{{ url('/admin/nominees') }}" class="flex flex-col items-center justify-center w-1/5 hover:text-primary-600 dark:hover:text-primary-500 {{ request()->is('admin/nominees*') ? 'text-primary-600 dark:text-primary-500' : '' }} transition relative">
        <div class="absolute -top-6 bg-primary-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg border-4 border-gray-50 dark:border-gray-950">
            <x-heroicon-o-users class="w-6 h-6" />
        </div>
        <span class="mt-6 font-bold {{ request()->is('admin/nominees*') ? 'text-primary-600 dark:text-primary-500' : '' }} truncate w-full text-center">Nominees</span>
    </a>
    
    <a href="{{ url('/admin/votes') }}" class="flex flex-col items-center justify-center w-1/5 hover:text-primary-600 dark:hover:text-primary-500 {{ request()->is('admin/votes*') ? 'text-primary-600 dark:text-primary-500' : '' }} transition">
        <x-heroicon-o-check-badge class="w-6 h-6 mb-1" />
        <span class="truncate w-full text-center">Votes</span>
    </a>
    
    <a href="{{ url('/admin/settings') }}" class="flex flex-col items-center justify-center w-1/5 hover:text-primary-600 dark:hover:text-primary-500 {{ request()->is('admin/settings*') ? 'text-primary-600 dark:text-primary-500' : '' }} transition">
        <x-heroicon-o-cog-6-tooth class="w-6 h-6 mb-1" />
        <span class="truncate w-full text-center">Settings</span>
    </a>
</div>

<style>
    /* Add padding to the body so the bottom nav doesn't overlap content on mobile */
    @media (max-width: 1024px) {
        body {
            padding-bottom: 5rem !important;
        }
    }
</style>
