REST console
============

This is a simple web-based testing tool for REST requests, especially
for Elasticsearch. It needs PHP (for proxying REST requests) and node
with bower to install the required Javascript libs. It is meant to be
installed on the private (developer) web server of a web developer.

Features
--------
- Comfortable handling of JSON bodies of both requests and responses
  thanks to the [ACE editor](https://ace.c9.io):
    - Syntax highlighting
    - Pretty formatting (indenting)
    - Easy editing and copy'n'paste
- Requests are saved in the browser history: navigate back to repeat
a request

Requirements
------------

A web server with node and bower and PHP.
 
Installation and Usage
----------------------

Clone this project to a directory on your server, then `bower install`
and `composer install`.

In your browser, navigate to `index.html` in this directory. There, 
on the right side of the page, you
can enter the URL of your REST endpoint, select the HTTP method,
enter a JSON body and press "OK" to send a request.

The Response will appear on the left side.





