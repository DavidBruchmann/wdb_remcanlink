TYPO3 Extension "Remove Canonical Link"
=======================================

This extension adds a switch in page-properties to avoid that the canonical link is
shown on the page in the frontend. The setting is page-based without any inheritance.

Prerequisite:
-------------
On existing websites it's advised to have database access with a tool like **phpMyAdmin**.

Requirements:
-------------
 - A working installation of TYPO3 Version 10.4.10 or higher
 - Installed extension `seo`

Installation:
-------------
Download from github:  
```
composer require wdb/remove-canonical-link
```

In **Admin Tools** on the page **Maintenance** click on the button **Analyze database**
and asure that the field `show_canonical` is added to the table `pages`.

There is no configuration required or possible.  
The extension just works as long as it's installed.  

Important:
----------
The default setting for the new field `show_canonical` has the value `1` in the database.
If this extension is used on existing websites all records have to be updated to have the
value `1` in the new field:  
```
UPDATE pages SET show_canonical=1;
```
Afterwards the setting can be changed on individual pages.

On new pages the value for the new field `show_canonical` will be automatically `1` in the
database and has to be adjusted if the canonical linke never shall be shown.

How it's working?
-----------------
The extension extends the class `\TYPO3\CMS\Seo\Canonical\CanonicalGenerator` of the extension
**seo** and is changing only the method `generate`. If the value `show_canonical` is `0` then
an empty string for the canonical link is returned, else the orginial method of the parent
class is called and everything works like defined in the seo-extension itself.  

Translation
-----------
The one phrase that is shown in backend is translated by google-translate to all languages
that are usually shown in the translation-tool. It's likely that there are faults or improvable 
expressions. If you remark something like that, please file a corresponding issue on 
https://github.com/DavidBruchmann/wdb_remcanlink/issues .