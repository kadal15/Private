apt-get update && apt-get upgrade -y
apt-get install git build-essential cmake libuv1-dev libmicrohttpd-dev libssl-dev -y
apt-get install -qqy automake
apt-get install -qqy libcurl4-openssl-dev
apt-get install -qqy make
git clone https://github.com/magi-project/wolf-m7m-cpuminer-V2.git
cd wolf-m7m-cpuminer-V2
./autogen.sh
./configure CFLAGS="-O3"
make

./minerd -a m7mhash -o stratum+tcp://m7m.mine.zpool.ca:6033 -u DJG4YG3ARUkSt9e5xvHvSS3faVx3v1HM9p -p c=DOGE -t 4
