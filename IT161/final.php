<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivian's Portfolio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css" integrity="sha512-aMup4I6BUl0dG4IBb0/f32270a5XP7H1xplAJ80uVKP6ejYCgZWcBudljdsointfHxn5o302Jbnq1FXsBaMuoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <div class="header__inner inner">
            <h1 class="header__logo">
                
                <a href="index.html" style="color: #fff; text-decoration: none;">Home</a>
                
            </h1>
            <ul class="header__nav">
                <li><a href="#profile">Profile</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#price">Price</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>

    <!-- ドロワー -->
    <div class="drawer-icon">
        <div class="drawer-icon__bars">
            <div class="drawer-icon__bar1"></div>
            <div class="drawer-icon__bar2"></div>
            <div class="drawer-icon__bar3"></div>
        </div>
    </div>
    <div class="drawer-content">
        <div class="drawer-content__items">
            <div class="drawer-content__item"><a href="#profile">Profile</a></div>
            <div class="drawer-content__item"><a href="#works">Works</a></div>
            <div class="drawer-content__item"><a href="#price">Price</a></div>
            <div class="drawer-content__item"><a href="#contact">Contact</a></div>
        </div>
    </div>
    <div class="drawer-background"></div>

    <div class="main-visual" style="background-image:url('images/main.jpg'); background-size: cover;">
        <div class="main-visual__content">
            <div class="main-visual__title">Vivian's Portfolio</div>
            <div class="main-visual__lead">lead lead lead</div>
            <div class="main-visual__button">
                <a href="#contact">Contact</a>
            </div>
        </div>
    </div>

    <section class="profile section" id="profile">
        <div class="profile-inner inner">
            <div class="section-title">Profile</div>
            <div class="profile-content">
                <div class="profile-image">
                    <img src="images/profile.jpg" alt="">
                </div>
                <div class="profile-text">
                    <h3>Vivian Tu</h3>
                    <p>texttexttexttexttexttexttexttexttexttexttext</p>
                    <p>texttexttexttexttexttexttexttexttexttexttext</p>
                </div>
            </div>
        </div>
    </section>
    <section class="card section" id="works">
        <div class="card__inner inner">
            <div class="card__head section-title">Works</div>
            <div class="card__items">
                <div class="card__item wow fadeInUp">
                    <div class="card__img">
                        <img src="images/works.jpg" alt="">
                    </div>
                    <div class="card__title">
                        Title
                    </div>
                    <div class="card__text">
                        text & img
                    </div>
                </div>
                <div class="card__item wow fadeInUp">
                    <div class="card__img">
                        <img src="images/works.jpg" alt="">
                    </div>
                    <div class="card__title">
                        Title
                    </div>
                    <div class="card__text">
                        text & img
                    </div>
                </div>
                <div class="card__item wow fadeInUp">
                    <div class="card__img">
                        <img src="images/works.jpg" alt="">
                    </div>
                    <div class="card__title">
                        Title
                    </div>
                    <div class="card__text">
                        text & img
                    </div>
                </div>
                <div class="card__item wow fadeInUp">
                    <div class="card__img">
                        <img src="images/works.jpg" alt="">
                    </div>
                    <div class="card__title">
                        Title
                    </div>
                    <div class="card__text">
                        text & img
                    </div>
                </div>
                <div class="card__item wow fadeInUp">
                    <div class="card__img">
                        <img src="images/works.jpg" alt="">
                    </div>
                    <div class="card__title">
                        Title
                    </div>
                    <div class="card__text">
                        text & img
                    </div>
                </div>
                <div class="card__item wow fadeInUp">
                    <div class="card__img">
                        <img src="images/works.jpg" alt="">
                    </div>
                    <div class="card__title">
                        Title
                    </div>
                    <div class="card__text">
                        text & img
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="price section" id="price">
        <div class="price__inner inner">
            <div class="price__title section-title">
                Price
            </div>
            <div class="price__content">
                <div class="price__image">
                    <img src="images/price.jpg" alt="">
                </div>
                <div class="price__table">
                    <table class="table">
                        <!-- trが横列 thが見出し tdが白-->
                        <tr>
                            <th></th>
                            <th>price1</th>
                            <th>price2</th>
                        </tr>
                        <tr>
                            <th>plan1</th>
                            <td>$100</td>
                            <td>$100</td>
                        </tr>
                        <tr>
                            <th>plan2</th>
                            <td>$100</td>
                            <td>$100</td>
                        </tr>
                        <tr>
                            <th>plan3</th>
                            <td>
                                <strong>$100</strong>
                                <span>※attention</span>
                            </td>
                            <td>$100</td>
                        </tr>
                        <tr>
                            <th>plan4</th>
                            <td>$100</td>
                            <td>$100</td>
                        </tr>
                    </table>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="contact section" id="contact">
        <div class="contact__inner inner">
            <div class="contact__head section-title">
                Contact
            </div>
            <div class="contact__form">
                <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "kyoka.miyamura@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Vivian"; //place your client's name here
        $website = "Vivian's portfolio";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
            </div>
        </div>
    </section>

    
    <footer class="footer">
        <div class="footer__inner inner">
            <div class="footer__content">

                <div class="footer__center">
                    <ul class="footer__nav">
                        <li><a href="#profile">Profile</a></li>
                        <li><a href="#works">Works</a></li>
                        <li><a href="#price">Price</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__copy">
                <p><small>&copy; 2021 by
                        <a href="index.php">Kyoka Miyamura</a>, All Rights Reserved ~
                        <a id="html-checker" href="#">Check HTML</a> ~
                        <a id="css-checker" href="#">Check CSS</a></small>
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js" integrity="sha512-BABFxitBmYt44N6n1NIJkGOsNaVaCs/GpaJwDktrfkWIBFnMD6p5l9m+Kc/4SLJSJ4mYf+cstX98NYrsG/M9ag==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <!-- これは最後に書く -->
</body>

</html>