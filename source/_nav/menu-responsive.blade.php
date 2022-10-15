<nav id="js-nav-menu" class="w-auto px-2 pt-6 pb-2 bg-gray-200 shadow hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/blog') ? 'active text-green-500' : 'text-gray-800 hover:text-green-500' }}"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                title="About me"
                rel="noreferrer"
                href="https://www.adriacanal.dev/about-me"
                class="block mt-0 mb-4 text-sm no-underline"
            >About me</a>
        </li>
        <li class="pl-4">
            <a
                title="Contact"
                rel="noreferrer"
                href="https://www.adriacanal.dev/contact"
                class="block mt-0 mb-4 text-sm no-underline"
            >Contact</a>
        </li>
    </ul>
</nav>
