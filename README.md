# NextCloud BIBBOX application

This container can be installed as [BIBBOX APP](http://bibbox.readthedocs.io/en/latest/admin-documentation/ "BIBBOX App Store") or standalone. 

* after the docker installation follow these [instructions](https://github.com/bibbox/app-nextcloud/blob/master/INSTALL-APP.md)

## Standalone Installation

Clone the github repsoitory and start the install.sh. If necessary change the ports and volume mounts in `docker-compose.yml`.  

`$ git clone https://github.com/bibbox/app-nextcloud`

`$ cd app-nextcloud`

`$ chmod +x install.sh`

`$ ./install.sh`

* initial user/passwordd: **v / vendetta**


## Install within BIBBOX

The BIBBOX framework can be installed 
* as a [virtual machine](http://bibbox.bbmri-eric.eu/resources/machine/), 
* using [vagrant/puppet](http://bibbox.readthedocs.io/en/latest/installation-vagrant/) 
* are on any Ubuntu System following these [instructions](http://bibbox.readthedocs.io/en/latest/installation-source/)  

After BIBBOX is up and running, you can use the [BIBBOX APP Store](http://bibbox.readthedocs.io/en/latest/admin-documentation/ "BIBBOX App Store") to install a lot of software tools. 

## Hints
* approx. time with medium fast internet connection: **5 minutes**


## Docker Images Used
 * [owncloud](https://hub.docker.com/_/nextcloud/), official OwnCloud container
 * [mySQL](https://hub.docker.com/_/mariadb/), offical MariaDB container
 * [busybox](https://hub.docker.com/_/busybox/), offical data container
 
## Install Environment Variables

