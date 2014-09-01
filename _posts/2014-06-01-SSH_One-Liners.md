du -sch path to/files


check a website for a response or forwarding. 

    curl -I -L -k  https://www.example.com

I don't always use all the swtiches:

* -I  HTTP headers only
* -L  follow redirects
* -k  ignore certificate errors.  



top -bn1 | head -n15

ls -lrth
ls -lrSh


For a busy webserver:

    killall -9 php && killall -9 httpd && service mysql restart && service httpd start

