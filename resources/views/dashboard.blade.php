<x-app-layout>
  <div class="navbar bg-slate-300">
      <div class="flex-1">
          <a class="btn btn-ghost text-xl">M4RK</a>
      </div>
      <div class="flex-none">
          <div class="dropdown dropdown-end">
              <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                  <div class="indicator">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                      <span class="badge badge-sm indicator-item">8</span>
                  </div>
              </div>
              <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
                  <div class="card-body">
                      <span class="font-bold text-lg">8 Items</span>
                      <span class="text-info">Subtotal: $999</span>
                      <div class="card-actions">
                          <button class="btn btn-primary btn-block">View cart</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="dropdown dropdown-end">
              <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                  <div class="w-10 rounded-full">
                      <img alt="Tailwind CSS Navbar component" src="https://images.pexels.com/photos/1386608/pexels-photo-1386608.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                  </div>
              </div>
              <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                  <li>
                      <a class="justify-between" href="{{ route('profile.edit') }}">
                          <div>{{ Auth::user()->name }}</div>
                          <span class="badge">P</span>
                      </a>
                  </li>
                  <li><a>Settings</a></li>
                  <li>
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <button type="submit" class="logout-btn">Logout</button>
                      </form>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <ul class="menu bg-slate-100 w-61">
    <ul class="menu bg-slate-200 w-60 rounded-box">
      <li><a>Item 1</a></li>
      <li>
        <details open>
          <summary>Parent</summary>
          <ul>
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
            <li>
              <details open>
                <summary>Parent</summary>
                <ul>
                  <li><a>Submenu 1</a></li>
                  <li><a>Submenu 2</a></li>
                </ul>
              </details>
            </li>
          </ul>
        </details>
      </li>
      <li><a>Item 3</a></li>
      <li><a>Item 1</a></li>
      <li>
        <details open>
          <summary>Parent</summary>
          <ul>
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
            <li>
              <details open>
                <summary>Parent</summary>
                <ul>
                  <li><a>Submenu 1</a></li>
                  <li><a>Submenu 2</a></li>
                </ul>
              </details>
            </li>
          </ul>
        </details>
      </li>
      <li><a>Item 3</a></li>
      <li><a>Item 1</a></li>
      <li>
        <details open>
          <summary>Parent</summary>
          <ul>
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
            <li>
              <details open>
                <summary>Parent</summary>
                <ul>
                  <li><a>Submenu 1</a></li>
                  <li><a>Submenu 2</a></li>
                </ul>
              </details>
            </li>
          </ul>
        </details>
      </li>
      <li><a>Item 3</a></li>
    </ul>
  </ul>
  <br />
  <footer class="footer items-center p-4 bg-neutral text-neutral-content fixed bottom-0 left-0 w-full">
      <aside class="items-center grid-flow-col">
          <!-- Your copyright information -->
      </aside>
      <nav class="grid-flow-col gap-4 md:place-self-center md:justify-self-end">
          <!-- Your social media icons -->
      </nav>
  </footer>
</x-app-layout>
