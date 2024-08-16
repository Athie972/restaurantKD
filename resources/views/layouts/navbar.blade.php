<nav class="bg-blue-500 border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <div class="">
          <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
              <img src="images/logo_ecrit.png" class="h-10" alt="Flowbite Logo" />
          </a>
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
      </div>
      <hr>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-blue-500 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <li>
                  <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'block py-2 px-3 text-blue-700 bg-white rounded md:bg-transparent md:text-white md:p-0 dark:text-white md:dark:text-blue-500' : 'block py-2 px-3 text-gray-900 hover:bg-gray-100 rounded md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}" aria-current="page">Accueil</a>
              </li>
              <li>
                  <a href="{{ route('reservation') }}" class="{{ request()->routeIs('reservation') ? 'block py-2 px-3 text-blue-700 bg-white rounded md:bg-transparent md:text-white md:p-0 dark:text-white md:dark:text-blue-500' : 'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">Reservation</a>
              </li>
              <li>
                  <a href="{{route('menu')}}" class="{{ request()->routeIs('menu') ? 'block py-2 px-3 text-blue-700 bg-white rounded md:bg-transparent md:text-white md:p-0 dark:text-white md:dark:text-blue-500' : 'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">Menu</a>
              </li>
              <li>
                  <a href="{{ route('contacts') }}" class="{{ request()->routeIs('contacts') ? 'block py-2 px-3 text-blue-700 bg-white rounded md:bg-transparent md:text-white md:p-0 dark:text-white md:dark:text-blue-500' : 'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">Contacts</a>
              </li>
              <li>
                  @auth
                      <x-dropdown align="right" width="48">
                          <x-slot name="trigger">
                              <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                  <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                              </button>
                          </x-slot>

                          <x-slot name="content">
                              <x-dropdown-link :href="route('dashboard')">
                                  {{ __('Profile') }}
                              </x-dropdown-link>

                              <form method="POST" action="{{ route('logout') }}">
                                  @csrf
                                  <x-dropdown-link :href="route('logout')"
                                      onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                      {{ __('Logout') }}
                                  </x-dropdown-link>
                              </form>
                          </x-slot>
                      </x-dropdown>
                  @else
                      <a href="{{ route('login') }}" class="text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Se Connecter</a>
                      <a href="{{ route('register') }}" class="ml-4 text-gray-900 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">S'inscrire</a>
                  @endauth
              </li>
          </ul>
      </div>
  </div>
</nav>
