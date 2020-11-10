#!/bin/bash
file=/opt/dist/deployed.done
if [ ! -f $file ] ; then
  
  mkdir /var/www/html/§§INSTANCENAME
  cp -R /var/www/html/* /var/www/html/§§INSTANCENAME/
  
  rm -R /var/www/html/nextcloud2027/§§INSTANCENAME/
  
  chown -R www-data /var/www/html/§§INSTANCENAME/
  
  service apache2 reload
  apt-get update
  apt-get install nano
  
  
  mkdir /opt/dist/
  touch /opt/dist/deployed.done
  service apache2 start
  tail -f /var/log/dpkg.log
fi
