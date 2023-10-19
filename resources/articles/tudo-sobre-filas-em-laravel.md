---
title: Tudo sobre filas em Laravel
slug: tudo-sobre-filas-em-laravel
date: 18/10/2023
tags: web,laravel,queue,fila,async
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
