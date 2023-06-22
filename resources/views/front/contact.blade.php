<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/issets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/issets/css/normalize.css">
    <link rel="stylesheet" href="/issets/css/owl.carousel.css">
    <link rel="stylesheet" href="/issets/css/custom.select.css">
    <link rel="stylesheet" href="/issets/css/animate.css">
    <link rel="stylesheet" href="/issets/css/main.css">
    @livewireStyles
    <title>ALL-P Group | {{ __('asd.Контакты') }}</title>
    
	<meta name="description" content="Компания All-P-Group предлагает полный спектр строительных, монтажных и ремонтных работ. Мы сотрудничаем с ведущими производителями строительной техники и материалов. Профессионализм, опыт и инновационный подход - основа нашего успеха.">
	
	<!-- Facebook -->
    <meta property="og:title" content="ALL-P Group">
    <meta property="og:site_name" content="ALL-P Group">
    <meta property="og:description" content="Компания All-P-Group предлагает полный спектр строительных, монтажных и ремонтных работ. Мы сотрудничаем с ведущими производителями строительной техники и материалов. Профессионализм, опыт и инновационный подход - основа нашего успеха.">
    <meta property="og:url" content="https://all-p.uz/">
    <meta property="og:image" content="/meta.jpg">
    <meta property="og:type" content="website">

     <!-- Google Plus -->
    <meta itemprop="name" content="ALL-P Group">
    <meta itemprop="description" content="Компания All-P-Group предлагает полный спектр строительных, монтажных и ремонтных работ. Мы сотрудничаем с ведущими производителями строительной техники и материалов. Профессионализм, опыт и инновационный подход - основа нашего успеха.">
    <meta itemprop="image" content="/meta.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ALL-P Group">
    <meta name="twitter:description" content="Компания All-P-Group предлагает полный спектр строительных, монтажных и ремонтных работ. Мы сотрудничаем с ведущими производителями строительной техники и материалов. Профессионализм, опыт и инновационный подход - основа нашего успеха.">
    <meta name="twitter:image" content="/meta.jpg">
</head>

<body>
    <div class="preloader">
		<div class="preloader__logo">
			<img src="/issets/img/logo-white.svg" alt="logo">
		</div>
	</div>
    <!-- CHAT -->
    @include('components.front.logo')
    <!-- MOBILE MENU -->
    @include('components.front.mobile')
    <!-- HEADER -->
    @include('components.front.header')
    <!-- PAGE-HEAD -->
    <section class="page-head">
        <div class="page-head__img">
            <img src="/issets/img/contact-bg.jpg" alt="contact">
        </div>
        <h1 class="page-head__title">
            {{ __('asd.НАШИ КОНТАКТЫ123') }}
        </h1>
    </section>
    <!-- CONTACT -->
    
    @livewire('feedback')
    
    
	<!-- ПОКАЗАТЬ ЭТОТ БЛОК ПРИ ОТПРАВКЕ $('.contact-done').fadeIn(600 -->
    
	<div class="contact-done">
		<div class="contact-done__wrap">
			<div class="contact-done__title">
				Заявка отправлена!
			</div>
			<div class="contact-done__text">
				Cпасибо за проявленный интерес, в скором времени мы свяжемся с вами!
			</div>
			<div class="contact-done__img">
				<img src="/issets/img/img/done.svg" alt="ico">
			</div>
		</div>
	</div>

    <!-- FOOTER -->
    @include('components.front.footer')

    @include('components.front.scripts')

    @livewireScripts
    {{-- <script>
        function send1() {
    
            let token1 = $("#token1").val();
            let name = $('#first_name1').val();
            let phone = $('#phone1').val();
            let photo = $('#file1').val();
            let client = $('#client').val();
            let discription = $('#discription1').val();
    
            var formData = new FormData(); // Создаем объект FormData
                formData.append('name', name);
                formData.append('phone', phone);
                formData.append('photo', $("#file1")[0].files[0]);
                formData.append('client', client);
                formData.append('discription', discription); // Добавляем файл в FormData
    
            $.ajax({
                type: "POST",
                url: "feedback/store",
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                dataType : 'json',
                // success: function(response){
                //     console.log(response)
                // }
            });
    
            // console.log(name, phone, formData, client, discription);
            // setTimeout(() => {
            //     $('.popup').hide()
            //     $('.popup__success').show()
            //     $("#first_name").val('');
            //     $("#phone").val('');
            // }, 1000)
            // setTimeout(() => {
            //     $('.popup').show()
            //     $('.popup__success').hide()
            //     $('.feedback').hide()
            // }, 3000)
        }
    </script> --}}
</body>

</html>
