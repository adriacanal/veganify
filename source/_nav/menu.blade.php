<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-gray-700 hover:text-green-600 {{ $page->isActive('/blog') ? 'active text-green-600' : '' }}">
        Blog
    </a>

    <a title="About me" rel="noreferrer" href="https://www.adriacanal.dev/about-me"
        class="ml-6 text-gray-700 hover:text-green-600">
        About me
    </a>

    <a title="Contact" rel="noreferrer" href="https://www.adriacanal.dev/contact"
        class="ml-6 text-gray-700 hover:text-green-600">
        Contact
    </a>
</nav>
