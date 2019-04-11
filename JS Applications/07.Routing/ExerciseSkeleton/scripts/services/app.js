const handlers = {};

$(() => {
    const app = Sammy('#root', function(){
        this.use('Handlebars', 'hbs');

        this.get('#/', handlers.getHome);

        this.get('#/register', handlers.getRegister);

        this.get('#/login', handlers.getLogin);
    });

    app.run('#/');
});