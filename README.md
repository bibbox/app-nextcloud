# NextCloud BIBBOX application

This container can be installed as [BIBBOX APP](http://bibbox.readthedocs.io/en/latest/admin-documentation/ "BIBBOX App Store") or standalone, after the  installation follow these [instructions](https://github.com/bibbox/app-nextcloud/blob/master/INSTALL-APP.md).

## Standalone Installation

Clone the github repsoitory and start  install.sh. If necessary change the ports and volume mounts in `docker-compose.yml`.  

```shell
$ git clone https://github.com/bibbox/app-nextcloud
$ cd app-nextcloud
$ chmod +x install.sh
$ ./install.sh
```
Open in a browser [http://127.0.0.1:8065](http://127.0.0.1:8065) and login with the user **v** credentials  **vendetta**


## Install within BIBBOX

The BIBBOX framework can be installed 
* as a [virtual machine](http://bibbox.bbmri-eric.eu/resources/machine/), 
* using [vagrant/puppet](http://bibbox.readthedocs.io/en/latest/installation-vagrant/) 
* on any Ubuntu System following these [instructions](http://bibbox.readthedocs.io/en/latest/installation-source/)  

After BIBBOX is up and running, you can use the [BIBBOX APP Store](http://bibbox.readthedocs.io/en/latest/admin-documentation/ "BIBBOX App Store") to install nextcloud and several other tools. 


## Docker Images Used
 * [nextcloud](https://hub.docker.com/_/nextcloud/), official nextcloud container
 * [mariaDN](https://hub.docker.com/_/mariadb/), offical MariaDB container
 * [busybox](https://hub.docker.com/_/busybox/), offical data container
