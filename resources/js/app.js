import hljs from 'highlight.js'
import 'highlight.js/styles/github-dark.min.css'

const codeBlocks = document.querySelectorAll('pre')
codeBlocks.forEach(function(el) {
    const codeEl = el.firstElementChild
    const language = codeEl
        .getAttribute('class')
        .split('language-')
        .at(1)

    el.innerHTML = hljs.highlight(el.innerText, {
        language
    }).value
})
