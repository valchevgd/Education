function attachEvents() {

    $('li').click(selectTown);
    $('#showTownsButton').click(showTowns);
    let towns = [];

    function selectTown() {

        let town = $(this).text();

        if (towns.includes(town)) {
            let index = towns.indexOf(town);
            towns.splice(index, 1);
            $(this).removeAttr('data-selected', );
            $(this).css('background', '');
        }else {
            towns.push(town);
            $(this).attr('data-selected', true);
            $(this).css('background', '#DDD');
        }
    }
    
    function showTowns() {
        $('#selectedTowns').text(towns.join(', '))
    }
}