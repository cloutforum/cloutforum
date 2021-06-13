<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Speakers"
                href="/speakers"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/speakers') ? 'active text-blue' : '' }}"
            >Speakers</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Schedule"
                href="/schedule"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/schedule') ? 'active text-blue' : '' }}"
            >Schedule</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Partners"
                href="/partners"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/partners') ? 'active text-blue' : '' }}"
            >Partners</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/partners') ? 'active text-blue' : '' }}"
            >About</a>
        </li>
    </ul>
</nav>
