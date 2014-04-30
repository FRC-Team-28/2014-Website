# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "precise32"

  config.vm.network :forwarded_port, guest: 80, host: 8080

  config.vm.network "private_network", ip: "192.168.10.10"

  config.vm.synced_folder ".", "/vagrant", :mount_options => ["dmode=777","fmode=666"]

end
