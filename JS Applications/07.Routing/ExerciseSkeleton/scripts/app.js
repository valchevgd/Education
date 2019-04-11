const handlers = {};

$(() => {
    const app = Sammy('#root', function(){
        this.use('Handlebars', 'hbs');

        this.get('#/', handlers.getHome);

        this.get('#/register', handlers.getRegister);
        this.post('#/register', handlers.registerUser);

        this.get('#/login', handlers.getLogin);
        this.post('#/login', handlers.loginUser);

        this.get('#/logout', handlers.logoutUser);
    });

    app.run('#/');
});