codesniffer
===========

PHP Code Sniffer tool is a tool that tokenises and "sniffs" PHP, JavaScript and CSS files to detect violations of a defined coding standard. It is an essential development tool that ensures your code remains clean and consistent. It can also help prevent some common semantic errors made by developers.

Requirements
============

1. PEAR package
2. PHP_CodeSniffer requires PHP version 5.1.2 or greater.

Installation
============

1. Install PHP using XAMPP or MAMP etc
2. Install PEAR package using "php go-pear.phar" from terminal or command prompt (for more help check http://pear.php.net/manual/en/installation.getting.php on how to install).
3. Install PHP_CodeSniffer using "pear install PHP_CodeSniffer" from terminal or command prompt (for more help check http://pear.php.net/package/PHP_CodeSniffer/ on how to install).
4. Get the kohana standards on Github git clone http://github.com/elazar/phpcs-kohana.git and copy the standards into the Codesniffer standards folder (for more help check    http://forum.kohanaframework.org/discussion/5735/kohana-coding-standards-with-codesniffer/p1)
5. Download the codesniffer tool source code from git (https://github.com/sourcebits-chethankswamy/codesniffer) and place it in your htdocs.

How to use
==========

1. Open the website in your browser (ex: http://localhost/codesniffer).
2. Select the file (php,js or css) which you want to check.
3. Select the standard (Kohana or PHPCS etc) and click on submit
4. The output will be the list of standards you need to change in you page. You can also download the complete report and the summary report by clicking on the download link.

