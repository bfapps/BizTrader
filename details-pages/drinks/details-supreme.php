<!DOCTYPE html>
<html lang="fa" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/32f77a75ad.js" attr crossorigin="anonymous"></script>
    <link href="../../assets/fontAwsome/css/all.css" rel="stylesheet">
    <link href="../../assets/w3css/w3.css" rel="stylesheet">
    <link href="../../assets/stylecss/main-sidebar1.1.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/stylecss/selling-cart-table.css">
    <link rel="stylesheet" href="../../assets/stylecss/p-details.css">
    <title>Biz Trader V 1.0</title>
    <style media="screen">
    @font-face {
      font-family: sans-persian;
      src: url(../../assets/textFonts/iranSansRrg.ttf);
    }
      * {box-sizing: border-box; font-size: medium;}
      body {
        font-family: sans-persian;
        padding: 0;
      }
    </style>
  </head>
  <body style="background-color:#ffffff;">
    <input style="display: none" class="menu" id="menu" type="checkbox" name="menu">
    <label for="menu" id="menu-label" class="icon">
      <span class="fa-stack">
        <i class="fas fa-circle fa-stack-2x" style="vertical-align: middle"></i>
        <i style="color: rebeccapurple" class="fa fa-bars fa-stack-1x fa-inverse"></i>
      </span>
    </label>
    <div id="social-media" class="social-media">
      <a href="#" id="instagram" class="fa-stack"><i class="fas fa-circle fa-stack-2x" style="vertical-align: middle"></i> <i id="inside-icon-in" class="fa fa-instagram fa-stack-1x fa-inverse"></i></a>
      <a href="#" id="telegram" class="fa-stack"><i class="fas fa-circle fa-stack-2x" style="vertical-align: middle"></i> <i id="inside-icon-te" class="fa fa-send fa-stack-1x fa-inverse"></i></a>
      <a href="#" id="twitter" class="fa-stack"><i class="fas fa-circle fa-stack-2x" style="vertical-align: middle"></i> <i id="inside-icon-tw" class="fa fa-twitter fa-stack-1x fa-inverse"></i></a>
    </div>
    <nav>
      <div>BFApps</div>
      <div class="nav-items">
        <a href="#">بیشتر</a>
        <a href="#">خوراکی ها</a>
        <a href="#">میوه ها</a>
        <a href="drinks-list.html">نوشیدنی ها</a>
      </div>
      <div>
        <div class="nav-right">
          <a href="#" id="instagram" class="fa-stack"><i class="fas fa-circle fa-stack-2x" style="vertical-align: middle"></i> <i id="inside-icon-in" class="fa fa-instagram fa-stack-1x fa-inverse"></i></a>
          <a href="#" id="telegram" class="fa-stack"><i class="fas fa-circle fa-stack-2x" style="vertical-align: middle"></i> <i id="inside-icon-te" class="fa fa-send fa-stack-1x fa-inverse"></i></a>
          <a href="#" id="twitter" class="fa-stack"><i class="fas fa-circle fa-stack-2x" style="vertical-align: middle"></i> <i id="inside-icon-tw" class="fa fa-twitter fa-stack-1x fa-inverse"></i></a>
        </div>
        <div class="nav-search">
          <span style="color: white;"><span class="fa-stack"><i class="fas fa-circle fa-stack-2x" style="vertical-align: middle"></i><i id="inside-icon-search-1" class="fa fa-search fa-stack-1x fa-inverse"></i></span> <input type="search" id="search-1" name="search-1" placeholder="Search"></span>
        </div>
      </div>
    </nav>
    <aside class="aside" dir="rtl">
      <a href="../../index.html"><span class="fa-stack"><i class="fas fa-circle fa-stack-2x" style="vertical-align: middle"></i><i id="inside-icon-side-1" class="fa fa-home fa-stack-1x fa-inverse"></i></span><span class="aside-list">صفحه نخست</span></a>
      <span style="color: #ffffff; margin: 1rem 0;"><span class="fa-stack"><i class="fas fa-circle fa-stack-2x" style="vertical-align: middle"></i><i id="inside-icon-side-2" class="fa fa-search fa-stack-1x fa-inverse"></i></span> <input type="search" id="search" name="search" placeholder="جست و جو"></span>
      <a href="#"><span class="fa-stack"><i class="fas fa-circle fa-stack-2x" style="vertical-align: middle"></i><i id="inside-icon-side-4" class="fa fa-hamburger fa-stack-1x fa-inverse"></i></span><span class="aside-list">خوراکی ها</span></a>
      <a href="drinks-list.html"><span class="fa-stack"><i class="fas fa-circle fa-stack-2x" style="vertical-align: middle"></i><i id="inside-icon-side-5" class="fa fa-coffee fa-stack-1x fa-inverse"></i></span><span class="aside-list">نوشیدنی ها</span></a>
      <a href="#"><span class="fa-stack"><i class="fas fa-circle fa-stack-2x" style="vertical-align: middle"></i><i id="inside-icon-side-3" class="fa fa-address-card fa-stack-1x fa-inverse"></i></span><span class="aside-list">ارتباط با ما</span></a>
    </aside>

    <main>
      <form dir="rtl" class="p-details-form" action="../../factor/form.php" method="post">
        <div class="row">
          <div class="col-image">
            <img src="../../assets/img/biz-coffee/suprime.jpg" alt="Supreme">
          </div>
          <div class="col-details">
            <div class="col-text">
              <p>خانه / نوشیدنی ها</p>
              <h1>کافه سوپریم</h1>
              <h6>قیمت : 340000 تومان</h6>
              <h5>کافه سوپریم با قارچ گانودرما ۲۰ عددی</h5>
            </div>
            <div class="many">
              <label for="many-input">تعداد</label>
              <input type="tel" name="manyInput" id="many-input" oninput="changePrice()" value="1"> <br>
              <div class="btns">
                <div class="btn-plus-minus">
                  <button type="button" name="button" onclick="add()">افزودن</button>
                  <button type="button" name="button" onclick="minus()">کاهش</button>
                </div>
                <button type="submit" name="button" class="submit-product">ثبت خرید</button>
              </div>
            </div>
          </div>
        </div>
        <div class="hidden" style="display: none">
          <input type="number" name="" id="base-price" value="340000">
          <input type="number" id="p-price" name="p-price" value="340000">
          <input type="text" name="p-code" value="dc20">
          <textarea name="p-name"> کافه سوپریم </textarea>
        </div>
      </form>
      <div class="col-details-text" dir="rtl">
        <h2>توضیحات</h2>
          <p>
            قهوه سوپریم یک قهوه سبک و ملایم برای صبح زود یا سروحال شدن در اواسط روز فوق العاده است.

