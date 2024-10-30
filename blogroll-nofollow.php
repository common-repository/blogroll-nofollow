<?php

    /*
    Plugin Name: Blogroll Nofollow 
    Plugin URI: http://jmoz.co.uk/blog/wordpress-blogroll-nofollow-plugin/8
    Description: Simple plugin to add a nofollow value to the rel attribute of all blogroll links.
    Version: 1.0
    Author: James Morris
    Author URI: http://jmoz.co.uk
    */
    
    /*
    Copyright 2008  James Morris  (email : james@jmoz.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
    */    

    function blogroll_nofollow($content) {
        foreach ($content as $link) {
            $link->link_rel = trim("nofollow $link->link_rel");
        }
        
        return $content;
    }

    add_filter ('get_bookmarks', 'blogroll_nofollow');
    
?>