<div class="bg-white w-64 border-r transition-all duration-300">

    {{-- Header --}}
    <div class="p-4 flex items-center gap-3">
        <div class="w-8 h-8 bg-[#12B6D3] rounded-lg flex items-center justify-center shadow-sm">
            <span class="text-white font-bold text-sm">BM</span>
        </div>
        <template x-if="!collapsed">
            <div>
                <span class="font-bold text-lg text-gray-900">Bimaju</span>
                <p class="text-xs text-gray-500">UMKM Assistant</p>
            </div>
        </template>
    </div>

    {{-- Content --}}
    <div class="px-2 space-y-4">
        {{-- Main --}}
        <div>
            <p class="text-xs font-semibold text-gray-500 px-2" x-show="!collapsed">Main</p>
            <ul class="space-y-1 mt-1">
                <li>
                    <a href="{{ url('/dashboard') }}" class="flex items-center gap-2 px-2 py-2 rounded-md hover:bg-gray-100">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span x-show="!collapsed">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/learning') }}" class="flex items-center gap-2 px-2 py-2 rounded-md hover:bg-gray-100">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <span x-show="!collapsed">Learning</span>
                    </a>
                </li>
            </ul>
        </div>

        {{-- Business Tools --}}
        <div>
            <p class="text-xs font-semibold text-gray-500 px-2" x-show="!collapsed">Business Tools</p>
            <button @click="openBusiness = !openBusiness"
                    class="w-full flex items-center justify-between px-2 py-2 rounded-md hover:bg-gray-100">
                <div class="flex items-center gap-2">
                    💼 <span x-show="!collapsed">Business Tools</span>
                </div>
                <span x-show="!collapsed" x-text="openBusiness ? '▼' : '▶'"></span>
            </button>
            <ul x-show="openBusiness" class="ml-4 mt-1 space-y-1">
                <li><a href="{{ url('/finance') }}" class="flex items-center gap-2 px-2 py-2 rounded-md hover:bg-gray-100">📊 <span x-show="!collapsed">Finance</span></a></li>
                <li><a href="{{ url('/hpp-calculator') }}" class="flex items-center gap-2 px-2 py-2 rounded-md hover:bg-gray-100">🧮 <span x-show="!collapsed">HPP Calculator</span></a></li>
                <li><a href="{{ url('/recipes') }}" class="flex items-center gap-2 px-2 py-2 rounded-md hover:bg-gray-100">👨‍🍳 <span x-show="!collapsed">Recipes</span></a></li>
            </ul>
        </div>

        {{-- Community --}}
        <div>
            <p class="text-xs font-semibold text-gray-500 px-2" x-show="!collapsed">Community</p>
            <ul class="space-y-1 mt-1">
                <li>
                    <a href="{{ url('/consultation') }}" class="flex items-center gap-2 px-2 py-2 rounded-md hover:bg-gray-100">
                            <i class="fa fa-question" aria-hidden="true"></i>
                            <span x-show="!collapsed">Consultation</span>
                        <span x-show="!collapsed" class="ml-auto bg-red-500 text-white text-xs px-2 py-0.5 rounded-full">3</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/community') }}" class="flex items-center gap-2 px-2 py-2 rounded-md hover:bg-gray-100">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span x-show="!collapsed">Community</span>
                    </a>
                </li>
            </ul>
        </div>

        {{-- Subscription Card --}}
        <div class="bg-gray-100 rounded-lg p-3" x-show="!collapsed">
            <p class="text-sm font-semibold">Upgrade Plan</p>
            <p class="text-xs text-gray-500">Get premium features</p>
            <button class="w-full mt-2 bg-[#12B6D3] text-white py-1.5 rounded-lg text-sm">Upgrade</button>
        </div>
    </div>

    {{-- Footer --}}
    <div class="mt-auto p-2">
        <ul class="space-y-1">
            <li><a href="{{ url('/profile') }}" class="flex items-center gap-2 px-2 py-2 rounded-md hover:bg-gray-100">👤 <span x-show="!collapsed">Profile</span></a></li>
            <li><a href="{{ url('/settings') }}" class="flex items-center gap-2 px-2 py-2 rounded-md hover:bg-gray-100">⚙️ <span x-show="!collapsed">Settings</span></a></li>
            <li><a href="{{ url('/subscription') }}" class="flex items-center gap-2 px-2 py-2 rounded-md hover:bg-gray-100">👑 <span x-show="!collapsed">Subscription</span></a></li>
        </ul>
    </div>
</div>
