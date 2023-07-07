<nav class="flex bg-white text-center p-4">
    <div class="flex-auto w-auto align-middle">
        <a href="/" class="nav-item">Home</a>
    </div>
    <div class="dropdown">
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
            class="flex-initial bg-yellow-700 rounded p-2 text-white font-bold">
            SG
        </button>

        <div class="dropdown-content">
            <ul class="dropdown-list">
                <li class="dropdown-item"><a href="{{ route('profile') }}" class="block px-4 py-2">My profile</a></li>
                <li class="dropdown-item"><a href="{{ route('profile.settings') }}" class="block px-4 py-2">Settings</a>
                </li>
                <li class="dropdown-item"><a href="{{ route('user.logout') }}" class="block px-4 py-2">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
