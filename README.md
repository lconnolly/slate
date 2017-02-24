# Blank Slate Wordpress Install


## Overview / Config

1. Configure OSX / Apache for local WordPress
2. Install WordPress files (and set permissions)
    - `$ find . -type d -exec chmod 0755 {} \;`
    - `$ find . -type f -exec chmod 0644 {} \;`
3. Create MySQL DB / user & grant permissions
    - `CREATE DATABSE <db_name>;`
    - `CREATE USER '<db_user>'@'localhost' IDENTIFIED BY '<password>';`
    - `GRANT ALL PRIVILEGES ON <db_name> . * TO '<db_user>'@'localhost';`
4. Rename `wp-config.sample.dev.php` to `wp-config.dev.php` and configure vars
5. Repeat Step #4 for:
    - `wp-config.sample.stage.php`
    - `wp-config.sample.prod.php`
6. Generate Salts & update values in wp-config.php
7. Run WP Install Wizard


## Theme Configuration
1.
2. Update inc/analytics.php with GA Property ID
