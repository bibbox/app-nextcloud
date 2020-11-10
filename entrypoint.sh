#!/bin/bash
file=/opt/dist/deployed.done
if [ ! -f $file ] ; then
  while [ ! -f /var/www/html/lib/versioncheck.php ]; do sleep 1; done
  sleep 2
  mkdir /var/www/html/§§INSTANCENAME
  cp -R /var/www/html/* /var/www/html/§§INSTANCENAME/

  rm -R /var/www/html/§§INSTANCENAME/§§INSTANCENAME/

  chown -R www-data /var/www/html/§§INSTANCENAME/

  apt-get update
  apt-get install nano

  service apache2 reload
  mkdir /opt/dist/
  touch /opt/dist/deployed.done
  #service apache2 start
  #tail -f /var/log/dpkg.log  
fi
