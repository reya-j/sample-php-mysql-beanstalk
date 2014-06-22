SCRIPT=$(readlink -f $0)
export PATH=$PATH:`dirname $SCRIPT`/eb/linux/python2.7/
mkdir -p .elasticbeanstalk
cp config .elasticbeanstalk/
eb init
eb push
