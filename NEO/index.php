<!DOCTYPE html>
<html>
<?php require "header.php";?>
<body>
    <?php require "navbar.php";?>
    <h1>Project Neo</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/060723-F-7234P-163.jpg" alt="Chania">
            </div>

            <div class="item">
                <img src="img/US_Navy_090119.jpg" alt="Chania">
            </div>

            <div class="item">
                <img src="img/maxresdefault.jpg" alt="Flower">
            </div>

            <div class="item">
                <img src="img/US_Navy.jpg" alt="Flower">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php require "footer.php";?>
</body>
</html>

