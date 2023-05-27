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
</head>

<body>
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
