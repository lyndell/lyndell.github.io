


# List drives

## FreeBSD

atacontrol list | grep ':  ad[0-9]' | sed 's/^.*:  //'
camcontrol devlist | grep '(da[0-9]' | sed -E 's/^(.*) \((da[0-9]+).*$/\2 \1/'


## Linux

fdisk -l | grep Disk


# Windows

## Timestamp

Include `.LOG` in the first line of text file.

-- [Windows Notepad: Insert Time and Date into Text or Log File ](http://www.tech-recipes.com/rx/909/windows-notepad-insert-time-and-date-into-text-or-log-file/)

Press `F5` to insert current timestamp.

I added the same into VI, originally with:

     imap <f5>   <C-R>=strftime("%d/%m/%Y %H:%M:%S")<CR> 

Currently:

     :nnoremap <F5> "=strftime("%d/%m/%Y %H:%M:%S")<CR>P
     :inoremap <F5> <C-R>=strftime("%d/%m/%Y %H:%M:%S")<CR>



## Shutdown



-l : Logs off the current user, this is also the defualt. -m ComputerName takes precedence.
-s : Shuts down the local computer.
-f : Forces running applications to close.



http://www.microsoft.com/resources/documentation/windows/xp/all/proddocs/en-us/shutdown.mspx?mfr=true

## tskill



# List NICs

## VMware


    ~ # 
    ~ # esxcli network nic list
    Name    PCI Device     Driver  Link  Speed  Duplex  MAC Address         MTU  Description                                      
    ------  -------------  ------  ----  -----  ------  -----------------  ----  -------------------------------------------------
    vmnic0  0000:0c1:00.0  igb     Up     1000  Full    00:25:90:59:3a:2a  1500  Intel Corporation I350 Gigabit Network Connection
    vmnic1  0000:0c1:00.1  igb     Up     1000  Full    00:25:90:59:3a:2b  1500  Intel Corporation I350 Gigabit Network Connection
    vmnic2  0000:0c4:00.0  igb     Up     1000  Full    00:25:90:c9:5b:14  1500  Intel Corporation I350 Gigabit Network Connection
    vmnic3  0000:0c4:00.1  igb     Up     1000  Full    00:25:90:c9:5b:15  1500  Intel Corporation I350 Gigabit Network Connection
    vmnic4  0000:0c4:00.2  igb     Down      0  Half    00:25:90:c9:5b:16  1500  Intel Corporation I350 Gigabit Network Connection
    vmnic5  0000:0c4:00.3  igb     Down      0  Half    00:25:90:c9:5b:17  1500  Intel Corporation I350 Gigabit Network Connection
    ~ # 





# Misc

I always get the symlinks wrong

tech@wrkstn ~ $ ln -s Dropbox/canned/ canned
tech@wrkstn ~ $ l -F canned
lrwxrwxrwx 1 15 Mar 12 21:29 canned -> Dropbox/canned//
tech@wrkstn ~ $





# git

Needed to run `git-update-server-info` after uploading GIT repository


> This means that when you push to the server via SSH, Git will run this command to update the files needed for HTTP fetching.
>
>  http://git-scm.com/book/en/Git-on-the-Server-Public-Access
