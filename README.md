Spe 1 2014

The .htaccess article (http://newbieonruby.com/jekyll-include-htaccess/) was helpful, however, the "none" layout is tripping me up.

Create a new layout to avoid non-exist warning

```
lyndells-mbp:nuclear lyndell$ cat _layouts/none.txt 
        {{ content }}

lyndells-mbp:nuclear lyndell$ 
```

Preview server doesn't process `.htaccess`.  It was rendered and present in the `_site` directory.
