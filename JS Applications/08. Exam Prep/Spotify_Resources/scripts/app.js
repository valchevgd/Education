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

        this.get('#/all_songs', controller.getAllSongs);

        this.get('#/create_song', controller.getCreateSong);
        this.post('#/create_song', controller.postCreateSong);

        this.get('#/like/:id', controller.likeSong);
        this.get('#/listen/:id', controller.listenSong);
        this.get('#/remove/:id', controller.removeSong);

        this.get('#/my_songs', controller.getMySongs);
    });

    app.run('#/');
});