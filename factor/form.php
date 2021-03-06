<!DOCTYPE html>
<html lang="fa" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم خرید</title>
    <style media="screen">
      * {box-sizing: border-box;}
      body {
        margin: 0; padding: 0.5rem;
        height: 100vh;
        font-family: 'Times New Roman', Times, serif;
        font-size: small;
      }
      nav {
        background-color: #333333;
        padding: 1rem;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: medium;
      }
      form {
        padding: 0.5rem;
        background-color: #f6f6f6;
        color: black;
        width: 100%;
        direction: rtl;
      }
      .fieldset {
        width: 100%;
        display: grid;
        grid-template-columns: 15% 85%;
        grid-auto-rows: auto;
        margin-bottom: 1rem;
        row-gap: 0.5rem;
      }
      label {
        display: flex;
        align-items: center;
        height: 2rem;
      }
      input {
        height: 100%;
        background-color: #eff;
        border: #f6f6f6 solid 1px;
      }
      textarea {
        height: 4rem;
      }
      select {
        height: 75%;
        width : 10%;
      }
      .blue {
        background: #f6f6f6;
        display: flex;
        align-items: center;
      }
      .submit-data {
        margin-top: 1rem;
        width: 100%;
        background-color: tomato;
        padding: 0.5rem;
        color: white;
      }
      .submit-data:hover {
        background: orangered;
      }
      @media only screen and (max-width:700px) {
        select {
          width: 30%;
        }
      }
      @media only screen and (max-width : 414px) {
        .fieldset {
          grid-template-columns: 1fr;
        }
        select {
          height: 2rem;
          width: 40%;
        }
        input {
          height: 3rem;
        }
        .empty {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <nav>
      ثبت مشخصات خرید
    </nav>
    <form class="" action="factor.php" method="post">
      <h1>اطلاعات فردی</h1>
      <h3> * لطفا شماره منزل را همراه با کد تماس استان و شهرستان محل سکونت خود وارد کنید.</h3>
      <?php echo $_POST['p-name'] ?>
      <div class="fieldset">
        <label for="fname">نام : </label>
        <input type="text" name="fname" id="fname" placeholder="محمد" required value="">
        <label for="lname">نام خانوادگی :</label>
        <input type="text" name="lname" id="lname" placeholder="محمدی" required value="">
        <label for="mn">شماره تلفن همراه :</label>
        <input type="tel" minlength="11" maxlength="11" placeholder="*******0915" id="mn" name="mn" required value="">
        <label for="tn">شماره تلفن منزل :</label>
        <input type="tel" minlength="10" maxlength="10" placeholder="****0514522" id="tn" name="tn" value="">
        <label for="state">استان :</label>
        <div class="blue">
          <select class="state" id="state" name="state">
            <option value="kh-r">خراسان رضوی</option>
            <option value="kh-sh">خراسان شمالی</option>
          </select>
        </div>
        <label for="city">شهرستان :</label>
        <div class="blue">
          <select class="city" id="city" name="city">
            <option value="jovein">جوین</option>
            <option value="sabzevar">سبزوار</option>
            <option value="mashhad">مشهد</option>
          </select>
        </div>
        <label for="address">آدرس دقیق :</label>
        <textarea name="address" required placeholder="همراه با درج پلاک"></textarea>
      </div>
      <h1>اطلاعات کالا</h1>
      <div class="fieldset">
        <label for="pc">کد کالا :</label>
        <input type="text" id="pc" maxlength="4" minlength="4" placeholder="" name="pc" required value=<?php echo $_POST['p-code'] ?>>
        <label for="prange">تعداد سفارش :</label>
        <div><input type="range" id="prange" name="prange" min="1" max="50" step="1" dir="ltr" value=<?php echo $_POST['manyInput'] ?>>
          <output id="prangen" name="prangen"><?php echo $_POST['manyInput'] ?></output>
        </div>
        <div class="empty"></div>
        <div class="empty"></div>
        <label for="price">قیمت تمام شده به تومان :</label>
        <input type="text" id="price" name="price" value=<?php echo $_POST['p-price'] ?>>
        <label for="pname">نام محصول :</label>
        <!-- <input type="text" name="pname" id="pname" value=> -->
        <textarea name="pname" style="height: 2rem;background: #eff;"><?php echo $_POST['p-name'] ?></textarea>
      </div>
        <input type="submit" name="submit" class="submit-data" value="ثبت اطلاعات">

        <div class="hidden" style="display: none">
          <p id="dc20" title="Hot Chocolate">500</p>
          <p id="dc25" title="Tea">1000</p>
          <p id="dc30" title="Coffee">1500</p>
          <p id="dc35" title="Latte">2000</p>
          <input type="text" id="state-name" name="statename" value="خراسان رضوی">
          <input type="text" id="city-name" name="cityname" value="جوین">
        </div>
    </form>

    <script type="text/javascript">
      document.getElementById('prange').addEventListener('input', function(){
        document.getElementById('prangen').innerHTML = document.getElementById('prange').value;
        let pc = document.getElementById('pc').value;
        let totalPrice = document.getElementById('prangen').innerHTML * document.getElementById(pc).innerHTML;
        document.getElementById('price').value = totalPrice;
      })

      document.getElementById('pc').addEventListener('change', function() {
        /*document.getElementById('prange').value = 1;
        document.getElementById('prangen').innerHTML = "1";
        let pc = document.getElementById('pc').value;
        document.getElementById('price').value = document.getElementById(pc).innerHTML;
        document.getElementById('pname').value = document.getElementById(pc).title;*/
        alert("کد کالا را تغییر ندهید و در صورت تغییر به حالت قبل بازگردانید");
      })

      document.getElementById('state').addEventListener('change', function(){
        let state = document.getElementById('state').value.toString();
        let x = document.getElementById('state').selectedIndex;
        document.getElementById('state-name').value = document.getElementById("state").options[x].text;
       if (state === "kh-sh") {
          document.getElementById('city').innerHTML = '<option value="x1">اسفراین</option><option value="x2">بجنورد</option><option value="x3">جاجرم</option>';
          document.getElementById('city-name').value = "اسفراین";
        }
       if (state === "kh-r") {
          document.getElementById('city').innerHTML = '<option value="c1">جوین</option><option value="c1">سبزوار</option><option value="c1">مشهد</option><option value="c1">تربت حیدریه</option>';
          document.getElementById('city-name').value = "جوین";
        }
      })
      document.getElementById('city').addEventListener('change', function() {
        let x = document.getElementById('city').selectedIndex;
        document.getElementById('city-name').value = document.getElementById("city").options[x].text;
      })
    </script>
  </body>
</html>
