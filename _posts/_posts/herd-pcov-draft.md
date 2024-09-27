---
title: "herd pcov draft"
description: "draft"
date: 2024-08-19
author: caen
---

builds for php 8.1 and php 8.2 and php 8.3 are on pecl https://pecl.php.net/package/pcov

click on windows icon (dll), example leads to https://pecl.php.net/package/pcov/1.0.11/windows

download the version  matching php -v outpuyt (threadsafe or non-threadsafe and x86 or x64) - example i have " (NTS Visual C++ 2019 x64)"  in php -v so i downloaded the x64 non-threadsafe version

drop the dll file to the dir C:\Users\<usr>\.config\herd\bin\php83\ext\

Add to php.ini
```
[pcov]
extension=pcov
pcov.enabled=1
