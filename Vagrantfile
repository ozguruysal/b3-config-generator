# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagranfile setting up a virtual machine ready to serve the project files on port 80
#
# Requirements
# ------------
#
# - install VirtualBox - https://www.virtualbox.org/
# - install Vagrant - http://www.vagrantup.com/
#
# Usage
# -----
# - Open a terminal in the project directory and type `vagrant up`.
#   Or if you are using PhpStorm, go in the `Tools` menu and click `vagrant` and `Up`
# - Open your Internet browser and go to http://localhost/
#

Vagrant.configure(2) do |config|
  config.vm.box = "phusion/ubuntu-14.04-amd64"
  config.vm.hostname = "b3-config-generator"
  config.vm.network "forwarded_port", guest: 80, host: 80
  config.vm.synced_folder ".", "/var/www/html"

  config.vm.provider "virtualbox" do |vb|
    vb.memory = 512
    vb.cpus = 1
  end

  config.vm.provision "shell", inline: <<SCRIPT

apt-get update
apt-get install -y php5 php5-xsl libapache2-mod-php5 php5-mcrypt

SCRIPT

end
