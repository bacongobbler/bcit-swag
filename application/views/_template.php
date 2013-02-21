<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/**
 * views/_template.php
 *
 * Main template for the webapp.
 * Pull together the content bits and layout the pages consistently.
 *
 * @author   Matthew Fisher
 * @author   Jason Bolanos
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>{title}</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" href="/assets/style.css" type="text/css" />
    </head>
    <body>
        <div id="header-wrapper">
            <div id="header">
                <div id="logo">
                    <a href="/"><img src="/assets/images/seahawks-banner.jpg" /></a>
                </div>
            </div>
        </div>
        <div id="menu-wrapper">
            <div id="menu">
                {menubar}
            </div>
        </div>
        <div id="middle">
            <h1 id="title">{title}</h1>
            <div id="page">
                {content}
            </div>
        </div>
        <div id="footer">
            <div id="copyright">Copyright &copy; 2012, <a href="mailto:matt.fisher6@gmail.com">Matthew Fisher</a>, <a href="mailto:jasonbolanos92@gmail.com">Jason Bolanos</a></div>
        </div>
    </body>
</html>
