
Drupal 7 module to provide support for the SimpleUploads CKEditor plugin.
--------------------------------------
This module provides basic support for the SimpleUploads CKEditor plugin:
http://alfonsoml.blogspot.com/p/simpleuploads-plugin-for-ckeditor.html
The SimpleUploads plugin provides drag and drop uploading and 
inline placement of those images in CKEditor. 

Basic installation steps are below.
For a more comprehensive set of steps visit:
http://adamkempler.com


### Installation and Setup

- Make sure you have CKEditor installed and setup.
- Install the SimpleUploads plugin to the ckeditor drupal module plugins folder.
- Edit the ckeditor drupal module's ckeditor.config.js and add the following lines:
-- config.extraPlugins = 'simpleuploads';
-- config.filebrowserUploadUrl = 'upload.php';
- Enable the plugin in whichever ckeditor profiles you want it available.
- Enable this module.
- Configure this module at /admin/config/content/simpleuploads
- Give the "Use SimpleUploads" permission to the relevant roles.


Maintainers
-----------
- Adam Kemper http://adamkempler.com
