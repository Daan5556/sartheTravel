1. Download xampp
2. Vind de htdocs folder in de C:
3. Clone repo in deze map
4. Ga naar C:\xampp\apache\conf\extra\httpd-vhosts.conf
5. Zet het volgende in deze file:

<VirtualHost *:80>
DocumentRoot "C:/xampp/htdocs/sartheTravel"
ServerName travel.local
<Directory "C:/xampp/htdocs/sartheTravel">
Options Indexes FollowSymLinks
AllowOverride All
Require all granted
</Directory>
</VirtualHost>

(check of de directory goed staat voor jouw pc,
eventueel kan je die url aanpassen "travel.local")

6. Ga naar C:\Windows\System32\drivers\etc\hosts
7. Zet het volgende in de file:

127.0.0.1 travel.local

8. Save de file als admin
9. Start appache op in Xamp, of restart hem
10. Navigeer in de browser naar: "travel.local" (of je eigen url)
