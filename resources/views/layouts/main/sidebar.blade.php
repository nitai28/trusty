<aside class="price-wizard">
    <h3> אשף המחיר</h3>
    <img class="border-headline" src="images/main/aside/borderbot.png" alt="">
    <p class="first-aside-p">לקבלת הצעת מחיר מותאמת אישית אנא הזן את הפרטים הבאים </p>
    <img class="border-headline" src="images/main/aside/pborder.png" alt="border">
    <form method="POST" action="/">
        {{ csrf_field() }}
        <div class="selectdiv">
            <img src="images/main/aside/Shape 9 copy 13.png" alt="">
            <select name="insurance_type" id="">
                <option value="">בחר את סוג הביטוח</option>
                <option value="type1">type1</option>
                <option value="type2">type2</option>
                <option value="type3">type3</option>
            </select>
        </div>
        <div class="selectdiv">
            <img src="images/main/aside/Layer 1213 copy 7.png" alt="">
            <select name="" id="">
                <option value="">תאריך תחילת הביטוח</option>
            </select>
        </div>
        <div class="selectdiv">
            <img src="images/main/aside/Layer 1198 copy 2.png" alt="">
            <select name="car_type" id="">
                <option value="">בחר את סוג הרכב</option>
                <option value="type1">type1</option>
                <option value="type2">type2</option>
                <option value="type3">type3</option>
            </select>
        </div>
        <div class="selectdiv">
            <img src="images/main/aside/Layer 1198 copy 2.png" alt="">
            <select name="" id="">
                <option value="">מי ינהג ברכב?</option>
            </select>
        </div>
        <div class="selectdiv">
            <img src="images/main/aside/Shape 9 copy 13.png" alt="">

            <select name="" id="">
                <option value="">מטרת השימוש ברכב</option>
            </select>
        </div>
        <div class="selectdiv">
            <img src="images/main/aside/Shape 9 copy 13.png" alt="">
            <select name="" id="">
                <option value="">היכן אתה גר?</option>
            </select>
        </div>
        <img class="quest-border first-border" src="images/main/aside/pborder.png" alt="border">

        <div class="question-content">
            <p>
                האם היה לך ביטוח מקיף או רכב ליסינג ב-3 שנים האחרונות?
            </p>
            <input class="radio1" value= 1 type="radio" name="q1" id="">
            <input class="radio2" value= 0 type="radio" name="q1" id="">
        </div>
        <img class="quest-border" src="images/main/aside/pborder.png" alt="border">

        <div class="question-content">
            <p>
                האם היו לך תביעות רכוש ו/או גוף ב-3 שנים האחרונות?
            </p>
            <input class="radio1" type="radio" name="q2" id="">
            <input class="radio2" type="radio" name="q2" id="">
        </div>
        <img class="quest-border" src="images/main/aside/pborder.png" alt="border">

        <div class="question-content">
            <p>
                האם לבן הזוג יש רכב נוסף?
            </p>
            <input class="radio1" type="radio" name="q3" id="">
            <input class="radio2" type="radio" name="q3" id="">
        </div>
        <img class="quest-border" src="images/main/aside/pborder.png" alt="border">

        <div class="question-content">
            <p>
                האם יש לך עבר פלילי?
            </p>
            <input class="radio1" type="radio" name="q4" id="">
            <input class="radio2" type="radio" name="q4" id="">
        </div>
        <img class="quest-border" src="images/main/aside/pborder.png" alt="border">

        <div class="question-content">
            <p>
                האם שללו לך את הרישיון בעבר?
            </p>
            <input class="radio1" type="radio" name="q5" id="">
            <input class="radio2" type="radio" name="q5" id="">
        </div>
        <img class="quest-border last-border" src="images/main/aside/pborder.png" alt="border">
        <div class="from-submit">
            <button type="submit">קבל הצעות</button>
        </div>

    </form>

    <div class="banner-pic">
        <img src="images/main/aside/BANNER.png" alt="">
    </div>
</aside>