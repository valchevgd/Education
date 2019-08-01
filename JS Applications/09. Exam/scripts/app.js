const controller = {};

$(() => {
    const app = Sammy('#container', function(){
        this.use('Handlebars', 'hbs');

        this.get('#/', controller.getHome);

        this.get('#/register', controller.getRegister);
        this.post('#/register', controller.postRegister);

        this.get('#/login', controller.getLogin);
        this.post('#/login', controller.postLogin);

        this.get('#/logout', controller.logout);

        this.get('#/all_movies', controller.getAllMovies);

        this.get('#/add_movie', controller.getAddMovie);
        this.post('#/add_movie', controller.postAddMovie);

        this.get('#/buy_ticket/:id', controller.buyTicket);
        this.get('#/details/:id', controller.showDetails);

        this.get('#/my_movies', controller.getMyMovies);

        this.get('#/edit/:id', controller.getEditMovie);
        this.post('#/edit', controller.postEditMovie);

        this.get('#/delete/:id', controller.getDeleteMovie);
        this.post('#/delete', controller.postDeleteMovie);
    });

    app.run('#/');
});