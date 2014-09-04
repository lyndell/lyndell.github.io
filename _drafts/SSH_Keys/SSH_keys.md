---
layout: post
title:  Creat an SSH Key
date:   2014-08-22 16:34:15
categories: ssh
---
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

Sample public key:

    ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCi25oPPJr5ZkgAeWigC978ZKUfv5M/I7sbQrrqWnpkfqmYGMaC914gefBdLFIqFwYUqS1ojcXB2WM6DMTZlF6wAX20OHbgqVKY6HwHPLmxUfYroxY3OnLXjJ+6RpUcpOzX3PKuImHcUGCM9HSW6xs9pminfaEUHklgiWojBAcGz7qcGAzsPG0TTJgxuxkkewOYSwE0aLDHH2nS9TfOM5/44FlYKBHqy3hBXG9a3Jecx6Rbd3PasSwcmjGx9yb1XstSnEsk9iPHa8AOPoJ+EeNAeoUe5hKDIgFDZJgLJscyavisyfAsZCqheJt/Dk90cIQqVjpGOaSSqjm6g4uI8y7B lrottmann@10-36-2-227

This is what the private key will look like:

```
-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEAotuaDzya+WZIAHlooAve/GSlH7+TPyO7G0K66lp6ZH6pmBjG
gvdeIHnwXSxSKhcGFKktaI3FwdljOgzE2ZResAF9tDh24KlSmOh8Bzy5sVH2K6MW
Nzpy14yfukaVHKTs19zyriJh3FBgjPR0lusbPaZop32hFB5JYIlqIwQHBs+6nBgM
7DxtE0yYMbsZJHsDmEsBNGiwxx9p0vU3zjOf+OBZWCgR6st4QVxvWtyXnMekW3dz
2rEsHJoxsfcm9V7LUpxLJPYjx2vADj6CfhHjQHqFHuYSgyIBQ2SYCybHMmr4rMnw
LGQqoXibfw5PdHCEKlY6Rjmkkqo5uoOLiPMuwQIDAQABAoIBABhTTt6pwcgw095m
RA9r1oHCkrt8RQUwVBlNTVgF7bQnCzPxt20Gf+O/8vwny5oH2FurrWGpk3lR/DVG
hPyu4bnObzVFHdSO1gyK5UO7eU0YHfoEoSPcshyqH42WT1148PuJQCJsdkuPIezL
8sI8GdSKj6U86Zt0rqchv129k0Mb9RZacsAr/SQbr5w8Ik5ORzqwMz5+f89BN16Z
cMp1+T7laUSCXtlm0Xwi27H2jNX02adbCMhqFio6tH4nn6xGFwaIEwuLtQUi9ypk
70Yh7JR901Z0gQ0iX/zz19V19A0FyublMcCcF1901T5olbwmAX8qCsy0UWWf4hNq
YWwW3MECgYEAznCrMsBoOz+NC7amMqK8G6z1QsQNsKzcucgmc+aXuGdagmEbrGVf
/o+H1irmeJ+ky1OhVSy77TPIAg8mVtaQmq+uo+RTAmYbU+RnmNsubWPTF7dk9ca+
0NZavYyNmESotSlxmBrVpvGDhQec6oGhHi6l+4c6c+obKFCdKLjWtskCgYEAyfR3
XM80vSlSSzvuhYZBNNUloFidyL7iqwag289fWDvbxS8TNnrjrAm+bRLtLrFbPcMQ
uO/xQWlpsNRey61dd8d8ZqQtbrcQ+Gf5O4QM5HJw4RD/kbI6uqfibBLbx1Dg1k+x
WQqUCGtoejQHMCercuyBngzE69QRcU31N+KynDkCgYEAtz8v2EcOvrj0vJcPBBeM
Hozy0Kcy98cZzxepemwP9TJZFy6X3/nEsjQ6AZPnLN+Y6pt7tB2XW0EBo0JLZ/3i
Mk0MGpMMVC7KxzcR9o9osNVRhdXXGoumyb3cojDnZ2ha0STOnpQDXsM3WZieY1NZ
7269C37IFiiSnsCgIIuinHECgYA/K+06ZsZEdWx8hB60Pa6f7Bx877tLVAprHQOs
Pk3At9ii8Xq9C+uzoMikLctrU6cKxr2wW73HjEW3Pnb4lx4pnYjYQnrDqxfv2/Ym
G8Q8oV+Vx09qL6oXQPSegbelvTLXVs5O3/Q2PgLMVwH4mjATHs/ctHnUmt1p58zQ
0mS0YQKBgAH6LwJYuipjvA9znMeWuZPGHBY+VN2FF+WOUENW3kJDSQx1sgClI1z6
SkNTD0oTrjHwuNMw6+LwyX1SMZoiakKtfdEtThuSBXgBD2DLvIphlSyOevvtr4QC
RwtqtiXTrcehVokbTjAeQzA/xAnRIDfYo2EQEo+Z1ChIdhj5r0jF
-----END RSA PRIVATE KEY-----
```

**DO NOT SHARE THE PRIVATE KEY**  If the private key is every leaked, create a new SSH key pair.

Upload the key with the command `ssh-copy-id`.  If that is not availbe, you can manually append the `.pub` key to the `~/.ssh/authorized_keys` file on the server.  Make sure is it not writable by group, nor everyone.  Note the permissions below:


```
[root@CentOS ~]# ll .ssh/authorized_keys
-rw-r--r--. 1 root root 2650 Apr  3 23:19 .ssh/authorized_keys
[root@CentOS ~]# 
[root@vps ~]# ll .ssh/authorized_keys
-rw-r--r-- 1 root root 3046 Jun 11 23:15 .ssh/authorized_keys
[root@vps ~]# 
```

