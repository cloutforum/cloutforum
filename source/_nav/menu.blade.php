<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Speakers" href="/speakers"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/speakers') ? 'active text-blue-600' : '' }}">
        Speakers
    </a>

    <a title="{{ $page->siteName }} Schedule" href="/schedule"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/schedule') ? 'active text-blue-600' : '' }}">
        Schedule
    </a>

    <a title="{{ $page->siteName }} Partners" href="/partners"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/partners') ? 'active text-blue-600' : '' }}">
        Partners
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/partners') ? 'active text-blue-600' : '' }}">
        About
    </a>

</nav>
