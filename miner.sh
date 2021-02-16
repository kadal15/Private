apt install software-properties-common
add-apt-repository ppa:jonathonf/gcc-7.1
apt update
apt upgrade
apt install git build-essential cmake libuv1-dev libssl-dev libmicrohttpd-dev gcc-7 g++-7
git clone https://github.com/xmrig/xmrig.git
cd xmrig
mkdir build
cd build
cmake ..
make

./xmrig --donate-level 1 -o turtlecoin.herominers.com:10381 -u TRTLuzYRMUyS6wDNU1BWACWHHmr8F7TrM6rQcfbi3nkKb39uN8u69nPMDkPuPKy4QyWiZk84qohBmSur8oDLftFsSSKeHwnws4U -p x -a chukwav2 -t 4 -k 

