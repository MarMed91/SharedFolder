# Virtual Hosts
#
# VirtualHost example:
# Almost any Apache directive may go into a VirtualHost container.
# The first VirtualHost section is used for all requests that do not
# match a ServerName or ServerAlias in any block.
#
# ServerAdmin webmaster@dummy-host.example.com
# DocumentRoot "/www/docs/dummy-host.example.com"
# ServerName dummy-host.example.com
# ServerAlias www.dummy-host.example.com
# ErrorLog "/private/var/log/apache2/dummy-host.example.com-error_log"
# CustomLog "/private/var/log/apache2/dummy-host.example.com-access_log common"
#
# ServerAdmin webmaster@dummy-host2.example.com
# DocumentRoot "/www/docs/dummy-host2.example.com"
# ServerName dummy-host2.example.com
# ErrorLog "/private/var/log/apache2/dummy-host2.example.com-error_log"
# CustomLog "/private/var/log/apache2/dummy-host2.example.com-access_log common"

ServerName localhost
DocumentRoot /Applications/MAMP/Laravel/BoolBnB

Options Indexes FollowSymLinks MultiViews
AllowOverride All
Order allow,deny
Allow from all

ServerName localhost2
DocumentRoot /Applications/MAMP/htdocs2/

Options Indexes FollowSymLinks MultiViews
AllowOverride All
Order allow,deny
Allow from all

ServerName localhost3
DocumentRoot /Applications/MAMP/htdocs3/

Options Indexes FollowSymLinks MultiViews
AllowOverride All
Order allow,deny
allow from all
