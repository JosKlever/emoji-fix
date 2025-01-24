# Emoji Fix
This plugin is used to fix a bug in WordPress when using emojis.

The code was used from https://stackoverflow.com/questions/63100373/wordpress-unable-to-save-or-update-posts-with-emoji

The bug in WordPress is discussed on https://core.trac.wordpress.org/ticket/60362

# When to use?
If you are using emojis in your posts or pages and get the following error when you try to save it:
`Updating failed. Could not update post in the database.`
And if you remove the emoji it works without errors.

# Extra changes to wp-config.php
In the section with database details you'll find the definition of 2 constants. Change them to:
```
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );
```

## Disclaimer
Usage of this plugin is at your own risk. It worked for me on 1 site and I've saved it here. If you have questions or comments, please create an issue.
