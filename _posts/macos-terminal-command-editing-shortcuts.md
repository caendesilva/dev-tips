---
title: "MacOS Terminal Command Editing Shortcuts"
description: "A cheat sheet of useful editing shortcuts for the macOS terminal"
date: "2024-11-04"
author: caen
---

**Command Editing Shortcuts**

<code>Ctrl+a</code> – go to the start of the command line

<code>Ctrl+e</code> – go to the end of the command line

<code>Ctrl+k</code> – delete from cursor to the end of the command line

<code>Ctrl+u</code> – delete from cursor to the start of the command line

<code>Ctrl+w</code> – delete from cursor to start of word (i.e. delete backwards one word)

<code>Ctrl+y</code> – paste word or text that was cut using one of the deletion shortcuts (such as the one above) after the cursor

<code>Ctrl+xx</code> – move between start of command line and current cursor position (and back again)

<code>Alt+b</code> – move backward one word (or go to start of word the cursor is currently on)

<code>Alt+f</code> – move forward one word (or go to end of word the cursor is currently on)

<code>Alt+d</code> – delete to end of word starting at cursor (whole word if cursor is at the beginning of word)

<code>Alt+c</code> – capitalize to end of word starting at cursor (whole word if cursor is at the beginning of word)

<code>Alt+u</code> – make uppercase from cursor to end of word

<code>Alt+l</code> – make lowercase from cursor to end of word

<code>Alt+t</code> – swap current word with previous

<code>Ctrl+f</code> – move forward one character

<code>Ctrl+b</code> – move backward one character

<code>Ctrl+d</code> – delete character under the cursor

<code>Ctrl+h</code> – delete character before the cursor

<code>Ctrl+t</code> – swap character under cursor with the previous one

**Command Recall Shortcuts**

<code>Ctrl+r</code> – search the history backwards

<code>Ctrl+g</code> – escape from history searching mode

<code>Ctrl+p</code> – previous command in history (i.e. walk back through the command history)

<code>Ctrl+n</code> – next command in history (i.e. walk forward through the command history)

<code>Alt+.</code> – use the last word of the previous command

**Command Control Shortcuts**

<code>Ctrl+l</code> – clear the screen

<code>Ctrl+s</code> – stops the output to the screen (for long running verbose command)

<code>Ctrl+q</code> – allow output to the screen (if previously stopped using command above)

<code>Ctrl+c</code> – terminate the command

<code>Ctrl+z</code> – suspend/stop the command

**Bash Bang (!) Commands**

Bash also has some handy features that use the ! (bang) to allow you to do some funky stuff with bash commands.

`!!` – run last command
`!blah` – run the most recent command that starts with ‘blah’ (e.g. !ls)

`!blah:p` – print out the command that !blah would run (also adds it as the latest 
command in the command history)

`!$` – the last word of the previous command (same as <code>Alt+.</code>)

`!$:p` – print out the word that !$ would substitute

`!*` – the previous command except for the last word (e.g. if you type `_find somefile.txt /`, then `!*` would give you `_find somefile.txt`)

`!*:p` – print out what `!*` would substitute

---

Credit: https://stackoverflow.com/questions/327664/mac-os-x-terminal-map-optiondelete-to-backward-delete-word/58966776#58966776 (CC BY-SA 4.0)
