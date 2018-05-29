#1. dirigirse a la carpeta de instalacion
cd /var/www/proyecto_web_sobreruedas

#2. Copiar y asignar permisos a los archivos del certificado para https
cd archivosdeconfiguracion

mv proyecto_web.key /etc/ssl/private/
mv proyecto_web.crt /etc/ssl/certs/

chmod 664 /etc/ssl/certs/proyecto_web.crt
chmod 640 /etc/ssl/private/proyecto_web.key

#3. Crear los virtualhost
mv proyecto_web.conf /etc/apache2/sites-available
mv proyecto_web_ssl.conf /etc/apache2/sites-available

sed -i '127.0.0.1	www.sobreruedas.com' /etc/hosts

#4. Activar los virtualhost
a2ensite proyecto_web.conf
a2ensite proyecto_web_ssl.conf

a2enmod ssl
#5. Reiniciar apache
systemctl reload apache2
systemctl restart apache2

#6. Instalar la base de datos

#en caso de haber cambiado de carperta /var/www/proyecto_web_sobreruedas/archivosdeconfiguracion
su postgres
psql < scriptDB.sql
