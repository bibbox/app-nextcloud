#!/bin/bash
file=/opt/dist/deployed.done
if [ ! -f $file ] ; then
  
  mkdir /var/www/html/nextcloud2028
  cp -R /var/www/html/* /var/www/html/next8/
  
  rm -R /var/www/html/nextcloud2027/next8/
  
  chown -R www-data /var/www/html/next8/
  
  service apache2 reload
  apt-get update
  apt-get install nano
  
  
  mkdir /opt/dist/
  touch /opt/dist/deployed.done
  service apache2 start
  tail -f /var/log/dpkg.log
fi
