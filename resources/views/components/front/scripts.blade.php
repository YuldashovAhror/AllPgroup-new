<script src="/issets/js/jquery-3.4.1.min.js"></script>
<script src="/issets/js/owl.carousel.js"></script>
<script src="/issets/js/jquery.custom-select.js"></script>
{{-- <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script> --}}
<script src="/issets/js/wow.min.js"></script>
<script src="/issets/js/main.js"></script>


<script>
    function send1() {

        let token1 = $("#token1").val();
        let name = $('#first_name').val();
        let phone = $('#phone').val();
        let photo = $('#file1').val();
        let client = $('#client').val();
        let discription = $('#discription').val();

        var formData = new FormData(); // Создаем объект FormData
            formData.append('name', name);
            formData.append('phone', phone);
            formData.append('photo', $("#file1")[0].files[0]);
            formData.append('client', client);
            formData.append('discription', discription); // Добавляем файл в FormData

        $.ajax({
            type: "POST",
            url: "upload.php",
            cache: false,
			contentType: false,
			processData: false,
			data: formData,
			dataType : 'json',
			success: function(response){
				console.log(response)
			}
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
</script>
{{-- <script>
    function send2() {

        let token = $("#token").val();
        let name = $('#first_name2').val();
        let phone = $('#phone2').val();
        let photo = $('.photo2').val();
        let vacancy_number = $('#vacancy_number').val();
        $.ajax({
            token: token,
            type: "get",
            url: "/feedback",
            data: {
                name: name,
                phone: phone,
                photo: photo,
                vacancy_number: vacancy_number,
            },
            contentType: "application/json; charset=utf-8",
            dataType: "json",
        });
    }
</script> --}}
{{-- <script data-b24-form="inline/4/bwnvw4" data-skip-moving="true">
    (function(w, d, u) {
        var s = d.createElement('script');
        s.async = true;
        s.src = u + '?' + (Date.now() / 180000 | 0);
        var h = d.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s, h);
    })(window, document, 'https://cdn-ru.bitrix24.ru/b18647668/crm/form/loader_4.js');
</script> --}}
<script>
    (function(w, d, u) {
        var s = d.createElement('script');
        s.async = true;
        s.src = u + '?' + (Date.now() / 60000 | 0);
        var h = d.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s, h);
    })(window, document, 'https://cdn-ru.bitrix24.ru/b18647668/crm/site_button/loader_4_arvi7b.js');
</script>
