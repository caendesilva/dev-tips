---
title: "Use Blue Links in Tailwind Typography (Prose)"
description: "Want to use the more classic look of links when using the Tailwind typography prose plugin? Here's how."
date: "2024-09-27"
author: caen
---

Tailwind Typography (that adds the `.prose` class) comes with a very opinionated link style. If you want the more classic one, it's easy to fix in the config. You can also go bold and use any other color of course. I'm going with Indigo for a sweet blue link.

```js
theme: {
    extend: {
        fontFamily: {
            sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        },
        typography: (theme) => ({ // [tl! focus]
            DEFAULT: { // [tl! focus]
                css: { // [tl! focus]
                    a: { // [tl! focus]
                        color: theme('colors.indigo.600'), // [tl! focus]
                        textDecoration: 'none', // [tl! focus]
                        '&:hover': { // [tl! focus]
                            color: theme('colors.indigo.500'), // [tl! focus]
                        }, // [tl! focus]
                    }, // [tl! focus]
                }, // [tl! focus]
            }, // [tl! focus]
        }), // [tl! focus]
    },
},
```

And that's it!
