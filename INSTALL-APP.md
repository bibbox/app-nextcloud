## Quick Notes

* initial user/passwordd: **v / vendetta**

## NextCloud Installation Instructions 

* As soon as NetCloud has been installed within the BIBBOX, you can launch it from the Applications menu. If the login page does not appear, take your time the PHP app has to be setup in the background.

In the new version you need the configure the trusted domain, go to your base directory, and edit the config file with

        sudo nano data/html/config/config.php   

and replace in 

```php
trusted_domains' =>
  array (
    0 => 'localhost',
  ),
```

localhost with the domainname of your nextcloud APP. 



![SCREEN1](screen-01.png)

* you can login with the user **v** and the credentials **vendetta**. This is the default admin user, change this in production envirnoments. 

![SCREEN2](screen-02.png)


## Backup instructions

* Backup the database App directory, replace APPID with the id (subdomain) of the installed app. 

        /opt/bibbox/application-instance/APPID-app-nextcloud
        
* Backup the data directory 
    
        /opt/bibbox/application-instance/APPID-app-nextcloud/data
        
* Backup the Maria DB database with the command
       
       docker exec  APPID-nextcloud-db /usr/bin/mysqldump -u root --password='YOURROOTPASSWORD' nextcloud > /home/vmadmin/nextcloudbackup.sql

   if you forgot the database root password, you can lookup it in the docker-compose file. 
   
        /opt/bibbox/application-instance/APPID-app-nextcloud/docker-compose.yml


## After the installation

Have a nice ride with the new Admins youngtimer.

![FINAL](install-screen-final.jpg)
