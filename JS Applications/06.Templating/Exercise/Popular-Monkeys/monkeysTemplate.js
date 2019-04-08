$(() => {
    
    let templateHTML = $('#monkey-template').html();
    let template = Handlebars.compile(templateHTML);
    let context = { monkeys };

    $('div.monkeys').html(template(context));
})

function showInfo(id){

    $(`#${id}`).toggle();
}