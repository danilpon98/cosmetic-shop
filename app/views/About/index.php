<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="<?=PATH;?>">Главная</a></li>
                <li class="active">О компании</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--prdt-starts-->
<div class="sec-about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-7 col-lg-6">
                <div class="about-content">
                    <h2>'Юлиана - это то, что вам нужно!</h2>
                    <p>Компания "Юлиана" основанна в 2012 году, чтобы открыть вам абсолютно новый мир, полный чувственности и положительных эмоций.</p>
                    <p>Мы являемся крупнейшим розничным продавцом косметики с более чем 260 магазинами по всей стране, продавая все основные дизайнерские бренды косметики по очень доступным ценам. Наша миссия - доставить каждой женщине кусочек красоты, чтобы сделать ее счастливой и подчеркнуть ее красоту и индивидуальность.</p>
                    <img src="images/signature.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec-team sec-def">
    <div class="container">
        <div class="sec-title">
            <h2>Задайте нам вопрос. Мы с удовольствием ответим.</h2>
        </div>
        <div class="sec-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form role="form" method="post" action="<?=PATH;?>/about/call" class="form-call-action">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Ваше имя" value="<?= isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : '' ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" value="<?= isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : '' ?>" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="text" rows="3" placeholder="Ваш вопрос" value="<?= isset($_SESSION['form_data']['text']) ? $_SESSION['form_data']['text'] : '' ?>" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Отправить</button>
                    </form>
                    <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?> 
                </div>
            </div>
        </div>
        
    </div>
</div>

<!-- <div class="sec-team sec-def">
    <div class="container">
        <div class="sec-title">
            <h2>Наша команда</h2>
        </div>
        <div class="sec-content">
            <div class="team-slider">
                <div class="slide">
                    <div class="team-card">
                        <div class="team-card__wrap">
                            <div class="team-card__img"><img src="images/team-1.jpg" alt=""></div>
                            <div class="team-card_content">
                                <h3 class="team-card__title">Павлова Ирина</h3>
                                <p class="team-card__desc">Генеральный директор</p>
                            </div>
                        </div>
                    </div>     
                </div>
                <div class="slide">
                    <div class="team-card">
                        <div class="team-card__wrap">
                            <div class="team-card__img"><img src="images/team-2.jpg" alt=""></div>
                            <div class="team-card_content">
                                <h3 class="team-card__title">Николаева Оксана</h3>
                                <p class="team-card__desc">Менеджер магазина</p>
                            </div>
                        </div>
                    </div>     
                </div>
                <div class="slide">
                    <div class="team-card">
                        <div class="team-card__wrap">
                            <div class="team-card__img"><img src="images/team-3.jpg" alt=""></div>
                            <div class="team-card_content">
                                <h3 class="team-card__title">Смирнова Виолетта</h3>
                                <p class="team-card__desc">Менеджер по качеству</p>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
               
        </div>
        
    </div>
</div> -->