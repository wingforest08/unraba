<!-- Navbar start-->
<nav class="navbar">
    <img class="img-Logo" id="logo" src="img/header-Logo.jpg" />
    <div class="flex left-40 absolute">
    <a href="/" class="navbar-logo">Unraba <span class="text-primary2">Utama</span> Grup </a>
    </div>
    <div class="navbar-nav right-60 absolute">
      <a href="/" class="{{ request()->is('/')  ? 'active' : '' }}">Home</a>
      <a href="/about" class="{{ request()->is('about')  ? 'active' : '' }}">Tentang Kami</a>
      <a href="/portofolio" class="{{ request()->is('portofolio')  ? 'active' : '' }}">Portofolio</a>
      <a href="/contact" class="{{ request()->is('contact')  ? 'active' : '' }}">Kontak</a>
      <a href="/product"class="{{ request()->is('product')  ? 'active' : '' }}">Produk</a>
    </div>

    <div class=" navbar-extra">
    <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
      <div class=" navbar-extra-2 flex justify-center items-center space-x-4" x-data="{ isOpen: false }">
        <div class="hidden md:block" >
          <div class="ml-4 flex items-center md:ml-6" >
            <button type="button"  class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs h-8 items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute-inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>
              <div
              x-show="isOpen"
              x-transition:enter="transition ease-out duration-100 transform"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75 transform"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              @click.outside="isOpen = false"
              x-cloak
              class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-black hover:text-orange-400" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-black hover:text-orange-400" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-black hover:text-orange-400" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
              </div>
            </div>
          </div>
        </div>
      </div>

</nav>

  <!-- Navbar end-->