$(() => {
    renderCatTemplate();

    function renderCatTemplate() {
        let cats = window.cats;

        let templateHTML = $('#cat-template').html();
        let template = Handlebars.compile(templateHTML);
        let context = { cats };

        $('#allCats').html(template(context));
    }

});

function showStatus(id){

    $(`#${id}`).toggle();
}
