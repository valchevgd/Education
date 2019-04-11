const notifications = (() => {

    $(document).on({

        ajaxStart: () => $('#loading').fadeIn(),
        ajaxStop: () => $('#loading').fadeOut()
    });

    function showSuccess(message){

        let $box = $('#success');
        $box.text(message);
        $box.fadeIn();
        $box.fadeOut(3000);
    }

    function showError(message){

        let $box = $('#error');
        $box.text(message);
        $box.fadeIn();
        $box.fadeOut(3000);
    }

    return {
        showSuccess,
        showError
    }
})()