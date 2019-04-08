function attachEvents(){

    $('#btnLoadTowns').on('click', () => {

        let towns = $('#towns').val().split(', ');


        let templateHTML = $('#towns-template').html();
        let template = Handlebars.compile(templateHTML);
        let context = { towns };  

        $('#root').html(template(context));

        $('#towns').val('')
    });
}