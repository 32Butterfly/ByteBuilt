#!/bin/bash

#This script is meant to download docker and required stuff for docker

#Check if the script was ran with sudo!
if [ "$UID" -ne 0 ]; then
  echo "ERROR: Script has to be launched with 'sudo ./setup.sh'"
  exit
fi

apt install -y apt-transport-https ca-certificates curl software-properties-common

# Add Docker GPG key and repository
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg
echo "deb [arch=$(dpkg --print-architecture) signed-by=/usr/share/keyrings/docker-archive-keyring.gpg] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable" | tee /etc/apt/sources.list.d/docker.list

# Install Docker
apt update
apt install -y docker-ce docker-ce-cli containerd.io

# Enable and start Docker service
systemctl enable --now docker
