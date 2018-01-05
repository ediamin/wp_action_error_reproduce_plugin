# WordPress 'action' error reproduce plugin

This is a test plugin for reproduce the error described in https://core.trac.wordpress.org/ticket/43005

## Install
```
npm install
```

Using WP v4.9.1

Main reason is, in some admin pages(e.g plugins.php) if we have `postMessage("", "http://wp.dev/");` in any of the enqueued scripts, then WP's `updates.js` throws error
```
Uncaught TypeError: Cannot read property 'action' of null
```

If you want to reproduce the error without this plugin, simply type `postMessage("", "http://wp.dev/");` in your console, where `http://wp.dev/` is the site origin.