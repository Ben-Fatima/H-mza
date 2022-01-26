<nav
    class="
        sticky
        shadow
        top-0
        z-10
        flex
        items-center
        justify-between
        w-full
        backg-black
    "
>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <img src="/images/LOGO.jpeg" class="w-16" alt="logo hamza" />
        </div>
        <x-navbar.link to="/offers"> Offers</x-navbar.link>
        @auth
        <x-navbar.link to="/profile">Profile</x-navbar.link>
        <form method="POST" action="/logout">
            @csrf
            <button
                class="
                    bg-stone-200
                    px-6
                    rounded
                    py-1
                    text-black text-sm
                    hover:bg-stone-300
                    cursor-pinter
                    my-4
                    mx-4
                    font-light
                "
                type="submit"
            >
                Log Out<i class="fas fa-sign-out-alt p-1"></i>
            </button>
        </form>
        @endauth @guest
        <x-navbar.link to="/register">Register</x-navbar.link>
        <x-navbar.link to="/login">Log in</x-navbar.link>
        @endguest
    </div>
</nav>
