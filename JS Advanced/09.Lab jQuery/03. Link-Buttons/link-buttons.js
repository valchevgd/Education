function attachEvents() {

    $('.button').on('click', clickButton);

    function clickButton() {
        $('.selected').removeClass('selected');
        $(this).addClass('selected');
    }
}