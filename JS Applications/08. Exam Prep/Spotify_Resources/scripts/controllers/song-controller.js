controller.getAllSongs = async function(context){

    context.isAuth = userService.isAuth;
    context.username = sessionStorage.getItem('username');


    try {
        let songs = await songService.getAllSongs();
        let userId = sessionStorage.getItem('id');
        songs.forEach((song) => song.isCreator = song._acl.creator === userId);

        context.songs = songs;

        context.loadPartials({
            header:'../views/common/header.hbs',
            footer:'../views/common/footer.hbs',
            song:'../views/songs/single_song.hbs'
        }).then(function(){
            this.partial('../views/songs/all_songs.hbs')
        });
    } catch (e) {
        console.log(e);
    }
    
}

controller.getCreateSong = function(context){

    context.isAuth = userService.isAuth;
    context.username = sessionStorage.getItem('username');

    context.loadPartials({
        header:'../views/common/header.hbs',
        footer:'../views/common/footer.hbs',
        
    }).then(function(){
        this.partial('../views/songs/create_song.hbs')
    });
}

controller.postCreateSong = function(context){

    let data = { ...context.params, likeCounter: 0, listenCounter: 0 };

    if(data.title.length < 6) {
        notify.showError('The title should be at least 6 characters long!');
    } else if (data.artist.length < 3) {
        notify.showError('The artist should be at least 3 characters long!');
    } else if (!data.imageURL.startsWith('http')){
        notify.showError('The image should start with "http://" or "https://"');
    } else {

        songService.createSong(data).then(function (res) {
            notify.showInfo('Song created successfully!');
            context.redirect('#/all_songs');
        }).catch(function (err) {
            console.log(err);
        })
    }

}

controller.likeSong = async function(context){
        
    let id = context.params.id;
    
    try{
        let song =await songService.getSong(id);
        let newLikesCount = Number(song.likeCounter) + 1;
        song.likeCounter = newLikesCount;

        songService.updateSong(id, song)
            .then(function() {
                notify.showInfo('Song was liked successfully!');
                context.redirect('#/all_songs');
            });

    }catch(error){
        console.error(error);
    }
    
}

controller.listenSong = async function(context){
        
    let id = context.params.id;
    
    try{
        let song = await songService.getSong(id);
        let newListenCount = Number(song.listenCounter) + 1;
        song.listenCounter = newListenCount;

        songService.updateSong(id, song)
            .then(function() {
                notify.showInfo('Song was listed successfully!');
                context.redirect('#/all_songs');
            });

    }catch(error){
        console.error(error);
    }
    
}


controller.removeSong = async function(context){
        
    let id = context.params.id;
   
    try{
        let song = await songService.getSong(id);
    
        songService.removeSong(id)
            .then(function() {
                notify.showInfo('Song was removed successfully!');
                context.redirect('#/all_songs');
            });

    }catch(error){
        console.error(error);
    }
    
}

controller.getMySongs = async function(context){

    context.isAuth = userService.isAuth;
    context.username = sessionStorage.getItem('username');


    try {
        let songs = await songService.getAllSongs();
        let userId = sessionStorage.getItem('id');
        songs.forEach((song) => song.isCreator = song._acl.creator === userId);

        context.songs = songs;

        context.loadPartials({
            header:'../views/common/header.hbs',
            footer:'../views/common/footer.hbs',
            song:'../views/songs/single_song.hbs'
        }).then(function(){
            this.partial('../views/songs/my_songs.hbs')
        });
    } catch (e) {
        console.log(e);
    }

}