---
layout: post
title:  SSH One-Liners
categories: tips
---

Disk usage in human readable units, with total

    du -sch path to/files

| Switch | Description                   |
| --- -- |------------------------------ |
|  -I    | HTTP headers only             |
|  -L    | follow redirects              |
|  -k    | ignore certificate errors.    |

check a website for a response or forwarding. 

    curl -I -L -k  https://www.example.com

I don't always use all the swtiches:

| Switch | Description                 |
| ------ | --------------------------- |
|   -I   | HTTP headers only           |
|   -L   | follow redirects            |
|   -k   | ignore certificate errors.  |

See the top few lines from `top`.

    top -bn1 | head -n15

    ls -lrth
    ls -lrSh


For a busy webserver, kill PHP and Apache processes, restart database server and Apache:

    killall -9 php && killall -9 httpd && service mysql restart && service httpd start

