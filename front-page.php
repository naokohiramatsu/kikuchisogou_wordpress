<?php get_header(); ?>

<main class="top">
  <!-- ファーストビュー-->
  <div class="fv">
    <div class="p-fv">
      <div class="fv-img">
        <picture>
          <!-- SP webp -->
          <source
            type="image/webp"
            srcset="<?php echo get_template_directory_uri(); ?>/images/top/FV/fv_sp@2x.webp 2x"
            media="(max-width: 767px)" />

          <!-- PC webp -->
          <source
            type="image/webp"
            srcset="<?php echo get_template_directory_uri(); ?>/images/top/FV/fv_pc@2x.webp 2x"
            media="(min-width: 768px)" />

          <!-- fallback -->
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/top/FV/fv_pc.jpg"
            alt="ファーストビューイメージ"
            loading="eager" />
        </picture>


        <div class="fv__slogan">
          <p class="slogan--blue">
            確かな技術で、<span class="sp-br"></span>地域の暮らしを支える
          </p>

          <p class="slogan--bk">設備工事のプロ集団</p>
        </div>
      </div>
    </div>
  </div>

  <!--about当社について-->
  <section class="section l-container" id="about">
    <div class="p-about l-content">
      <h2 class="section__ttl">
        <span class="section_ttl--en">About</span>
        <span class="section_ttl--jp">当社について</span>
      </h2>

      <!--説明文ＰＣ-->
      <div class="about__description__wrapper pc_only">
        <p class="about__description--txt pc_only">
          有限会社菊地総合設備は、給排水・空調など<br />建物の“見えない安心”を支えるインフラ工事の専門会社です。<br /><br />住宅や施設、工場など、さまざまな現場で<br />「安全に」「長く」「快適に」使える設備を提供することで、<br />地域社会の暮らしを守り続けてきました。<br /><br />これからも変わらぬ誠実さと技術力で、<br />一件一件の工事に真摯に向き合い、<br />信頼されるパートナーとして選ばれる存在を目指してまいります。
        </p>
      </div>
      <!--説明文ＳＰ-->
      <div class="about__description__wrapper sp_only">
        <p class="about__description--txt sp_only">
          有限会社菊地総合設備は<br />給排水・空調・ボイラーなど<br />建物の“見えない安心”を支える<br />インフラ工事の専門会社です。
        </p>
        <br />

        <p class="about__description--txt sp_only">
          住宅や施設、工場など、さまざまな現場で<br />「安全に」「長く」「快適に」使える設備を<br />提供することで、<br />地域社会の暮らしを守り続けてきました。
        </p>
        <br />

        <p class="about__description--txt sp_only">
          これからも変わらぬ誠実さと技術力で、<br />一件一件の工事に真摯に向き合い、<br />信頼されるパートナーとして<br />選ばれる存在を目指してまいります。
        </p>
      </div>
    </div>
  </section>

  <!--services事業内容-->
  <section class="section" id="services">
    <div class="p-services">
      <h2 class="section__ttl">
        <span class="section_ttl--en">Services</span>
        <span class="section_ttl--jp">当社が提供する主なサービス</span>
      </h2>

      <div class="p-services__img">
        <!--事例その1-->
        <div class="service-item">

          <img src="<?php echo get_template_directory_uri(); ?>/images/top/services/service01.png" alt="施工事例1">

          <p class="service-number">Service 01</p>
          <p class="service-text">給湯ボイラー工事</p>
        </div>
        <!--事例その2-->
        <div class="service-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/services/service02.png" alt="施工事例2">
          <p class="service-number">Service 02</p>
          <p class="service-text">暖房ボイラー工事</p>
        </div>
        <!--事例その3-->
        <div class="service-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/services/service03.png" alt="施工事例3">
          <p class="service-number">Service 03</p>
          <p class="service-text">冷暖房設備工事</p>
        </div>
        <!--事例その4-->
        <div class="service-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/services/service04.png" alt="施工事例4">

          <p class="service-number">Service 04</p>
          <p class="service-text">空調設備工事</p>
        </div>
        <!--事例その5-->
        <div class="service-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/services/service05.png" alt="施工事例5">

          <p class="service-number">Service 05</p>
          <p class="service-text">給水給湯設備工事</p>
        </div>
        <!--事例その6-->
        <div class="service-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/services/service06.png" alt="施工事例6">

          <p class="service-number">Service 06</p>
          <p class="service-text">ダクト工事</p>
        </div>
      </div>
      <!--p-services__img-->

      <div class="wp-block-buttons services-btn">
        <div class="wp-block-button">
          <a class="wp-block-button__link"
            href="<?php echo esc_url(home_url('/services/')); ?>">
            事業内容を見る
          </a>
        </div>
      </div>
    </div>
  </section>

  <!--works施工事例-->
  <section class="section l-container l-content" id="works">
    <div class="works_wrapper">
      <div class="works_wrapper--text">
        <h2 class="section__ttl">
          <span class="section_ttl--en">Works</span>
          <span class="section_ttl--jp">信頼の実績</span>
        </h2>
        <p class="section_text">
          多種多様な現場で積み重ねてきた実績が、<br />
          私たちの<span class="works-accentcolor">信頼の証</span>です
        </p>
        <div class="wp-block-buttons works-btn">
          <div class="wp-block-button">
            <a class="wp-block-button__link" href="">施工実績を見る</a>
          </div>
        </div>
      </div>

      <div class="works_wrapper-media">
        <picture>
          <!-- SP webp -->
          <source
            type="image/webp"
            srcset="<?php echo get_template_directory_uri(); ?>/images/top/works/works01-sp.webp 2x"
            media="(max-width: 767px)" />

          <!-- PC webp -->
          <source
            type="image/webp"
            srcset="<?php echo get_template_directory_uri(); ?>/images/top/works/works01-pc.webp 2x"
            media="(min-width: 768px)" />

          <img
            src="<?php echo get_template_directory_uri(); ?>/images/top/works/works01-pc.png"
            alt="施工実績のご案内"
            loading="lazy" />
        </picture>

      </div>
    </div>
  </section>

  <!--company会社案内-->
  <section class="section" id="company">
    <div class="p-company">
      <div class="company-innner-wrapper">
        <div class="company_textArea">
          <h4 class="company_ttl">
            設備工事を通じて、<br />地域の暮らしと未来を支える
          </h4>

          <!-- PC用 -->
          <div class="company_desc-wrapper">
            <p class="company_desc pc_only">
              地域に根ざし、お客様に信頼される仕事をすること。<br />
              それが、創業以来変わらぬ当社の姿勢です。
            </p>
            <p class="company_desc pc_only company_desc--second">
              設備は見えにくいからこそ、真面目に、確実に。<br />
              暮らしの安心を裏側から支えてまいります。
            </p>

            <!-- SP用 -->
            <p class="company_desc sp_only">
              地域に根ざし、<br />
              お客様に信頼される仕事をすること。<br />
              それが、創業以来変わらぬ当社の姿勢です。
            </p>

            <p class="company_desc sp_only company_desc--second">
              設備は見えにくいからこそ、<br />
              真面目に、確実に。<br />
              暮らしの安心を裏側から支えてまいります。
            </p>

            <!-- ボタン -->
            <div class="wp-block-buttons company-btn">
              <div class="wp-block-button">
                <a class="wp-block-button__link" href="">会社案内</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--recruit採用情報-->
  <section class="section l-content" id="recruit">
    <div class="p-recruit">
      <!-- 画像 -->
      <div class="p-recruit__img">


        <img src="<?php echo get_template_directory_uri(); ?>/images/top/recruit/recruit.webp" alt="採用情報のご案内">


      </div>

      <!-- テキスト -->
      <div class="p-recruit__desc__wrapper">
        <!-- タイトル -->
        <p class="recruit-media-text__title">
          <span class="blue">共に働く仲間</span>を
          <span class="br_sp"><br /></span>
          <span class="orange">募集</span>しています
        </p>

        <!-- PC用 -->
        <div class="recruit-text pc_only">
          <p class="recruit-media-text__text">
            私たちは、人の暮らしを支える「見えない仕事」に<br />
            誇りを持っています。<br />
            未経験でも一から学べる環境、資格取得も支援。
          </p>
          <p class="recruit-media-text__text--second">
            地域インフラを一緒に守っていく仲間を募集しています。
          </p>
        </div>

        <!-- SP用 -->
        <div class="recruit-text sp_only">
          <p class="recruit-media-text__text">
            私たちは、人の暮らしを支える<br />
            「見えない仕事」に誇りを持っています。<br />
            未経験でも一から学べる環境、<br />
            資格取得も支援。
          </p>
          <p class="recruit-media-text__text--second">
            地域インフラを一緒に守っていく仲間を募集しています。
          </p>
        </div>

        <!-- ボタン-->
        <div class="wp-block-buttons recruit-btn">
          <div class="wp-block-button">
            <a class="wp-block-button__link" href="">採用情報</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>