function search() {

    let searchingCity = $('#searchText').val();

    $('li').css('font-weight', '');

    let cities = $(`li:contains(${searchingCity})`)
        .css('font-weight', 'bold');

    $('#result').text(`${cities.length} matches found.`)

}