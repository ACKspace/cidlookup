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
* make sure the web directory is writable ( `chmod 775 .;chown :www-data .` or create writable `freeswitch_cidlookup.db` in the web directory
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
* to activate cidlookup in the dialplan, use the following:
```
<action application="set" data="caller_id_name=${cidlookup(${caller_id_number})}"/>
<action application="set" data="effective_caller_id_name=${caller_id_name}"/>
```
* it is also possible to set callee id name: `<action application="export" data="callee_id_name=${cidlookup($1)}" />`

# NOTE
When posting the name to a URI (like a message push service) from within FreeSWITCH, one can get the best results using lua (instead of a curl application):
In the dialplan: `<action application="lua" data="call_post.lua"/>`
and the script (replacing the spaces, located at `/usr/share/freeswitch/scripts/call_post.lua`):
```
if (session:ready()) then
    -- replace spaces
    local name = session:getVariable("caller_id_name"):gsub("%s+", "%%20")
    session:execute("curl", "https://domain.tld/push.php?msg=Call%20from%3A%20" .. session:getVariable("caller_id_number") .. "%20('" .. name .. ")'")
end
```
One might want to look into [url-encode](https://gist.github.com/liukun/f9ce7d6d14fa45fe9b924a3eed5c3d99)

# TODO
* look into CNAM / NAPTR E2U+X-ADDRESS
* store data in local database