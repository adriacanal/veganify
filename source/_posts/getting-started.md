---
extends: _layouts.post
section: content
title: Getting Started
date: 2022-10-15
description: Getting started with Veganify
cover_image: /assets/img/post-cover-image-2.png
featured: true
categories: [configuration]

---

Getting started with Veganify

### Adding Content

You can write your content using a Markdown file. By default, the project expects your content to be located in the `source/_posts/` folder.

The top of each content page contains a YAML header that specifies how it should be rendered. The `title` attribute is used to dynamically generate HTML `title` and OpenGraph tags for each page. The `extends` attribute defines which parent Blade layout this content file will render with (e.g. `_layouts.post` will render with `source/_layouts/post.blade.php`), and the `section` attribute defines the Blade "section" that expects this content to be placed into it.

```yaml
---
extends: _layouts.post
section: content
title: Vegan chilli
date: 2022-10-15
description: Our healthy vegan chilli recipe packs in plenty of vegetables and doesn’t fall short on the flavour front. Serve it with rice or in jacket potatoes for a filling supper
cover_image: /assets/img/vegan-chilli.jpg
featured: false
---
```

### Adding Assets

Files such as images can be added directly to `/source/assets/`.
