# Create a key


    tech@wrkstn SSH_Keys $ ssh-keygen -f example.key
    Generating public/private rsa key pair.
    Enter passphrase (empty for no passphrase): 
    Enter same passphrase again: 
    Your identification has been saved in example.key.
    Your public key has been saved in example.key.pub.
    The key fingerprint is:
    da:17:fe:fa:b4:92:1a:92:a7:88:4b:a1:a6:17:cd:79 lrottmann@10-36-2-227
    The key's randomart image is:
    +--[ RSA 2048]----+
    |                 |
    |                 |
    |                 |
    |                 |
    |  .o .  S .      |
    | ...+ E+ . .     |
    |.... .+ + o..    |
    |o... . + ooo .   |
    |..o.. . ...++    |
    +-----------------+
    tech@wrkstn SSH_Keys $ 


Two files, one is the public key.  This file usually has the extention of `.pub`.  the other is the private key.  Do not share the private key.


    -rw------- 1 1.7K Jun 24 22:32 example.key
    -rw-r--r-- 1  403 Jun 24 22:32 example.key.pub


Append the `.pub` key to the 
~/.ssh/authorized_keys
; file on the server.  Macure is it not writable by group

                   
[root@CentOS ~]# ll .ssh/authorized_keys
-rw-r--r--. 1 root root 2650 Apr  3 23:19 .ssh/authorized_keys
[root@CentOS ~]# 

[root@vps ~]# ll .ssh/authorized_keys
-rw-r--r-- 1 root root 3046 Jun 11 23:15 .ssh/authorized_keys
[root@vps ~]# 

