<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cody Alton</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">Cody Alton</h1>
            <h2 class="brand-tagline">A Personal Website</h2><br>
            <a href="#education">Education</a><br>
            <a href="#experience">Experience</a><br><br><br>
            <a href="http://github.com/codyalton" target="_blank">Github</a>

        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <div class="posts">
                <h1 class="content-subhead" id="education">Education</h1>

                <?php
                echo file_get_contents("education.html");
                ?>



                <h1 class="content-subhead" id="experience">Experience</h1>

                <?php
                echo file_get_contents("jobs.html");
                ?>




            </div>

            <!--            <div class="footer">-->
            <!--                <div class="pure-menu pure-menu-horizontal">-->
            <!--                    <ul>-->
            <!--                        <li class="pure-menu-item"><a href="http://github.com/codyalton" class="pure-menu-link">GitHub</a></li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
</div>

</body>
</html>