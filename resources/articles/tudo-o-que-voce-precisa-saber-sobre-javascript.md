---
title: Tudo o que você precisa saber sobre JavsaScript
slug: tudo-o-que-voce-precisa-saber-sobre-javascript
date: 15/10/2023
tags: web,js
---

On Twitter I came across a great tip on displaying empty states with CSS.

When you're rendering a list, I often wrap a loop in an if/else statement to display an empty state when the list is empty.

```blade
<section>
@if($events->isNotEmpty())
    @foreach($events as $event)
        <article>
            {{ $event->name }}
        </article>
    @endforeach
@else
    <p>No events created yet!</p>
@endif
</section>
```
