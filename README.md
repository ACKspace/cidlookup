# cidlookup
Caller ID lookup backend for FreeSWITCH's mod_cidlookup

# installation
* clone this repo
* make sure you have a file `cid_config.php` in the web directory parent with the following contents:
```
<?php
const CID_API_KEY = "<your_desired_key>";
?>
```
* make sure the web directory is writable by `www-data` or create writable `freeswitch_cidlookup.db` in the web directory
* upload or create `contacts.vcf` in the web directory
* create the tables that are needed within FreeSSWITCH:
```
sudo -u freeswitch sqlite3 /var/lib/freeswitch/db/cidlookup.db "CREATE TABLE phonebook (id INTEGER PRIMARY KEY,name TEXT NOT NULL, type TEXT NOT NULL);"
sudo -u freeswitch sqlite3 /var/lib/freeswitch/db/cidlookup.db "CREATE TABLE numbers (phonebook_id INTEGER,number TEXT NOT NULL);"
```
* edit `/etc/freeswitch/autoload_configs/cidlookup.conf.xml` to enable URL lookup:
```
<param name="url" value="https://domain.tld/cid.php?key=<your_desired_key>&amp;number=${caller_id_number}"/>
```
* have the module loaded and try: `cidlookup 31457112345`

# TODO
* look into CNAM / NAPTR E2U+X-ADDRESS
* store data in local database