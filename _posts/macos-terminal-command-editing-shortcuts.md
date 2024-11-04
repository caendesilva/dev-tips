---
title: "MacOS Terminal Command Editing Shortcuts"
description: "A cheat sheet of useful editing shortcuts for the macOS terminal"
date: "2024-11-04"
author: caen
---

**Command Editing Shortcuts**

<kbd>Ctrl + a</kbd> – go to the start of the command line

<kbd>Ctrl + e</kbd> – go to the end of the command line

<kbd>Ctrl + k</kbd> – delete from cursor to the end of the command line

<kbd>Ctrl + u</kbd> – delete from cursor to the start of the command line

<kbd>Ctrl + w</kbd> – delete from cursor to start of word (i.e. delete backwards one word)

<kbd>Ctrl + y</kbd> – paste word or text that was cut using one of the deletion shortcuts (such as the one above) after the cursor

<kbd>Ctrl + xx</kbd> – move between start of command line and current cursor position (and back again)

<kbd>Alt + b</kbd> – move backward one word (or go to start of word the cursor is currently on)

<kbd>Alt + f</kbd> – move forward one word (or go to end of word the cursor is currently on)

<kbd>Alt + d</kbd> – delete to end of word starting at cursor (whole word if cursor is at the beginning of word)

<kbd>Alt + c</kbd> – capitalize to end of word starting at cursor (whole word if cursor is at the beginning of word)

<kbd>Alt + u</kbd> – make uppercase from cursor to end of word

<kbd>Alt + l</kbd> – make lowercase from cursor to end of word

<kbd>Alt + t</kbd> – swap current word with previous

<kbd>Ctrl + f</kbd> – move forward one character

<kbd>Ctrl + b</kbd> – move backward one character

<kbd>Ctrl + d</kbd> – delete character under the cursor

<kbd>Ctrl + h</kbd> – delete character before the cursor

<kbd>Ctrl + t</kbd> – swap character under cursor with the previous one

**Command Recall Shortcuts**

<kbd>Ctrl + r</kbd> – search the history backwards

<kbd>Ctrl + g</kbd> – escape from history searching mode

<kbd>Ctrl + p</kbd> – previous command in history (i.e. walk back through the command history)

<kbd>Ctrl + n</kbd> – next command in history (i.e. walk forward through the command history)

<kbd>Alt + .</kbd> – use the last word of the previous command

**Command Control Shortcuts**

<kbd>Ctrl + l</kbd> – clear the screen

<kbd>Ctrl + s</kbd> – stops the output to the screen (for long running verbose command)

<kbd>Ctrl + q</kbd> – allow output to the screen (if previously stopped using command above)

<kbd>Ctrl + c</kbd> – terminate the command

<kbd>Ctrl + z</kbd> – suspend/stop the command

**Bash Bang (!) Commands**

Bash also has some handy features that use the ! (bang) to allow you to do some funky stuff with bash commands.

`!!` – run last command
`!blah` – run the most recent command that starts with ‘blah’ (e.g. !ls)

`!blah:p` – print out the command that !blah would run (also adds it as the latest 
command in the command history)

`!$` – the last word of the previous command (same as <kbd>Alt + .</kbd>)

`!$:p` – print out the word that !$ would substitute

`!*` – the previous command except for the last word (e.g. if you type `_find somefile.txt /`, then `!*` would give you `_find somefile.txt`)

`!*:p` – print out what `!*` would substitute

---

Credit:

https://stackoverflow.com/questions/327664/mac-os-x-terminal-map-optiondelete-to-backward-delete-word/58966776#58966776 (CC BY-SA 4.0)
