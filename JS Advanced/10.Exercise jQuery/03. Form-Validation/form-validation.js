function validate() {

    $('#submit').on('click', checkData);

    function checkData(e){

        e.preventDefault();
        let isValid = true;

        let username = $('#username');

        if (username.val().length < 3
            || username.val().length > 20
            || !/[A-Za-z0-9]+/g.test(username)) {
            username.css('border-color', 'rgb(255, 0, 0)');
            isValid = false;
        }

        let email = $('#email');

        if (!/[(.*)@(.*)\.(.*)]/g.test(email.val())){
            email.css('border-color', 'rgb(255, 0, 0)');
            isValid = false;
        }

        let password = $('#password');

        if (password.val().length < 5
            || password.val().length > 15) {
            password.css('border-color', 'rgb(255, 0, 0)');
            isValid = false;
        }

        let confirmPassword = $('#confirm-password');

        if (confirmPassword.val().length < 5
            || confirmPassword.val().length > 15) {
            confirmPassword.css('border-color', 'rgb(255, 0, 0)');
            isValid = false;
        }

        if (password.val() !== confirmPassword.val()){
            password.css('border-color', 'rgb(255, 0, 0)');
            confirmPassword.css('border-color', 'rgb(255, 0, 0)');
            isValid = false;
        }

        let companyNumber = $('#companyNumber');


        if ($('#companyInfo').css('display') === 'block'
            && (companyNumber.val() < 999 || companyNumber.val() > 10000)){

            companyNumber.css('border-color', 'rgb(255, 0, 0)');
            isValid = false;
        }

        if (isValid){
            $('#valid').css("display", "block");
        }
    }


    $('#company').change(
        function(){
            if (this.checked) {
                $('#companyInfo').css("display", "block");
            }else {
                $('#companyInfo').css("display", "none");
            }
        });
}
