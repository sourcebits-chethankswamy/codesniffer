<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- viewport meta to reset iPhone inital scale -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP Code Sniffer check tool</title>
        <link rel="shortcut icon" href="assets/images/favicon.png" />
        
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        
        <link href="assets/css/reset.css" type="text/css" rel="stylesheet" />
        <link href="assets/css/main.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div id="pagewrap">
            <div id="header">
                <h1>
                    <span class="sb-logo"></span>
                    PHP Code Sniffer tool
                </h1>
                <p><a href="http://pear.php.net/package/PHP_CodeSniffer/" target="_blank">PHP_CodeSniffer</a> is a PHP5 script that tokenises and "sniffs" PHP, JavaScript and CSS files to detect violations of a defined coding standard. It is an essential development tool that ensures your code remains clean and consistent. It can also help prevent some common semantic errors made by developers.</p>
            </div>

            <div id="content">
                <div class="form-blk">
                    <form id="checkform" method="post" enctype="multipart/form-data" action="checkcode.php">
                        <ol class="circle-list">
                            <li>
                                <h2>Choose file:</h2>
                                <div class="file-btn">
                                    Browse<input type="file" name="file" id="file">
                                </div>
                            </li>
                            <li>
                                <h2>Choose standard:</h2>
                                <label class="style-select-label">
                                    <select name="code_std" class="style-select">
                                        <option value="Kohana">Kohana</option>
                                        <option value="MySource">MySource</option>
                                        <option value="PEAR">PEAR</option>
                                        <option value="PHPCS">PHPCS</option>
                                        <option value="PSR1">PSR1</option>
                                        <option value="PSR2">PSR2</option>
                                        <option value="Squiz">Squiz</option>
                                        <option value="Zend">Zend</option>
                                    </select>
                                </label>    
                            </li>
                            <li>
                                <h2>Check:</h2>
                                <button type="submit" class="file-btn submit">Submit</button>
                            </li>
                        </ol>
                    </form>
                </div>    
                <div id="output-blk">
                    <h5></h5>
                    <div class="output"></div>
                </div>
                <div class="loading">
                    <div class="bar">
                        <i class="sphere"></i>
                    </div>              
                </div>
            </div>

            <div id="footer">
                <p class="left">Check out <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/messdetector" target="_blank">PHP Mess Detector Tool</a></p>
                <p class="right">No Copyrights &copy;  <span class="smile">;)</span></p>
            </div>

            <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery.form.min.js"></script>
            <script type="text/javascript" src="assets/js/main.js"></script>
        </div>
    </body>
</html>
