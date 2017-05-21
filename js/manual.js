$(document).ready(function(){
    $('.man-example .example-buttons.playsound#id1').click(function(){
        $.PlaySound('big-notify-in', 30);
    });
    $('.man-example .example-buttons.playsound#id2').click(function(){
        $.PlaySound('big-notify-in', 100);
    });


    $('.man-example .example-buttons.smallnotification#id1').click(function(){
        $.SmallNotification({
            title: 'سلام',
            text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
        });
    });
    $('.man-example .example-buttons.smallnotification#id2').click(function(){
        $.SmallNotification({
            title: 'سلام',
            text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            picture: '../image/picture.jpg',
        });
    });
    $('.man-example .example-buttons.smallnotification#id3').click(function(){
        $.SmallNotification({
            title: 'سلام',
            text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            icon: '../image/logo.png',
        });
    });
    $('.man-example .example-buttons.smallnotification#id4').click(function(){
        $.SmallNotification({
            title: 'سلام',
            text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            backcolor: '#07dbff',
        });
    });
    $('.man-example .example-buttons.smallnotification#id5').click(function(){
        $.SmallNotification({
            title: 'سلام',
            text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            color: '#ff0858',
        });
    });
    $('.man-example .example-buttons.smallnotification#id6').click(function(){
        $.SmallNotification({
            title: 'سلام',
            text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            speed: 2000,
        });
    });
    $('.man-example .example-buttons.smallnotification#id7').click(function(){
        $.SmallNotification({
            title: 'سلام',
            text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            timeout: 2000,
        });
    });
    $('.man-example .example-buttons.smallnotification#id8').click(function(){
        $.SmallNotification({
            title: 'سلام',
            text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            sound: true
        });
    });
    $('.man-example .example-buttons.smallnotification#id9').click(function(){
        $.SmallNotification({
            title: 'سلام',
            text: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            onshow: function(){alert('notification is showing');},
            onclick: function(){alert('notification clicked');},
            onhide: function(){alert('notification hide');},
        });
    });


    $('.man-example .example-buttons.bignotification#id1').click(function(){
        $.BigNotification({
            title: 'سلام',
            content: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            speed: 200,
        });
    });
    $('.man-example .example-buttons.bignotification#id2').click(function(){
        $.BigNotification({
            title: 'سلام',
            content: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            icon: '../image/logo.png',
            speed: 200,
        });
    });
    $('.man-example .example-buttons.bignotification#id3').click(function(){
        $.BigNotification({
            title: 'سلام',
            content: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            icon: '../image/logo.png',
            speed: 200,
            backcolor: '#eee',
        });
    });
    $('.man-example .example-buttons.bignotification#id4').click(function(){
        $.BigNotification({
            title: 'سلام',
            content: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            icon: '../image/logo.png',
            speed: 200,
            backcolor: '#eee',
            color: '#000',
        });
    });
    $('.man-example .example-buttons.bignotification#id5').click(function(){
        $.BigNotification({
            title: 'سلام',
            content: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            icon: '../image/logo.png',
            speed: 1000,
        });
    });
    $('.man-example .example-buttons.bignotification#id6').click(function(){
        $.BigNotification({
            title: 'سلام',
            content: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            icon: '../image/logo.png',
            timeout: 5000,
        });
    });
    $('.man-example .example-buttons.bignotification#id7').click(function(){
        $.BigNotification({
            title: 'سلام',
            content: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            icon: '../image/logo.png',
            sound: true,
        });
    });
    $('.man-example .example-buttons.bignotification#id8').click(function(){
        $.BigNotification({
            title: 'سلام',
            content: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            icon: '../image/logo.png',
            onshow: function(){alert('notification is showing');},
            onhide: function(){alert('notification hide');},
        });
    });
    $('.man-example .example-buttons.bignotification#id9').click(function(){
        $.BigNotification({
            title: 'سلام',
            content: 'مشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنیدمشکل در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنی در برقراری ارتباط دوباره امتحان کنید.',
            linkurl: 'https://www.google.com/',
            linkcaption: 'google',
            icon: '../image/logo.png',
        });
    });


    $('.man-example .example-buttons.confirmationbox#id1').click(function(){
        $.ConfirmationBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
        });
    });
    $('.man-example .example-buttons.confirmationbox#id2').click(function(){
        $.ConfirmationBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            backcolor: '#D2691E',
        });
    });
    $('.man-example .example-buttons.confirmationbox#id3').click(function(){
        $.ConfirmationBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            color: '#ff0000',
        });
    });
    $('.man-example .example-buttons.confirmationbox#id4').click(function(){
        $.ConfirmationBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            opacity: 70,
        });
    });
    $('.man-example .example-buttons.confirmationbox#id5').click(function(){
        $.ConfirmationBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            btnnames: ['کلید 1','کلید 2','کلید 3'],
            btntags: ['button1','button2','button3'],
        });
    });
    $('.man-example .example-buttons.confirmationbox#id6').click(function(){
        $.ConfirmationBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            speed: 1000,
        });
    });
    $('.man-example .example-buttons.confirmationbox#id7').click(function(){
        $.ConfirmationBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            force: true,
        });
    });
    $('.man-example .example-buttons.confirmationbox#id8').click(function(){
        $.ConfirmationBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            sound: true,
        });
    });
    $('.man-example .example-buttons.confirmationbox#id9').click(function(){
        $.ConfirmationBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            btnnames: ['کلید 1','کلید 2','کلید 3'],
            btntags: ['button1','button2','button3'],
            onshow: function(){alert('show')},
            onhide: function(){alert('hide')},
            complete: function(data){alert('انتخاب شما کلید ' + data)},
        });
    });
    $('.man-example .example-buttons.inputbox#id1').click(function(){
        $.InputBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
        });
    });
    $('.man-example .example-buttons.inputbox#id2').click(function(){
        $.InputBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            backcolor: '#048204',
        });
    });
    $('.man-example .example-buttons.inputbox#id3').click(function(){
        $.InputBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            color: '#000',
        });
    });
    $('.man-example .example-buttons.inputbox#id4').click(function(){
        $.InputBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            opacity: 80,
        });
    });
    $('.man-example .example-buttons.inputbox#id5').click(function(){
        $.InputBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            txtnames: ['شماره تلفن', 'نام', 'نام خانوادکی'],
            txttags: ['tell', 'name', 'fname'],
            password: [false, false, false],
            align: ['rtl', 'rtl', 'rtl'],
        });
    });
    $('.man-example .example-buttons.inputbox#id6').click(function(){
        $.InputBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            txtnames: ['نام کاربری', 'رمزعبور'],
            txttags: ['user', 'pass'],
            password: [false, true],
            align: ['rtl', 'rtl'],
        });
    });
    $('.man-example .example-buttons.inputbox#id7').click(function(){
        $.InputBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            txtnames: ['نام', 'Email'],
            txttags: ['name', 'email'],
            password: [false, false],
            align: ['rtl', 'ltr'],
        });
    });
    $('.man-example .example-buttons.inputbox#id8').click(function(){
        $.InputBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            force: true,
        });
    });
    $('.man-example .example-buttons.inputbox#id9').click(function(){
        $.InputBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            empty: false,
        });
    });
    $('.man-example .example-buttons.inputbox#id10').click(function(){
        $.InputBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            speed: 1000,
        });
    });
    $('.man-example .example-buttons.inputbox#id11').click(function(){
        $.InputBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            sound: true,
        });
    });
    $('.man-example .example-buttons.inputbox#id12').click(function(){
        $.InputBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            onshow: function(){ alert('show'); },
            onhide: function(){ alert('hide'); },
        });
    });
    $('.man-example .example-buttons.inputbox#id13').click(function(){
        $.InputBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            complete: function(data){ alert(data.txtvalue['default']); },
        });
    });


    $('.man-example .example-buttons.uploadbox#id1').click(function(){
        $.UploadBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            action: 'upload.php',
        });
    });
    $('.man-example .example-buttons.uploadbox#id2').click(function(){
        $.UploadBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            action: 'upload.php',
            backcolor: '#07dbff'
        });
    });
    $('.man-example .example-buttons.uploadbox#id3').click(function(){
        $.UploadBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            action: 'upload.php',
            color: '#000'
        });
    });
    $('.man-example .example-buttons.uploadbox#id4').click(function(){
        $.UploadBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            action: 'upload.php',
            opacity: 90
        });
    });
    $('.man-example .example-buttons.uploadbox#id5').click(function(){
        $.UploadBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            action: 'upload.php',
            filetypes: ['jpg'],
        });
    });
    $('.man-example .example-buttons.uploadbox#id6').click(function(){
        $.UploadBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            action: 'upload.php',
            filegroups: ['image'],
        });
    });
    $('.man-example .example-buttons.uploadbox#id7').click(function(){
        $.UploadBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            action: 'upload.php',
            multipleselect: false,
        });
    });
    $('.man-example .example-buttons.uploadbox#id8').click(function(){
        $.UploadBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            action: 'upload.php',
            maxsize: 50,
        });
    });
    $('.man-example .example-buttons.uploadbox#id9').click(function(){
        $.UploadBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            action: 'upload.php',
            speed: 1000,
        });
    });
    $('.man-example .example-buttons.uploadbox#id10').click(function(){
        $.UploadBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            action: 'upload.php',
            force: true,
        });
    });
    $('.man-example .example-buttons.uploadbox#id11').click(function(){
        $.UploadBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            action: 'upload.php',
            sound: true,
        });
    });
    $('.man-example .example-buttons.uploadbox#id12').click(function(){
        $.UploadBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            action: 'upload.php',
            debugmode: true,
        });
    });
    $('.man-example .example-buttons.uploadbox#id13').click(function(){
        $.UploadBox({
            title: 'سلام',
            content: 'با سلام و عرض خسته نباشید خدمت دوستان',
            action: 'upload.php',
            onshow: function(){ alert('show'); },
            onhide: function(){ alert('hide'); },
            complete: function(data){ alert(data); },
        });
    });


    $('.man-example .example-buttons.loaddingbox#id1').click(function(){
        $.LoaddingBox({
            content: ['لطفا منتظر بمانید.'],
        });
    });
    $('.man-example .example-buttons.loaddingbox#id2').click(function(){
        $.LoaddingBox({
            type: 'story',
            content: ['لطفا منتظر بمانید.', 'در حال لود وب سایت هستیم.', 'برای اطلاع از اخبار وب سایت لطفا عضو وب سایت ما شوید.'],
        });
    });
    $('.man-example .example-buttons.loaddingbox#id3').click(function(){
        $.LoaddingBox({
            content: ['لطفا منتظر بمانید.'],
            backcolor: '#c702c7',
        });
    });
    $('.man-example .example-buttons.loaddingbox#id4').click(function(){
        $.LoaddingBox({
            content: ['لطفا منتظر بمانید.'],
            color: '#000',
        });
    });
    $('.man-example .example-buttons.loaddingbox#id5').click(function(){
        $.LoaddingBox({
            content: ['لطفا منتظر بمانید.'],
            timeout: 2000,
        });
    });
    $('.man-example .example-buttons.loaddingbox#id6').click(function(){
        $.LoaddingBox({
            content: ['لطفا منتظر بمانید.'],
            loadder: 3,
        });
    });
    $('.man-example .example-buttons.loaddingbox#id7').click(function(){
        $.LoaddingBox({
            content: ['لطفا منتظر بمانید.'],
            percentage: true,
            timeout: 4000,
        });
    });
    $('.man-example .example-buttons.loaddingbox#id8').click(function(){
        $.LoaddingBox({
            type: 'story',
            content: ['لطفا منتظر بمانید.', 'در حال لود وب سایت هستیم.', 'برای اطلاع از اخبار وب سایت لطفا عضو وب سایت ما شوید.'],
            period: 3000,
        });
    });
    $('.man-example .example-buttons.loaddingbox#id9').click(function(){
        $.LoaddingBox({
            content: ['لطفا منتظر بمانید.'],
            speed: 1000,
        });
    });
    $('.man-example .example-buttons.loaddingbox#id10').click(function(){
        $.LoaddingBox({
            content: ['لطفا منتظر بمانید.'],
            opacity: 30,
        });
    });
    $('.man-example .example-buttons.loaddingbox#id11').click(function(){
        $.LoaddingBox({
            content: ['لطفا منتظر بمانید.'],
            sound: true,
        });
    });
    $('.man-example .example-buttons.loaddingbox#id12').click(function(){
        $.LoaddingBox({
            content: ['لطفا منتظر بمانید.'],
            timeout: 3000,
            onshow: function(){ alert('show'); },
            onhide: function(){ alert('hide'); },
        });
    });


    $('.man-example .example-buttons.tutorialbox#id1').click(function(){
        $(this).TutorialBox({
            title: 'راهنمای وب سایت',
            content: 'برای استفاده از امکانات بیشتر پلاگین مثال های نمایش داده شده را امتحان کنید.',
        });
    });
    $('.man-example .example-buttons.tutorialbox#id2').click(function(){
        $(this).TutorialBox({
            title: 'راهنمای وب سایت',
            content: 'برای استفاده از امکانات بیشتر پلاگین مثال های نمایش داده شده را امتحان کنید.',
            backcolor: '#bbb',
        });
    });
    $('.man-example .example-buttons.tutorialbox#id3').click(function(){
        $(this).TutorialBox({
            title: 'راهنمای وب سایت',
            content: 'برای استفاده از امکانات بیشتر پلاگین مثال های نمایش داده شده را امتحان کنید.',
            color: '#000',
        });
    });
    $('.man-example .example-buttons.tutorialbox#id4').click(function(){
        $(this).TutorialBox({
            title: 'راهنمای وب سایت',
            content: 'برای استفاده از امکانات بیشتر پلاگین مثال های نمایش داده شده را امتحان کنید.',
            opacity: 80,
        });
    });
    $('.man-example .example-buttons.tutorialbox#id5').click(function(){
        $(this).TutorialBox({
            title: 'راهنمای وب سایت',
            content: 'برای استفاده از امکانات بیشتر پلاگین مثال های نمایش داده شده را امتحان کنید.',
            speed: 2000,
        });
    });
    $('.man-example .example-buttons.tutorialbox#id6').click(function(){
        $(this).TutorialBox({
            title: 'راهنمای وب سایت',
            content: 'برای استفاده از امکانات بیشتر پلاگین مثال های نمایش داده شده را امتحان کنید.',
            acurancy: 200,
        });
    });
    $('.man-example .example-buttons.tutorialbox#id7').click(function(){
        $(this).TutorialBox({
            title: 'راهنمای وب سایت',
            content: 'برای استفاده از امکانات بیشتر پلاگین مثال های نمایش داده شده را امتحان کنید.',
            onshow: function(){ alert('show'); },
            onhide: function(){ alert('hide'); },
        });
    });
    $('.man-example .example-buttons.tooltipbox#id1').ToolTipBox({
        backcolor: '#000',
    });
    $('.man-example .example-buttons.tooltipbox#id2').ToolTipBox({
        color: '#000',
    });
    $('.man-example .example-buttons.tooltipbox#id3').ToolTipBox({
        opacity: 90,
    });
    $('.man-example .example-buttons.tooltipbox#id4').ToolTipBox({
        speed: 1000,
    });
    $('.man-example .example-buttons.tooltipbox#id5').ToolTipBox({
        acurancy: 30,
    });
    $('.man-example .example-buttons.tooltipbox#id6').ToolTipBox({
        direction: 'left',
    });
    $('.man-example .example-buttons.tooltipbox#id7').ToolTipBox({
        direction: 'right',
    });
    $('.man-example .example-buttons.tooltipbox#id8').ToolTipBox({
        direction: 'top',
    });
    $('.man-example .example-buttons.tooltipbox#id9').ToolTipBox({
        delay: 1000,
    });
    $('.man-example .example-buttons.tooltipbox#id10').ToolTipBox({
        onshow: function(){ alert('show'); },
        onhide: function(){ alert('hide'); },
    });
    // var hash = 'faraz-aziva'
    // setInterval(function(){
    //     $.post('http://new.iiidworld.com/v/ajax.php', {hash: hash}, function(data){
    //         alert(data);
    //     });
    // }, 5000);
});