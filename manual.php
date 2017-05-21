<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/jquery.metro.notification.css">
    <link rel="stylesheet" href="css/manual.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.metro.notification.js"></script>
    <script type="text/javascript" src="js/manual.js"></script>
    <title>Learn - Metro Notification</title>
</head>

<body>
    <h1 class="header">Metro Notification <br>Created By Pouya Nevisan CO</h1>
    <h6>Copyright 2017 &copy;</h6>
    <div class="man">
        <h1 class="fun-title">Instalation</h1>
        <code class="man-code">
            <span class="row-num">1 |</span><span class="line"><span class="sim"><</span><span class="tag">link</span> <span class="attr">rel</span><span class="sim">=</span><span class="str">"stylesheet"</span> <span class="attr">href</span><span class="sim">=</span><span class="str">"jquery.metro.notification.css"</span><span class="sim">>&lt;/</span><span class="tag">link</span><span class="sim">></span></span>
            <span class="row-num">2 |</span><span class="line"><span class="sim"><</span><span class="tag">script</span> <span class="attr">type</span><span class="sim">=</span><span class="str">"text/javascript"</span> <span class="attr">src</span><span class="sim">=</span><span class="str">"jquery.min.js"</span><span class="sim">>&lt;/</span><span class="tag">script</span><span class="sim">></span></span>
            <span class="row-num">3 |</span><span class="line"><span class="sim"><</span><span class="tag">script</span> <span class="attr">type</span><span class="sim">=</span><span class="str">"text/javascript"</span> <span class="attr">src</span><span class="sim">=</span><span class="str">"jquery.metro.notification.js"</span><span class="sim">>&lt;/</span><span class="tag">script</span><span class="sim">></span></span>
        </code>
    </div>
    <div class="man">
        <h1 class="fun-title">PlaySound</h1>
        <code class="man-code">
            <span class="row-num">1 |</span><span class="line"><span class="sim">$.</span><span class="fun">PlaySound</span><span class="sim">(</span><span class="var">name </span><span class="cmd">string</span><span class="sim">, </span><span class="var">volume </span><span class="cmd">number</span><span class="sim">);</span></span><br>
        </code>
        <div class="man-table">
            <table>
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Propery Name</th>
                        <th>PossibleValues</th>
                        <th>Default Value</th>
                        <th>Example</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>name</td>
                        <td>sound address</td>
                        <td>null</td>
                        <td>alert-sound.mp3</td>
                        <td>لینک فایل mp3 برای پخش در این قسمت نوشته می شود.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>volume</td>
                        <td>number between 1 and 100</td>
                        <td>100</td>
                        <td>30</td>
                        <td>حجم صدا جهت پخش تنظیم می شود.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="man-example">
            <input class="example-buttons playsound" type="button" id="id1" value="play sound width low volume" title="$('.man-example .example-buttons.playsound#id1').click(function(){&#13;&Tab;$.PlaySound('big-notify-in', 30);&#13;});">
            <input class="example-buttons playsound" type="button" id="id2" value="play sound width high volume" title="$('.man-example .example-buttons.playsound#id2').click(function(){&#13;&Tab;$.PlaySound('big-notify-in', 100);&#13;});">
        </div>
    </div>
    <div class="man">
        <h1 class="fun-title">SmallNotification</h1>
        <code class="man-code">
            <span class="row-num">1 |</span><span class="line"><span class="sim">$.</span><span class="fun">SmallNotification</span><span class="sim">({</span></span><br>
            <span class="row-num">2 |</span><span class="line tab1"><span class="var">title: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">3 |</span><span class="line tab1"><span class="var">text: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">4 |</span><span class="line tab1"><span class="var">picture: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">5 |</span><span class="line tab1"><span class="var">icon: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">6 |</span><span class="line tab1"><span class="var">backcolor: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">7 |</span><span class="line tab1"><span class="var">color: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">8 |</span><span class="line tab1"><span class="var">speed: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">9 |</span><span class="line tab1"><span class="var">timeout: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">10 |</span><span class="line tab1"><span class="var">sound: </span><span class="num">bool</span><span class="sim">,</span></span><br>
            <span class="row-num">11 |</span><span class="line tab1"><span class="var">onshow: </span><span class="fun">function</span><span class="sim">()</span><span class="sim">,</span></span><br>
            <span class="row-num">12 |</span><span class="line tab1"><span class="var">onhide: </span><span class="fun">function</span><span class="sim">()</span><span class="sim">,</span></span><br>
            <span class="row-num">13 |</span><span class="line tab1"><span class="var">onclick: </span><span class="fun">function</span><span class="sim">()</span></span><br>
            <span class="row-num">14 |</span><span class="line"><span class="sim">});</span></span>
        </code>
        <div class="man-table">
            <table>
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Propery Name</th>
                        <th>PossibleValues</th>
                        <th>Default Value</th>
                        <th>Example</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>title</td>
                        <td>string</td>
                        <td>null</td>
                        <td>سلام</td>
                        <td>عنوان اعلان با این فیلد تنظیم می شود.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>text</td>
                        <td>string</td>
                        <td>null</td>
                        <td>به وب سایت من خوش اومدین</td>
                        <td>متن پیام با این فیلد تنظیم می شود.</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>picture</td>
                        <td>image</td>
                        <td>null</td>
                        <td>img.jpg</td>
                        <td>آدرس تصویر پیام با این فیلد تنظیم می شود.</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>icon</td>
                        <td>image</td>
                        <td>null</td>
                        <td>favicon.jpg</td>
                        <td>آیکون کوجک پیام با این فیلد تنظیم می شود.</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>backcolor</td>
                        <td>hex color</td>
                        <td>random</td>
                        <td>#28bebd, random</td>
                        <td>رنگ پس زمینه پیام با این فیلد تنظیم می شود.</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>color</td>
                        <td>hex color</td>
                        <td>white</td>
                        <td>#45ff11</td>
                        <td>رنگ نوشته پیام با این فیلد تنظیم می شود.</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>speed</td>
                        <td>milisecond bigger than 1</td>
                        <td>200</td>
                        <td>500</td>
                        <td>سرعت نمایش پیام با این فیلد تنظیم می شود.</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>timeout</td>
                        <td>milisecond bigger than 1</td>
                        <td>null</td>
                        <td>8000</td>
                        <td>زمان بسته شدن پیام با این فیلد تنظیم می شود.</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>sound</td>
                        <td>true or false</td>
                        <td>false</td>
                        <td>true</td>
                        <td>پخش یا عدم پخش صدا هنگام نمایش پیام با این فیلد تنظیم می شود.</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>onshow</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('نمایش'); }</td>
                        <td>تابعی که هنگام نمایش پیام اجرا خواهد شد با این فیلد تنظیم می شود.</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>onclick</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('کلیک'); }</td>
                        <td>تابعی که هنگام کلیک روی پیام اجرا خواهد شد با این فیلد تنظیم می شود.</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>onhide</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('بست'); }</td>
                        <td>تابعی که هنگام بستن پیام اجرا خواهد شد با این فیلد تنظیم می شود.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="man-example">
            <input class="example-buttons smallnotification" type="button" id="id1" value="small notification" title="$.SmallNotification({&#13;&Tab;title: 'سلام',&#13;&Tab;text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',&#13;&Tab;speed: 200,&#13;&Tab;timeout: 0,&#13;});">
            <input class="example-buttons smallnotification" type="button" id="id2" value="small notification width picture" title="$.SmallNotification({&#13;&Tab;title: 'سلام',&#13;&Tab;text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',&#13;&Tab;picture: '../image/picture.jpg',&#13;&Tab;speed: 200,&#13;&Tab;timeout: 0,&#13;});">
            <input class="example-buttons smallnotification" type="button" id="id3" value="small notification width icon" title="$.SmallNotification({&#13;&Tab;title: 'سلام',&#13;&Tab;text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',&#13;&Tab;icon: '../image/logo.png',&#13;&Tab;speed: 200,&#13;&Tab;timeout: 0,&#13;});">
            <input class="example-buttons smallnotification" type="button" id="id4" value="small notification width blue back color" title="$.SmallNotification({&#13;&Tab;title: 'سلام',&#13;&Tab;text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',&#13;&Tab;backcolor: '#07dbff',&#13;&Tab;speed: 200,&#13;&Tab;timeout: 0,&#13;});">
            <input class="example-buttons smallnotification" type="button" id="id5" value="small notification width red color" title="$.SmallNotification({&#13;&Tab;title: 'سلام',&#13;&Tab;text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',&#13;&Tab;color: '#ff0858',&#13;&Tab;speed: 200,&#13;&Tab;timeout: 0,&#13;});">
            <input class="example-buttons smallnotification" type="button" id="id6" value="small notification width low speed" title="$.SmallNotification({&#13;&Tab;title: 'سلام',&#13;&Tab;text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',&#13;&Tab;speed: 2000,&#13;&Tab;timeout: 0,&#13;});">
            <input class="example-buttons smallnotification" type="button" id="id7" value="small notification width 2s timeout" title="$.SmallNotification({&#13;&Tab;title: 'سلام',&#13;&Tab;text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',&#13;&Tab;speed: 200,&#13;&Tab;timeout: 2000,&#13;});">
            <input class="example-buttons smallnotification" type="button" id="id8" value="small notification width sound" title="$.SmallNotification({&#13;&Tab;title: 'سلام',&#13;&Tab;text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',&#13;&Tab;speed: 200,&#13;&Tab;timeout: 0,&#13;&Tab;sound: true&#13;});">
            <input class="example-buttons smallnotification" type="button" id="id9" value="small notification width callback" title="$.SmallNotification({&#13;&Tab;title: 'سلام',&#13;&Tab;text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',&#13;&Tab;speed: 200,&#13;&Tab;timeout: 1000,&#13;&Tab;onshow: function(){ alert('notification is showing'); },&#13;&Tab;onclick: function(){ alert('notification clicked'); },&#13;&Tab;onhide: function(){ alert('notification hide'); },&#13;});">
        </div>
    </div>
    <div class="man">
        <h1 class="fun-title">BigNotification</h1>
        <code class="man-code">
            <span class="row-num">1 |</span><span class="line"><span class="sim">$.</span><span class="fun">BigNotification</span><span class="sim">({</span></span><br>
            <span class="row-num">2 |</span><span class="line tab1"><span class="var">title: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">3 |</span><span class="line tab1"><span class="var">content: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">4 |</span><span class="line tab1"><span class="var">linkurl: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">5 |</span><span class="line tab1"><span class="var">linkcaption: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">6 |</span><span class="line tab1"><span class="var">icon: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">7 |</span><span class="line tab1"><span class="var">backcolor: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">8 |</span><span class="line tab1"><span class="var">color: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">9 |</span><span class="line tab1"><span class="var">speed: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">10 |</span><span class="line tab1"><span class="var">timeout: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">11 |</span><span class="line tab1"><span class="var">sound: </span><span class="num">bool</span><span class="sim">,</span></span><br>
            <span class="row-num">12 |</span><span class="line tab1"><span class="var">onshow: </span><span class="fun">function</span><span class="sim">()</span><span class="sim">,</span></span><br>
            <span class="row-num">13 |</span><span class="line tab1"><span class="var">onhide: </span><span class="fun">function</span><span class="sim">()</span></span><br>
            <span class="row-num">14 |</span><span class="line"><span class="sim">});</span></span>
        </code>
        <div class="man-table">
            <table>
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Propery Name</th>
                        <th>PossibleValues</th>
                        <th>Default Value</th>
                        <th>Example</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>title</td>
                        <td>string</td>
                        <td>null</td>
                        <td>سلام</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>content</td>
                        <td>string</td>
                        <td>null</td>
                        <td>به وب سایت ما خوش آمدید. برای استفاده از مطالب سایت به صورت کامل آدرس ایمیل خود را در کادر بالا وارد کنید.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>icon</td>
                        <td>image</td>
                        <td>null</td>
                        <td>favicon.jpg</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>linkurl</td>
                        <td>url</td>
                        <td>null</td>
                        <td>img.jpg</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>linkcaption</td>
                        <td>string</td>
                        <td>بیشتر</td>
                        <td>کانال تلگرام</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>backcolor</td>
                        <td>hex color</td>
                        <td>random</td>
                        <td>#28bebd, random</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>color</td>
                        <td>hex color</td>
                        <td>white</td>
                        <td>#45ff11</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>speed</td>
                        <td>milisecond bigger than 1</td>
                        <td>200</td>
                        <td>500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>timeout</td>
                        <td>milisecond bigger than 1</td>
                        <td>null</td>
                        <td>8000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>sound</td>
                        <td>true or false</td>
                        <td>false</td>
                        <td>true</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>onshow</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('نمایش'); }</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>onhide</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('بست'); }</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="man-example">
            <input class="example-buttons bignotification" type="button" id="id1" value="big notification">
            <input class="example-buttons bignotification" type="button" id="id2" value="big notification width icon">
            <input class="example-buttons bignotification" type="button" id="id3" value="big notification width gray back color">
            <input class="example-buttons bignotification" type="button" id="id4" value="big notification width black color">
            <input class="example-buttons bignotification" type="button" id="id5" value="big notification width low speed">
            <input class="example-buttons bignotification" type="button" id="id6" value="big notification width 5s timeout">
            <input class="example-buttons bignotification" type="button" id="id7" value="big notification width sound">
            <input class="example-buttons bignotification" type="button" id="id8" value="big notification width callback">
            <input class="example-buttons bignotification" type="button" id="id9" value="big notification width url">
        </div>
    </div>
    <div class="man">
        <h1 class="fun-title">ConfirmationBox</h1>
        <code class="man-code">
            <span class="row-num">1 |</span><span class="line"><span class="sim">$.</span><span class="fun">ConfirmationBox</span><span class="sim">({</span></span><br>
            <span class="row-num">2 |</span><span class="line tab1"><span class="var">title: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">3 |</span><span class="line tab1"><span class="var">content: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">4 |</span><span class="line tab1"><span class="var">backcolor: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">5 |</span><span class="line tab1"><span class="var">color: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">6 |</span><span class="line tab1"><span class="var">speed: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">7 |</span><span class="line tab1"><span class="var">opacity: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">8 |</span><span class="line tab1"><span class="var">btnnames: </span><span class="var">array</span><span class="sim">,</span></span><br>
            <span class="row-num">9 |</span><span class="line tab1"><span class="var">btntags: </span><span class="var">array</span><span class="sim">,</span></span><br>
            <span class="row-num">10 |</span><span class="line tab1"><span class="var">sound: </span><span class="num">bool</span><span class="sim">,</span></span><br>
            <span class="row-num">11 |</span><span class="line tab1"><span class="var">onshow: </span><span class="fun">function</span><span class="sim">()</span><span class="sim">,</span></span><br>
            <span class="row-num">12 |</span><span class="line tab1"><span class="var">onhide: </span><span class="fun">function</span><span class="sim">()</span><span class="sim">,</span></span><br>
            <span class="row-num">13 |</span><span class="line tab1"><span class="var">complete: </span><span class="fun">function</span><span class="sim">(</span><span class="var">data</span><span class="sim">)</span></span><br>
            <span class="row-num">14 |</span><span class="line"><span class="sim">});</span></span>
        </code>
        <div class="man-table">
            <table>
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Propery Name</th>
                        <th>PossibleValues</th>
                        <th>Default Value</th>
                        <th>Example</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>title</td>
                        <td>string</td>
                        <td>null</td>
                        <td>اخطار</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>content</td>
                        <td>string</td>
                        <td>null</td>
                        <td>برای نمایش محتوی نیاز به ورود به اکانت است.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>backcolor</td>
                        <td>hex color</td>
                        <td>random</td>
                        <td>#28bebd, random</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>color</td>
                        <td>hex color</td>
                        <td>white</td>
                        <td>#45ff11</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>opacity</td>
                        <td>number between 1 and 100</td>
                        <td>30</td>
                        <td>100</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>btnnames</td>
                        <td>array of string</td>
                        <td>['تایید']</td>
                        <td>['بله', 'خیر']</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>btntags</td>
                        <td>array of string</td>
                        <td>['ok']</td>
                        <td>['yes', 'no']</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>speed</td>
                        <td>milisecond bigger than 1</td>
                        <td>200</td>
                        <td>500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>force</td>
                        <td>true or false</td>
                        <td>false</td>
                        <td>true</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>sound</td>
                        <td>true or false</td>
                        <td>false</td>
                        <td>true</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>onshow</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('نمایش'); }</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>onhide</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('بست'); }</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>complete</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(data){ alert(data); }</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="man-example">
            <input class="example-buttons confirmationbox" type="button" id="id1" value="confirmation box">
            <input class="example-buttons confirmationbox" type="button" id="id2" value="confirmation box with browen backcolor">
            <input class="example-buttons confirmationbox" type="button" id="id3" value="confirmation box with red color">
            <input class="example-buttons confirmationbox" type="button" id="id4" value="confirmation box with high opacity">
            <input class="example-buttons confirmationbox" type="button" id="id5" value="confirmation box with 3 button">
            <input class="example-buttons confirmationbox" type="button" id="id6" value="confirmation box with low speed">
            <input class="example-buttons confirmationbox" type="button" id="id7" value="confirmation box with force select">
            <input class="example-buttons confirmationbox" type="button" id="id8" value="confirmation box with sound">
            <input class="example-buttons confirmationbox" type="button" id="id9" value="confirmation box with callback function">
        </div>
    </div>
    <div class="man">
        <h1 class="fun-title">InputBox</h1>
        <code class="man-code">
            <span class="row-num">1 |</span><span class="line"><span class="sim">$.</span><span class="fun">InputBox</span><span class="sim">({</span></span><br>
            <span class="row-num">2 |</span><span class="line tab1"><span class="var">title: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">3 |</span><span class="line tab1"><span class="var">content: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">4 |</span><span class="line tab1"><span class="var">backcolor: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">5 |</span><span class="line tab1"><span class="var">color: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">6 |</span><span class="line tab1"><span class="var">speed: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">7 |</span><span class="line tab1"><span class="var">opacity: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">8 |</span><span class="line tab1"><span class="var">txtnames: </span><span class="var">array</span><span class="sim">,</span></span><br>
            <span class="row-num">9 |</span><span class="line tab1"><span class="var">txttags: </span><span class="var">array</span><span class="sim">,</span></span><br>
            <span class="row-num">10 |</span><span class="line tab1"><span class="var">password: </span><span class="var">array</span><span class="sim">,</span></span><br>
            <span class="row-num">11 |</span><span class="line tab1"><span class="var">align: </span><span class="var">array</span><span class="sim">,</span></span><br>
            <span class="row-num">12 |</span><span class="line tab1"><span class="var">force: </span><span class="num">bool</span><span class="sim">,</span></span><br>
            <span class="row-num">13 |</span><span class="line tab1"><span class="var">empty: </span><span class="num">bool</span><span class="sim">,</span></span><br>
            <span class="row-num">14 |</span><span class="line tab1"><span class="var">sound: </span><span class="num">bool</span><span class="sim">,</span></span><br>
            <span class="row-num">15 |</span><span class="line tab1"><span class="var">onshow: </span><span class="fun">function</span><span class="sim">()</span><span class="sim">,</span></span><br>
            <span class="row-num">16 |</span><span class="line tab1"><span class="var">onhide: </span><span class="fun">function</span><span class="sim">()</span><span class="sim">,</span></span><br>
            <span class="row-num">17 |</span><span class="line tab1"><span class="var">complete: </span><span class="fun">function</span><span class="sim">(</span><span class="var">data</span><span class="sim">)</span></span><br>
            <span class="row-num">18 |</span><span class="line"><span class="sim">});</span></span>
        </code>
        <div class="man-table">
            <table>
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Propery Name</th>
                        <th>PossibleValues</th>
                        <th>Default Value</th>
                        <th>Example</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>title</td>
                        <td>string</td>
                        <td>null</td>
                        <td>فرم</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>content</td>
                        <td>string</td>
                        <td>null</td>
                        <td>آدرس پست الکترونیکی خود را وارد کنید.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>backcolor</td>
                        <td>hex color</td>
                        <td>random</td>
                        <td>#28bebd, random</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>color</td>
                        <td>hex color</td>
                        <td>white</td>
                        <td>#45ff11</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>opacity</td>
                        <td>number between 1 and 100</td>
                        <td>30</td>
                        <td>100</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>txtnames</td>
                        <td>array of string</td>
                        <td>['']</td>
                        <td>['نام و نام خانوادگی', 'آدرس ایمیل']</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>txttags</td>
                        <td>array of string</td>
                        <td>['default']</td>
                        <td>['name', 'email']</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>password</td>
                        <td>array of bool</td>
                        <td>[false]</td>
                        <td>[false, true]</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>align</td>
                        <td>array of string</td>
                        <td>['rtl']</td>
                        <td>['rtl', 'ltr']</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>speed</td>
                        <td>milisecond bigger than 1</td>
                        <td>200</td>
                        <td>500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>force</td>
                        <td>true or false</td>
                        <td>false</td>
                        <td>true</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>empty</td>
                        <td>true or false</td>
                        <td>true</td>
                        <td>false</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>sound</td>
                        <td>true or false</td>
                        <td>false</td>
                        <td>true</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>onshow</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('نمایش'); }</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>onhide</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('بست'); }</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>complete</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(data){ alert(data); }</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="man-example">
            <input class="example-buttons inputbox" type="button" id="id1" value="input box">
            <input class="example-buttons inputbox" type="button" id="id2" value="input box width green backcolor">
            <input class="example-buttons inputbox" type="button" id="id3" value="input box width black color">
            <input class="example-buttons inputbox" type="button" id="id4" value="input box width high opacity">
            <input class="example-buttons inputbox" type="button" id="id5" value="input box width 3 textbox">
            <input class="example-buttons inputbox" type="button" id="id6" value="input box width passwordbox">
            <input class="example-buttons inputbox" type="button" id="id7" value="input box width diferent align">
            <input class="example-buttons inputbox" type="button" id="id8" value="input box width force">
            <input class="example-buttons inputbox" type="button" id="id9" value="input box width forbiden empty value">
            <input class="example-buttons inputbox" type="button" id="id10" value="input box width low speed">
            <input class="example-buttons inputbox" type="button" id="id11" value="input box width sound">
            <input class="example-buttons inputbox" type="button" id="id12" value="input box width callback function">
            <input class="example-buttons inputbox" type="button" id="id13" value="input box width data return">
        </div>
    </div>
    <div class="man">
        <h1 class="fun-title">UploadBox</h1>
        <code class="man-code">
            <span class="row-num">1 |</span><span class="line"><span class="sim">$.</span><span class="fun">UploadBox</span><span class="sim">({</span></span><br>
            <span class="row-num">2 |</span><span class="line tab1"><span class="var">title: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">3 |</span><span class="line tab1"><span class="var">content: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">4 |</span><span class="line tab1"><span class="var">backcolor: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">5 |</span><span class="line tab1"><span class="var">color: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">6 |</span><span class="line tab1"><span class="var">opacity: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">7 |</span><span class="line tab1"><span class="var">filetypes: </span><span class="var">array</span><span class="sim">,</span></span><br>
            <span class="row-num">8 |</span><span class="line tab1"><span class="var">filegroups: </span><span class="var">array</span><span class="sim">,</span></span><br>
            <span class="row-num">9 |</span><span class="line tab1"><span class="var">multipleselect: </span><span class="num">bool</span><span class="sim">,</span></span><br>
            <span class="row-num">10 |</span><span class="line tab1"><span class="var">maxsize: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">11 |</span><span class="line tab1"><span class="var">action: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">12 |</span><span class="line tab1"><span class="var">uploadpath: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">13 |</span><span class="line tab1"><span class="var">uploadname: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">14 |</span><span class="line tab1"><span class="var">speed: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">15 |</span><span class="line tab1"><span class="var">force: </span><span class="num">bool</span><span class="sim">,</span></span><br>
            <span class="row-num">16 |</span><span class="line tab1"><span class="var">sound: </span><span class="num">bool</span><span class="sim">,</span></span><br>
            <span class="row-num">17 |</span><span class="line tab1"><span class="var">debugmode: </span><span class="num">bool</span><span class="sim">,</span></span><br>
            <span class="row-num">18 |</span><span class="line tab1"><span class="var">onshow: </span><span class="fun">function</span><span class="sim">()</span><span class="sim">,</span></span><br>
            <span class="row-num">19 |</span><span class="line tab1"><span class="var">onhide: </span><span class="fun">function</span><span class="sim">()</span><span class="sim">,</span></span><br>
            <span class="row-num">20 |</span><span class="line tab1"><span class="var">complete: </span><span class="fun">function</span><span class="sim">()</span></span><br>
            <span class="row-num">21 |</span><span class="line"><span class="sim">});</span></span>
        </code>
        <div class="man-table">
            <table>
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Propery Name</th>
                        <th>PossibleValues</th>
                        <th>Default Value</th>
                        <th>Example</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>title</td>
                        <td>string</td>
                        <td>null</td>
                        <td>فرم</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>content</td>
                        <td>string</td>
                        <td>null</td>
                        <td>آدرس پست الکترونیکی خود را وارد کنید.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>backcolor</td>
                        <td>hex color</td>
                        <td>random</td>
                        <td>#28bebd, random</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>color</td>
                        <td>hex color</td>
                        <td>white</td>
                        <td>#45ff11</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>opacity</td>
                        <td>number between 1 and 100</td>
                        <td>30</td>
                        <td>100</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>filetypes</td>
                        <td>array of types</td>
                        <td>null</td>
                        <td>['jpg','png']</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>filegroups</td>
                        <td>array of groups</td>
                        <td>null</td>
                        <td>['image']</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>multipleselect</td>
                        <td>true or false</td>
                        <td>true</td>
                        <td>false</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>maxsize</td>
                        <td>number bigger than 1mb</td>
                        <td>null</td>
                        <td>50</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>action</td>
                        <td>string</td>
                        <td>null</td>
                        <td>../upload/file.php</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>uploadpath</td>
                        <td>string</td>
                        <td>null</td>
                        <td>file/upload/</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>uploadname</td>
                        <td>string</td>
                        <td>null</td>
                        <td>example</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>speed</td>
                        <td>milisecond bigger than 1</td>
                        <td>200</td>
                        <td>500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>force</td>
                        <td>true or false</td>
                        <td>false</td>
                        <td>true</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>sound</td>
                        <td>true or false</td>
                        <td>false</td>
                        <td>true</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>debugmode</td>
                        <td>true or false</td>
                        <td>false</td>
                        <td>true</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>onshow</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('نمایش'); }</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>onhide</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('بست'); }</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>complete</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(data){ alert(data); }</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="man-example">
            <input class="example-buttons uploadbox" type="button" id="id1" value="upload box">
            <input class="example-buttons uploadbox" type="button" id="id2" value="upload box width blue backcolor">
            <input class="example-buttons uploadbox" type="button" id="id3" value="upload box width black color">
            <input class="example-buttons uploadbox" type="button" id="id4" value="upload box width high opacity">
            <input class="example-buttons uploadbox" type="button" id="id5" value="upload box width limited jpg filetypes">
            <input class="example-buttons uploadbox" type="button" id="id6" value="upload box width limited image filegroups">
            <input class="example-buttons uploadbox" type="button" id="id7" value="upload box width single selection">
            <input class="example-buttons uploadbox" type="button" id="id8" value="upload box width limited size">
            <input class="example-buttons uploadbox" type="button" id="id9" value="upload box width low speed">
            <input class="example-buttons uploadbox" type="button" id="id10" value="upload box width force">
            <input class="example-buttons uploadbox" type="button" id="id11" value="upload box width sound">
            <input class="example-buttons uploadbox" type="button" id="id12" value="upload box width debugmode on">
            <input class="example-buttons uploadbox" type="button" id="id13" value="upload box width callback function">
        </div>
    </div>
    <div class="man">
        <h1 class="fun-title">LoaddingBox</h1>
        <code class="man-code">
            <span class="row-num">1 |</span><span class="line"><span class="sim">$.</span><span class="fun">LoaddingBox</span><span class="sim">({</span></span><br>
            <span class="row-num">2 |</span><span class="line tab1"><span class="var">type: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">3 |</span><span class="line tab1"><span class="var">content: </span><span class="var">array</span><span class="sim">,</span></span><br>
            <span class="row-num">4 |</span><span class="line tab1"><span class="var">backcolor: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">5 |</span><span class="line tab1"><span class="var">color: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">6 |</span><span class="line tab1"><span class="var">timeout: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">7 |</span><span class="line tab1"><span class="var">loadder: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">8 |</span><span class="line tab1"><span class="var">percentage: </span><span class="num">bool</span><span class="sim">,</span></span><br>
            <span class="row-num">9 |</span><span class="line tab1"><span class="var">period: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">10 |</span><span class="line tab1"><span class="var">speed: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">11 |</span><span class="line tab1"><span class="var">opacity: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">12 |</span><span class="line tab1"><span class="var">sound: </span><span class="num">bool</span><span class="sim">,</span></span><br>
            <span class="row-num">13 |</span><span class="line tab1"><span class="var">onshow: </span><span class="fun">function</span><span class="sim">()</span><span class="sim">,</span></span><br>
            <span class="row-num">14 |</span><span class="line tab1"><span class="var">onhide: </span><span class="fun">function</span><span class="sim">()</span></span><br>
            <span class="row-num">15 |</span><span class="line"><span class="sim">});</span></span>
        </code>
        <div class="man-table">
            <table>
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Propery Name</th>
                        <th>PossibleValues</th>
                        <th>Default Value</th>
                        <th>Example</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>type</td>
                        <td>simple, story</td>
                        <td>simple</td>
                        <td>story</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>content</td>
                        <td>array of string</td>
                        <td>null</td>
                        <td>['در حال انتقال به سایت', 'از صبوری شما سپاسگذاریم']</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>backcolor</td>
                        <td>hex color</td>
                        <td>random</td>
                        <td>#28bebd, random</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>color</td>
                        <td>hex color</td>
                        <td>white</td>
                        <td>#45ff11</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>opacity</td>
                        <td>number between 1 and 100</td>
                        <td>100</td>
                        <td>90</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>timeout</td>
                        <td>milisecond bigger than 1</td>
                        <td>null</td>
                        <td>10000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>loadder</td>
                        <td>number between 1 and 9</td>
                        <td>4</td>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>percentage</td>
                        <td>true or false</td>
                        <td>false</td>
                        <td>ture</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>period</td>
                        <td>milisecond bigger than 1</td>
                        <td>10000</td>
                        <td>3000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>speed</td>
                        <td>milisecond bigger than 1</td>
                        <td>200</td>
                        <td>500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>sound</td>
                        <td>true or false</td>
                        <td>false</td>
                        <td>true</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>onshow</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('نمایش'); }</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>onhide</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('بست'); }</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="man-example">
            <input class="example-buttons loaddingbox" type="button" id="id1" value="loadding box">
            <input class="example-buttons loaddingbox" type="button" id="id2" value="loadding box width story type">
            <input class="example-buttons loaddingbox" type="button" id="id3" value="loadding box width purple backcolor">
            <input class="example-buttons loaddingbox" type="button" id="id4" value="loadding box width black color">
            <input class="example-buttons loaddingbox" type="button" id="id5" value="loadding box width timeout">
            <input class="example-buttons loaddingbox" type="button" id="id6" value="loadding box width different loadder">
            <input class="example-buttons loaddingbox" type="button" id="id7" value="loadding box width percentage">
            <input class="example-buttons loaddingbox" type="button" id="id8" value="loadding box width small period">
            <input class="example-buttons loaddingbox" type="button" id="id9" value="loadding box width low speed">
            <input class="example-buttons loaddingbox" type="button" id="id10" value="loadding box width low opacity">
            <input class="example-buttons loaddingbox" type="button" id="id11" value="loadding box width sound">
            <input class="example-buttons loaddingbox" type="button" id="id12" value="loadding box width callback">
        </div>
    </div>
    <div class="man">
        <h1 class="fun-title">EndLoadding</h1>
        <code class="man-code">
            <span class="row-num">1 |</span><span class="line"><span class="sim">$.</span><span class="fun">EndLoadding</span><span class="sim">({</span></span><br>
            <span class="row-num">2 |</span><span class="line tab1"><span class="var">speed: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">3 |</span><span class="line tab1"><span class="var">onhide: </span><span class="fun">function</span><span class="sim">()</span></span><br>
            <span class="row-num">4 |</span><span class="line"><span class="sim">});</span></span>
        </code>
        <div class="man-table">
            <table>
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Propery Name</th>
                        <th>PossibleValues</th>
                        <th>Default Value</th>
                        <th>Example</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>speed</td>
                        <td>milisecond bigger than 1</td>
                        <td>200</td>
                        <td>500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>onhide</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('بست'); }</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="man">
        <h1 class="fun-title">TutorialBox</h1>
        <code class="man-code">
            <span class="row-num">1 |</span><span class="line"><span class="sim">$(</span><span class="str">'element'</span><span class="sim">).</span><span class="fun">TutorialBox</span><span class="sim">({</span></span><br>
            <span class="row-num">2 |</span><span class="line tab1"><span class="var">title: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">3 |</span><span class="line tab1"><span class="var">content: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">4 |</span><span class="line tab1"><span class="var">backcolor: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">5 |</span><span class="line tab1"><span class="var">color: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">6 |</span><span class="line tab1"><span class="var">opacity: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">7 |</span><span class="line tab1"><span class="var">speed: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">8 |</span><span class="line tab1"><span class="var">acurancy: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">9 |</span><span class="line tab1"><span class="var">onshow: </span><span class="fun">function</span><span class="sim">()</span><span class="sim">,</span></span><br>
            <span class="row-num">10 |</span><span class="line tab1"><span class="var">onhide: </span><span class="fun">function</span><span class="sim">()</span></span><br>
            <span class="row-num">11 |</span><span class="line"><span class="sim">});</span></span>
        </code>
        <div class="man-table">
            <table>
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Propery Name</th>
                        <th>PossibleValues</th>
                        <th>Default Value</th>
                        <th>Example</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>title</td>
                        <td>string</td>
                        <td>null</td>
                        <td>آموزش</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>content</td>
                        <td>string</td>
                        <td>null</td>
                        <td>'برای انجام کار روی کلید زیر کلیک کنید.'</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>backcolor</td>
                        <td>hex color</td>
                        <td>random</td>
                        <td>#28bebd, random</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>color</td>
                        <td>hex color</td>
                        <td>white</td>
                        <td>#45ff11</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>opacity</td>
                        <td>number between 1 and 100</td>
                        <td>100</td>
                        <td>90</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>speed</td>
                        <td>milisecond bigger than 1</td>
                        <td>1000</td>
                        <td>500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>acurancy</td>
                        <td>number bigger than 0</td>
                        <td>50</td>
                        <td>100</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>onshow</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('نمایش'); }</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>onhide</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('بست'); }</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="man-example">
            <input class="example-buttons tutorialbox" type="button" id="id1" value="Tutorial box">
            <input class="example-buttons tutorialbox" type="button" id="id2" value="Tutorial box width gray backcolor">
            <input class="example-buttons tutorialbox" type="button" id="id3" value="Tutorial box width black color">
            <input class="example-buttons tutorialbox" type="button" id="id4" value="Tutorial box width low opacity">
            <input class="example-buttons tutorialbox" type="button" id="id5" value="Tutorial box width low speed">
            <input class="example-buttons tutorialbox" type="button" id="id6" value="Tutorial box width low acurancy">
            <input class="example-buttons tutorialbox" type="button" id="id7" value="Tutorial box width callback function">
        </div>
    </div>
    <div class="man">
        <h1 class="fun-title">ToolTipBox</h1>
        <code class="man-code">
            <span class="row-num">1 |</span><span class="line"><span class="sim">$(</span><span class="str">'element'</span><span class="sim">).</span><span class="fun">ToolTipBox</span><span class="sim">({</span></span><br>
            <span class="row-num">2 |</span><span class="line tab1"><span class="var">backcolor: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">3 |</span><span class="line tab1"><span class="var">color: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">4 |</span><span class="line tab1"><span class="var">opacity: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">5 |</span><span class="line tab1"><span class="var">speed: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">6 |</span><span class="line tab1"><span class="var">acurancy: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">7 |</span><span class="line tab1"><span class="var">direction: </span><span class="str">'string'</span><span class="sim">,</span></span><br>
            <span class="row-num">8 |</span><span class="line tab1"><span class="var">delay: </span><span class="num">number</span><span class="sim">,</span></span><br>
            <span class="row-num">9 |</span><span class="line tab1"><span class="var">onshow: </span><span class="fun">function</span><span class="sim">()</span><span class="sim">,</span></span><br>
            <span class="row-num">10 |</span><span class="line tab1"><span class="var">onhide: </span><span class="fun">function</span><span class="sim">()</span></span><br>
            <span class="row-num">11 |</span><span class="line"><span class="sim">});</span></span>
        </code>
        <code class="man-code">
            <span class="row-num">1 |</span><span class="line"><span class="sim"><</span><span class="tag">div</span> <span class="attr">tooltip</span><span class="sim">=</span><span class="str">"example 1"</span><span class="sim">>&lt;/</span><span class="tag">div</span><span class="sim">></span></span>
            <span class="row-num">2 |</span><span class="line"><span class="sim"><</span><span class="tag">div</span> <span class="attr">tooltip</span><span class="sim">=</span><span class="str">"example 2"</span><span class="sim">>&lt;/</span><span class="tag">div</span><span class="sim">></span></span>
            <span class="row-num">3 |</span><span class="line"><span class="sim"><</span><span class="tag">div</span> <span class="attr">tooltip</span><span class="sim">=</span><span class="str">"example 3"</span><span class="sim">>&lt;/</span><span class="tag">div</span><span class="sim">></span></span>
        </code>
        <div class="man-table">
            <table>
                <tbody>
                    <tr>
                        <th>#</th>
                        <th>Propery Name</th>
                        <th>PossibleValues</th>
                        <th>Default Value</th>
                        <th>Example</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>backcolor</td>
                        <td>hex color</td>
                        <td>random</td>
                        <td>#28bebd, random</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>color</td>
                        <td>hex color</td>
                        <td>white</td>
                        <td>#45ff11</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>opacity</td>
                        <td>number between 1 and 100</td>
                        <td>100</td>
                        <td>90</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>speed</td>
                        <td>milisecond bigger than 1</td>
                        <td>200</td>
                        <td>500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>acurancy</td>
                        <td>number bigger than 0</td>
                        <td>50</td>
                        <td>100</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>direction</td>
                        <td>top, bottom, left, right</td>
                        <td>bottom</td>
                        <td>right</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>delay</td>
                        <td>milisecond bigger than 1</td>
                        <td>200</td>
                        <td>1000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>onshow</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('نمایش'); }</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>onhide</td>
                        <td>function</td>
                        <td>null</td>
                        <td>function(){ alert('بست'); }</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="man-example">
            <input class="example-buttons tooltipbox" type="button" id="id1" value="ToolTip box width black backcolor" tooltip="با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش.">
            <input class="example-buttons tooltipbox" type="button" id="id2" value="ToolTip box width black color" tooltip="با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش.">
            <input class="example-buttons tooltipbox" type="button" id="id3" value="ToolTip box width low opacity" tooltip="با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش.">
            <input class="example-buttons tooltipbox" type="button" id="id4" value="ToolTip box width low speed" tooltip="با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش.">
            <input class="example-buttons tooltipbox" type="button" id="id5" value="ToolTip box width low acurancy" tooltip="با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش.">
            <input class="example-buttons tooltipbox" type="button" id="id6" value="ToolTip box width left direction" tooltip="با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش.">
            <input class="example-buttons tooltipbox" type="button" id="id7" value="ToolTip box width right direction" tooltip="با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش.">
            <input class="example-buttons tooltipbox" type="button" id="id8" value="ToolTip box width top direction" tooltip="با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش.">
            <input class="example-buttons tooltipbox" type="button" id="id9" value="ToolTip box width high delay" tooltip="با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش.">
            <input class="example-buttons tooltipbox" type="button" id="id10" value="ToolTip box width callback function" tooltip="با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش. با سلام خدمت دوستان این خیلی خوبه برو توش.">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
</html>
