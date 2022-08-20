<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivian's Portfolio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css" integrity="sha512-aMup4I6BUl0dG4IBb0/f32270a5XP7H1xplAJ80uVKP6ejYCgZWcBudljdsointfHxn5o302Jbnq1FXsBaMuoQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/animate.css ">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <div class="header__inner inner">
            <h1 class="header__logo">
                
                <a href="index.php">Kyoka Miyamura</a>
                
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
            <div class="drawer-content__item"><a href="#card">Card</a></div>
            <div class="drawer-content__item"><a href="#news">News</a></div>
            <div class="drawer-content__item"><a href="#price">Price</a></div>
            <div class="drawer-content__item"><a href="#access">Access</a></div>
            <div class="drawer-content__item"><a href="#contact">Contact</a></div>
        </div>
    </div>
    <div class="drawer-background"></div>

    <div class="main-visual">
        <div class="main-visual__content">
            <div class="main-visual__title">Vivian's Portfolio</div>
            <div class="main-visual__lead">lead lead lead</div>
            <div class="main-visual__button">
                <a href="#contact">Contact</a>
            </div>
        </div>
    </div>

    <section class="profile section" id="profile">
        <div class="inner">
            <div class="section-title">Profile</div>
        </div>
    </section>
    <section class="card section" id="works">
        <div class="card__inner inner">
            <div class="card__head section-title">Works</div>
            <div class="card__items">
                <div class="card__item wow fadeInUp">
                    <div class="card__img">
                        <img src="./img/card-img.png" alt="">
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
                        <img src="./img/card-img.png" alt="">
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
                        <img src="./img/card-img.png" alt="">
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
                        <img src="./img/card-img.png" alt="">
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
                        <img src="./img/card-img.png" alt="">
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
                        <img src="./img/card-img.png" alt="">
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
                    img
                </div>
                <div class="price__table">
                    <table class="table">
                        <!-- trが横列 thが見出し tdが白-->
                        <tr>
                            <th></th>
                            <th>column1</th>
                            <th>column2</th>
                        </tr>
                        <tr>
                            <th>row1</th>
                            <td>$</td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <th>row2</th>
                            <td>$</td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <th>row3</th>
                            <td>
                                <strong>$</strong>
                                <span>※</span>
                            </td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <th>row4</th>
                            <td>$</td>
                            <td>$</td>
                        </tr>
                    </table>
                    <div class="price__attention">
                        ※Know more
                        <a href="">Contact</a>
                    </div>
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
                <form action="" class="contact-form">
                    <dl class="contact-form__dl">
                        <div class="contact-form__row">
                            <dt class="contact-form__label"><label for="your-name" class="required">Name</label></dt>
                            <dd class="contact-form__input"><input id="your-name" type="text" placeholder="John Styles"></dd>
                        </div>
                        <div class="contact-form__row">
                            <dt class="contact-form__label"><label for="your-email" class="required">Email</label>
                            </dt>
                            <dd class="contact-form__input"><input id="your-email" type="email" placeholder="text@example.com"></dd>
                        </div>
                        <div class="contact-form__row">
                            <dt class="contact-form__label"><label for="your-message">Content</label></dt>
                            <dd class="contact-form__input">
                                <textarea name="" id="your-message" placeholder=""></textarea>
                            </dd>
                            <!-- inputのときはidつけてlabelと同じにする -->
                        </div>

                    </dl>
                    <div class="contact-form__button">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="modal-contact target-modal">
        <div class="modal-contact__head">プライバシーポリシー</div>
        <div class="modal-contact__content">
            <div class="modal-contact__sub-head">ほにゃらら</div>
            <div class="modal-contact__text">
                ほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃらら。
            </div>
            <div class="modal-contact__sub-head">ほにゃらら</div>
            <div class="modal-contact__text">
                ほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃらら。
            </div>
            <div class="modal-contact__sub-head">ほにゃらら</div>
            <div class="modal-contact__text">
                ほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃらら。
            </div>
            <div class="modal-contact__sub-head">ほにゃらら</div>
            <div class="modal-contact__text">
                ほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃらら。
            </div>
            <div class="modal-contact__sub-head">ほにゃらら</div>
            <div class="modal-contact__text">
                ほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃらら。
            </div>
            <div class="modal-contact__sub-head">ほにゃらら</div>
            <div class="modal-contact__text">
                ほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃららほにゃらら。
            </div>
        </div>
        <div class="modal-contact__button"><a href="" class="js-close-button" data-target=".target-modal">閉じる</a></div>
        <div class="modal-contact__icon"><a class="js-close-button" href="" data-target=".target-modal"><img src="img/btn-batsu@2x.png" alt=""></a></div>
    </div>
    <div class="modal-contact-background target-modal"></div>

    <footer class="footer">
        <div class="footer__inner inner">
            <div class="footer__content">

                <div class="footer__center">
                    <ul class="footer__nav">
                        <li><a href="">Card</a></li>
                        <li><a href="">News</a></li>
                        <li><a href="">Price</a></li>
                        <li><a href="">Access</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
                <div class="footer__right">
                    <ul class="footer__sns">
                        <li><a href="" target="_blank"><img src="./img/twitter@2x.png" alt=""></a></li>
                        <li><a href="" target="_blank"><img src="./img/facebook@2x.png" alt=""></a></li>
                        <li><a href="" target="_blank"><img src="./img/instagram@2x.png" alt=""></a></li>
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
    <div class="to-top"><a href="#"><img src="./img/totop@2x.png" alt=""></a></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js" integrity="sha512-BABFxitBmYt44N6n1NIJkGOsNaVaCs/GpaJwDktrfkWIBFnMD6p5l9m+Kc/4SLJSJ4mYf+cstX98NYrsG/M9ag==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/wow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <!-- これは最後に書く -->
</body>

</html>