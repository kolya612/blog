<?php
    $bundle=\frontend\assets\AppAsset::register($this);
?>


<section class="main-banner leadership">
    <div class="content__container container">
        <div class="main-banner__content">
            <h1 class="title-badge">Leadership</h1>
            <h2 class="subtitle"><strong>Positioned to</strong> surpass industry expectations.</h2>
        </div>
    </div>
</section>

<section class="about-leader">
    <div class="container">
        <div class="about-leader__content-wrapper">
            <div class="leader-content">
                <h2 class="title">Meet our visionary founder</h2>
                <p class="text">
                    Our founder, Jas Mathur, built the foundation of LimitlessX on his own personal struggle with
                    health
                    issues. On his journey to get healthy, he discovered ingredients to help people get their health
                    back and maintain it. His leadership builds empires because consumers trust his authentic
                    guidance.
                </p>
            </div>
            <div class="leader-photo">
                <div class="photo-wrapper">
                    <div class="photo"></div>
                </div>
                <h3 class="title">Jas Mathur</h3>
                <p class="text">Founder & CEO</p>
            </div>
        </div>
    </div>
</section>

<?=$this->render('../elements/follow-us')?>
