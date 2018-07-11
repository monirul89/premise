jQuery(function () {
    // contact form animations
    $('#demoRequestEmail1').click(function () {
        document.getElementById("demoRequestEmail1").innerHTML = '\
<input type="email" placeholder="Email" id="email1" name="email1" required />';
        $("#email1").focus();
    })
    $('#demoRequestEmail2').click(function () {
        document.getElementById("demoRequestEmail2").innerHTML = '\
<input type="email" placeholder="Email" id="email2" name="email2" required />';
        $("#email2").focus();
    })
    $('#demoRequestEmail3').click(function () {
        document.getElementById("demoRequestEmail3").innerHTML = '\
<input type="email" placeholder="Email" id="email3" name="email3" required />';
        $("#email3").focus();
    })
    $('#demoRequestEmail4').click(function () {
        document.getElementById("demoRequestEmail4").innerHTML = '\
<input type="email" placeholder="Email" id="email4" name="email4" required />';
        $("#email4").focus();
    })





    $('#submit1').click(function (e) {
        e.preventDefault();
                
        var hasError = false;

        if ($("#email1").length > 0) {
            var email = $('#email1').val();
            var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var data = { 'email': email };
            if (reg.test(String(email).toLowerCase())) {
                
                $.ajax({
                type: "POST",
                url: "/wp-content/themes/premise/email.php",
                data: data,
                success: function () {
                console.log('sent');
                },
                error: () =>{
                console.log('error');
                }
                });

                document.getElementById("emailerror1").style = "display: none;"
                $('#popup-abstractor').html('<h2 class="title">Thank you for your request. Our team will get in touch with you soon!</h2 >');
                $('#popupContent').modal('show');
            } else {

                hasError = true;
            }
        } else
            hasError = true;

        if (hasError) {
            document.getElementById("emailerror1").style = "display: block;"
            document.getElementById("emailerror1").classList.add("emailerror");
            $('#emailerror1').html('Please type valid email');
        }

    });

    $('#submit2').click(function (e) {
        e.preventDefault();
        var hasError = false;

        if ($("#email2").length > 0) {
            var email = $('#email2').val();
            var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            
            var data = { 'email': email };
            if (reg.test(String(email).toLowerCase())) {
                
                $.ajax({
                type: "POST",
                url: "/wp-content/themes/premise/email.php",
                data: data,
                success: function () {
                console.log('sent');
                },
                error: () =>{
                console.log('error');
                }
                });

                document.getElementById("emailerror1").style = "display: none;"
                $('#popup-abstractor').html('<h2 class="title">Thank you for your request. Our team will get in touch with you soon!</h2 >');
                $('#popupContent').modal('show');
            } else {

                hasError = true;
            }
        } else
            hasError = true;

        if (hasError) {
            document.getElementById("emailerror2").style = "display: block;"
            document.getElementById("emailerror2").classList.add("emailerror");
            $('#emailerror2').html('Please type valid email');
        }

    });

    $('#submit3').click(function (e) {
        e.preventDefault();
        var hasError = false;

        if ($("#email3").length > 0) {
            var email = $('#email3').val();
            var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            
            var data = { 'email': email };
            if (reg.test(String(email).toLowerCase())) {
                
                $.ajax({
                type: "POST",
                url: "/wp-content/themes/premise/email.php",
                data: data,
                success: function () {
                console.log('sent');
                },
                error: () =>{
                console.log('error');
                }
                });

                document.getElementById("emailerror1").style = "display: none;"
                $('#popup-abstractor').html('<h2 class="title">Thank you for your request. Our team will get in touch with you soon!</h2 >');
                $('#popupContent').modal('show');
            } else {

                hasError = true;
            }
        } else
            hasError = true;

        if (hasError) {
            document.getElementById("emailerror3").style = "display: block;"
            document.getElementById("emailerror3").classList.add("emailerror");
            $('#emailerror3').html('Please type valid email');
        }

    });

    $('#submit4').click(function (e) {
        e.preventDefault();
        var hasError = false;

        if ($("#email4").length > 0) {
            var email = $('#email4').val();
            var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            
            var data = { 'email': email };
            if (reg.test(String(email).toLowerCase())) {
                
                $.ajax({
                type: "POST",
                url: "/wp-content/themes/premise/email.php",
                data: data,
                success: function () {
                console.log('sent');
                },
                error: () =>{
                console.log('error');
                }
                });

                document.getElementById("emailerror1").style = "display: none;"
                $('#popup-abstractor').html('<h2 class="title">Thank you for your request. Our team will get in touch with you soon!</h2 >');
                $('#popupContent').modal('show');
            } else {

                hasError = true;
            }
        } else
            hasError = true;

        if (hasError) {
            document.getElementById("emailerror4").style = "display: block;"
            document.getElementById("emailerror4").classList.add("emailerror");
            $('#emailerror4').html('Please type valid email');
        }

    });
});

