function initializeTable() {

    $('#createLink').click(prepareCountry);
    fixLinks();
    function prepareCountry() {

        let newCountry = $('#newCountryText').val();
        let newCapital = $('#newCapitalText').val();

        createCountry(newCountry, newCapital);
    }

    function createCountry(country, capital) {

        let row = $('<tr>');

        let countryTd = $(`<td>${country}</td>`);
        let capitalTd = $(`<td>${capital}</td>`);

        let actionsTd = $('<td>');
        actionsTd.append($('<a href="#">[Up]</a>').click(moveUp));
        actionsTd.append($('<a href="#">[Down]</a>').click(moveDown));
        actionsTd.append($('<a href="#">[Delete]</a>').click(deleteCountry));

        row.append(countryTd, capitalTd, actionsTd);

        $('table').append(row);

        fixLinks();
    }

    function moveUp() {
        let row = $(this).parent().parent();

        row.insertBefore(row.prev());

        fixLinks();
    }

    function moveDown() {
        let row = $(this).parent().parent();

        row.insertAfter(row.next());

        fixLinks();
    }

    function deleteCountry() {
        let row = $(this).parent().parent();

        row.remove();


    }

    function fixLinks() {
        $('#countriesTable a').css('display', 'inline');


        let tableRows = $('#countriesTable tr');

        $(tableRows[2]).find("a:contains('Up')")
            .css('display', 'none');


        $(tableRows[tableRows.length - 1]).find("a:contains('Down')")
            .css('display', 'none');
    }

    createCountry('Bulgaria', 'Sofia');
    createCountry('Germany', 'Berlin');
    createCountry('Russia', 'Moscow');
}