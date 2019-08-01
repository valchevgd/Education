controller.getAddMovie = function(context){

    context.isAuth = userService.isAuth;
    context.username = sessionStorage.getItem('username');

    

    context.loadPartials({
        header:'../views/common/header.hbs',
        footer:'../views/common/footer.hbs'
    }).then(function(){
        this.partial('../views/movie/add_movie.hbs')
    });
}

controller.postAddMovie = function(context){

    let data = { ...context.params};

    if(data.title.length < 6){
        notify.showError('The title should be at least 6 characters long.');
    } else if (!data.imageUrl.startsWith('http')){
        notify.showError('The image should start with "http://" or "https://"');
    } else if (data.description.length < 10){
        notify.showError('The description should be at least 10 characters long.');
    }else if (data.tickets === ''){
        notify.showError('The available tickets should be a number.');
    }else{

        let genres = data.genres.split(' ');

        data.genres = genres;

        movieService.addMovie(data).then(function (res) {
            notify.showInfo('Movie created successfully.');
            context.redirect('#/');
        }).catch(function (err) {
            console.log(err);
        })
    }
}

controller.getAllMovies = async function(context){

    context.isAuth = userService.isAuth;
    context.username = sessionStorage.getItem('username');

    try{

        context.movies = await movieService.getAll();


        context.loadPartials({
            header:'../views/common/header.hbs',
            footer:'../views/common/footer.hbs',
            movie:'../views/movie/cinema_movie.hbs'
        }).then(function(){
            this.partial('../views/movie/all_movies.hbs')
        });
    } catch(error){
        console.error(error);
    }

}

controller.buyTicket = async function(context){

    let id = context.params.id;

    try{
        let movie = await movieService.getMovie(id);
        let newTickets = Number(movie.tickets) - 1;
        if(newTickets < 0){
            notify.showError(`Not more tickets for ${movie.title}!`);
            return;
        }
        movie.tickets = newTickets;

        movieService.updateMovie(id, movie)
            .then(function(response) {

                notify.showInfo(`Successfully bought ticket for ${response.title}!`);
                context.redirect('#/all_movies');
            });

    }catch(error){
        console.error(error);
    }
}

controller.showDetails = async function(context){

    context.isAuth = userService.isAuth;
    context.username = sessionStorage.getItem('username');

    let id = context.params.id;

    try{

        context.movie = await movieService.getMovie(id);
        
        context.loadPartials({
            header:'../views/common/header.hbs',
            footer:'../views/common/footer.hbs',
        }).then(function(){
            this.partial('../views/movie/detailed_movie.hbs')
        });
    }catch(error){
        console.error(error);
    }
}

controller.getMyMovies = async function(context){

    context.isAuth = userService.isAuth;
    context.username = sessionStorage.getItem('username');


    try {
        let movies = await movieService.getAll();
        let userId = sessionStorage.getItem('id');
        movies.forEach((movie) => movie.isCreator = movie._acl.creator === userId);

        context.movies = movies;

        context.loadPartials({
            header:'../views/common/header.hbs',
            footer:'../views/common/footer.hbs',
            movie:'../views/movie/my_movie.hbs'
        }).then(function(){
            this.partial('../views/movie/my_movies.hbs')
        });
    } catch (e) {
        console.log(e);
    }

}

controller.getEditMovie = async function(context){

    context.isAuth = userService.isAuth;
    context.username = sessionStorage.getItem('username');

    let id = context.params.id;

    try{

        context.movie = await movieService.getMovie(id);
        
        context.loadPartials({
            header:'../views/common/header.hbs',
            footer:'../views/common/footer.hbs',
        }).then(function(){
            this.partial('../views/movie/edit_movie.hbs')
        });
    }catch(error){
        console.error(error);
    }
}

controller.postEditMovie = function(context){

    context.isAuth = userService.isAuth;
    context.username = sessionStorage.getItem('username');

    let id = context.params.id;

    let data = { ...context.params};

    if(data.title.length < 6){
        notify.showError('The title should be at least 6 characters long.');
    } else if (!data.imageUrl.startsWith('http')){
        notify.showError('The image should start with "http://" or "https://"');
    } else if (data.description.length < 10){
        notify.showError('The description should be at least 10 characters long.');
    }else if (data.tickets === ''){
        notify.showError('The available tickets should be a number.');
    }else{

        let genres = data.genres.split(' ');

        data.genres = genres;

        movieService.updateMovie(id, data).then(function (res) {
            notify.showInfo('Movie updated successfully.');
            context.redirect('#/my_movies');
        }).catch(function (err) {
            console.log(err);
        })
    }
}

controller.getDeleteMovie = async function(context){
        
    context.isAuth = userService.isAuth;
    context.username = sessionStorage.getItem('username');

    let id = context.params.id;

    try{

        context.movie = await movieService.getMovie(id);
        
        context.loadPartials({
            header:'../views/common/header.hbs',
            footer:'../views/common/footer.hbs',
        }).then(function(){
            this.partial('../views/movie/delete_movie.hbs')
        });
    }catch(error){
        console.error(error);
    }
    
}

controller.postDeleteMovie =  function(context){
        
    let id = context.params.id;
   
    movieService.removeMovie(id);
           
    notify.showInfo('Movie was removed successfully!');
    context.redirect('#/');
           
    
}