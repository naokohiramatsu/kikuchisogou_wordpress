<?php get_header(); ?>






<main class="services_detail l-container">

  <!--事業内容の詳細ー-->
  <section class="section_detail" id="services_detail">

    <div class="p-services_detail l-content">
      <h1 class="detail-section__ttl">
        <span class="detail-section_ttl--en">Business</span>
        <span class="detail-section_ttl--jp">事業内容</span>
      </h1>
      <p class="p-serviices_desc">
        当社は、住宅・施設の快適な環境づくりを支える設備工事全般を取り扱っております。
        お客様のニーズに合わせた最適なプランと、安全かつ高品質な施工で、<br>
        地域に密着した確かなサービスをご提供します。</p>


      <h2 class="services_detail_maintitle">対応工事一覧</h2>

      <div class="p-services_detail__items">


        <!--事例その1ー-->
        <div class="service_detail-item">
          <div class="service_detail--img"><img src="<?php echo get_template_directory_uri(); ?>/images/page/services/service01.webp" alt="対応工事その1" /></div>

          <div class="service_detail_textcontent">
            <h3 class="service_detail_content--ttl">給湯ボイラー工事</h3>
            <p class="service_detail_content--subttl">快適な暮らしを支える、確かな給湯システムをご提供</p>
            <p class="service_detail_content-txt">集合住宅や施設における給湯ボイラーの設置・交換・メンテナンスに
              対応。
              省エネ性や耐久性を重視した機器選定で、<br>
              長く安心してご使用いただける環境を構築します。</p>

          </div>
        </div>
        <!--事例その2ー-->
        <div class="service_detail-item">
          <div class="service_detail--img"><img src="<?php echo get_template_directory_uri(); ?>/images/page/services/service02.webp" alt="対応工事その2" /></div>

          <div class="service_detail_textcontent">
            <h3 class="service_detail_content--ttl">暖房ボイラー工事</h3>
            <p class="service_detail_content--subttl">寒冷地にも対応した、効率的な暖房設備のご提案</p>
            <p class="service_detail_content-txt">地域の気候や建物構造に応じた暖房ボイラーをご提案。
              設計から施工、アフターサポートまで一貫対応し、<br>
              冬の快適な室内環境を実現します。</p>

          </div>
        </div>
        <!--事例その3ー-->
        <div class="service_detail-item">
          <div class="service_detail--img"><img src="<?php echo get_template_directory_uri(); ?>/images/page/services/service03.webp" alt="対応工事その3" /></div>

          <div class="service_detail_textcontent">
            <h3 class="service_detail_content--ttl">冷暖房設備工事</h3>
            <p class="service_detail_content--subttl">四季を問わず快適に。空調のプロによる温熱環境設計</p>
            <p class="service_detail_content-txt">集合住宅から大型施設まで対応可能。床暖房やファンコイルユニットなどの冷暖房設備を、設計段階から最適化し、<br>
              省エネルギーかつ快適な空間を実現します。</p>

          </div>
        </div>

        <!--事例その4ー-->
        <div class="service_detail-item">
          <div class="service_detail--img"><img src="<?php echo get_template_directory_uri(); ?>/images/page/services/service04.webp" alt="対応工事その4" /></div>

          <div class="service_detail_textcontent">
            <h3 class="service_detail_content--ttl">空調設備工事</h3>
            <p class="service_detail_content--subttl">空気を整え、建物全体の快適性を向上</p>
            <p class="service_detail_content-txt">ビル・商業施設・工場などの空調設備工事に対応。
              換気・除湿・加湿などの要素も含めたトータル設計で、<br>
              省エネと快適性の両立を実現します。</p>

          </div>
        </div>
        <!--事例その5ー-->
        <div class="service_detail-item">
          <div class="service_detail--img"><img src="<?php echo get_template_directory_uri(); ?>/images/page/services/service05.webp" alt="対応工事その5" /></div>

          <div class="service_detail_textcontent">
            <h3 class="service_detail_content--ttl">給水給湯設備工事</h3>
            <p class="service_detail_content--subttl">ライフラインとしての水回り設備を、安全・確実に構築</p>
            <p class="service_detail_content-txt">新築・改修問わず、建物の給水・給湯配管の設計・施工を行います。
              衛生面や施工の信頼性に配慮し、漏水リスクを最小限に抑えた施工を
              提供します。</p>

          </div>
        </div>
        <!--事例その6ー-->
        <div class="service_detail-item">
          <div class="service_detail--img"><img src="<?php echo get_template_directory_uri(); ?>/images/page/services/service06.webp" alt="対応工事その6" /></div>

          <div class="service_detail_textcontent">
            <h3 class="service_detail_content--ttl">ダクト工事</h3>
            <p class="service_detail_content--subttl">空気を整え、建物全体の快適性を向上</p>
            <p class="service_detail_content-txt">ビル・商業施設・工場などの空調設備工事に対応。
              換気・除湿・加湿などの要素も含めたトータル設計で、<br>
              省エネと快適性の両立を実現します。</p>

          </div>
        </div>


      </div>
    </div>

  </section>

  <!--パンくずリストー-->

  <nav class="breadcrumb l-content " aria-label="パンくずリスト">
    <ol class="breadcrumb__list ">
      <li class="breadcrumb__item">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="images/common/home-icon.svg" alt="" class="breadcrumb__icon">
          <span class="sr-only">ホーム</span>
        </a>
      </li>

      <li class="breadcrumb__item">
        <a href="./page-services.html">事業内容</a>
      </li>
    </ol>
  </nav>


</main>
<?php get_footer(); ?>