# get the latest wsdltophp.phar
if [ ! -f wsdltophp.phar ]; then
    echo "Download wsdltophp.phar once";
    wget https://phar.wsdltophp.com/wsdltophp.phar;
fi

# get current folder
DEST=`pwd`;

# clean current folder
rm -rf  $DEST/src/ \
        $DEST/tutorial.php \
        $DEST/composer.json \
        $DEST/composer.lock;

# package informations
php-7.4 wsdltophp.phar generate:package \
    --urlorpath="http://www.ovh.com/soapi/soapi-dlw-1.63.wsdl" \
    --destination=$DEST \
    --composer-name="wsdltophp/package-ovh" \
    --composer-settings="autoload.psr-4.SoapClient\:./SoapClient/" \
    --addcomments="author:WsdlToPhp <contact@wsdltophp.com>" \
    --soapclient="\SoapClient\SoapClientBase" \
    --namespace="Ovh";

# generate package
php-7.4 wsdltophp.phar generate:package \
    --urlorpath="http://www.ovh.com/soapi/soapi-dlw-1.63.wsdl" \
    --destination=$DEST \
    --composer-name="wsdltophp/package-ovh" \
    --composer-settings="autoload.psr-4.SoapClient\:./SoapClient/" \
    --addcomments="author:WsdlToPhp <contact@wsdltophp.com>" \
    --soapclient="\SoapClient\SoapClientBase" \
    --namespace="Ovh" \
    --force;
