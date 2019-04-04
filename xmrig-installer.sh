#!/bin/sh


ulang="y"
while [ $ulang = "y" ]
do
  clear
  echo "\033[1;31m#     #"
  echo " #   #  #    # #####  #  ####"
  echo "  # #   ##  ## #    # # #    #"
  echo "   #    # ## # #    # # #"
  echo "  # #   #    # #####  # #  ###"
  echo " #   #  #    # #   #  # #    #"
  echo "#     # #    # #    # #  ####"
  echo "  \033[1;32m    Xmrig Installer\n\n"
  echo -n "Do Tou Want To Continue (Y/N) : "
  read pil;
  if [ $pil = "y" ]||[ $pil = "Y" ]
  then
      echo "Installing Starting....!"
      apt-get update && apt-get upgrade -y
      apt-get install git build-essential cmake libuv1-dev libmicrohttpd-dev libssl-dev -y
      git clone https://github.com/xmrig/xmrig.git
      cd xmrig
      mkdir build
      cd build
      cmake ..
      make
      echo "Installing Finish"
      exit
  elif [ $pil = "n" ]||[ $pil = "N" ]
  then
      echo "\033[1;31mBye Bye.....!"
      sleep 2
      exit
  else
     echo "\033[1;31mERROr : Wrong Input....!"
     sleep 2
  fi
done
