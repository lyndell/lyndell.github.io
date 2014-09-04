---
layout:      post
categories:  tips
title:       SSH convenience
#date:		 10:54pm (time)
excerpt:     Type less when logging into SSH frequently
---


Don't have to type `root@` nor `-l root`every time you log into a server with SSH.  Create a `~/.ssh/config` file containing:

```
Host *
  User root
```