کافه سوپریم یک قهوه کامل برای انرژی زایی در هر زمانی از روز است. این قهوه ملایم و طعم دار فواید کامل قهوه را داشته و خیلی راحت و سریع آماده می شود.

بعلاوه، کافه سوپریم حاوی جینسینگ است که در همه جای دنیا بخاطر طعم و فواید آن مورد استفاده قرار می‌گیرد.

گانودرما لوسیدوم دیگر ماده موجود در این قهوه هست. قارچ گانودرما از معدود منابعی در طبیعت است که غلظت بالایی از آنتی اکسیدان ها و عوامل ضد التهابی را داراست. ترکیب عصاره این قارچ به همراه باکیفیت ترین قهوه جهان، یکی از بهترین و موثرترین راه های مصرف این قارچ است‌.

<br>
قهوه به علت داشتن کافئین و مزه و عطر آن يكي از محبوب ترین نوشیدنی ها در دنیا ست.
کافئین که به طور طبیعی در بیش از ۶۰ نوع گیاه از جمله دانه قهوه ، گوارانا ، چاي ، کاکائو و..... یافت می‌شود و همین کافئین است که سبب ایجاد طعم تلخی می‌گردد.

مصرف همزمان کافئین و قند می‌تواند براي حافظه مفید باشد، درواقع مغز این افراد به انرژي کمتري براي یاد آوري امور نیاز دارد. بین مصرف کافئین و بیماري پارکینسون رابطه عکس وجود دارد به عبارت دیگر مصرف کافئین از احتمال بروز بیماري پارکینسون جلوگیري می‌کند . مصرف کافئین اختلالات شناختی در رابطه با افزایش سن و نیز بروز بیماري آلزایمر را کاهش می‌دهد . کافئین با ایجاد تعادل در عملکرد مغز ، از نقایص حرکتی و نیز زوال عقل پیشگیري می‌کند. کافئین احساس خوب بودن، شادي، انرژي، هشیاري و اجتماعی بودن را در فرد تقویت می‌کند.

بسیاری از مطالعات اپیدمیولوژیکی که بر روی انسان ها صورت گرفته است نشان می‌دهند که مصرف منظم و دوز مناسب کافئین، خطر ابتلا به بیماری آلزایمر را به ویژه در سالمندان کاهش می‌دهد. کافئین به عنوان یک ترکیب آنتی اکسیدان، می‌تواند نقش حفاظتی در برابر استرس اکسیداتیو در بیماری آلزایمر ایفا کند.

<br>
گانودرما لوسیدوم که به آن قارچ رِیشی قرمز هم می‌گویند، طعم آن طعم قهوه را عمیق تر کرده و فواید آن برای سلامت تقویت می‌شود. قارچ گانودرما حاوی تری ترپنوئیدها و پلی ساکاریدهاست. این ترکیبات آداپتوژن یا سازش زا هستند.
قدمت قارچ گانودرما به هزاران سال قبل و چین باستان باز می‌گردد. این محصول به سختی یافت و تولید می‌شود. کارشناسان کشاورزی و صنایع غذایی سالهاست که بر روی این ماده تحقیق میکنند و خواص بیشماری در مورد آن یافته اند. این قارچ به دلیل وجود فراوان عناصر فعال و آنتی اکسیدان‌ها بسیار مفید می‌باشد.گانودرما لوسیدوم هزاران سال در فرهنگ سنتی آسیای مورد استفاده قرار گرفته و معنی نام آن به زبان چینی قدرت معنوی است، اما ژاپنی ها به آن رِیشی به معنی پادشاه گیاهان می‌گویند.


          </p>
      </div>
    </main>
<script type="text/javascript">
  function add() {
    document.querySelector('#many-input').value++;
    changePrice();
  }
  function minus() {
    let x = document.querySelector('#many-input').value;
    if (x > 0) {
        document.querySelector('#many-input').value--;
        changePrice();
    }
  }
  function changePrice() {
    let x = document.querySelector('#many-input').value;
    let basePrice = document.querySelector('#base-price').value;
    document.querySelector('#p-price').value= x * basePrice;
  }
</script>
    </body>
    </html>
