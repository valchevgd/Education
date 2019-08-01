const movieService = (() => {

    function addMovie(data){
        return kinvey.post('appdata', 'movies', 'kinvey', data);
    }

    function getAll(){
        return kinvey.get('appdata', 'movies', 'kinvey', '?query={}&sort={"tickets": -1}');
    }

    function getMovie(id){
        return kinvey.get('appdata', `movies/${id}`, 'kinvey');
    }

    function updateMovie(id, movie){
        return kinvey.update('appdata',  `movies/${id}`, 'kinvey', movie);
    }

    function removeMovie(id){

        return kinvey.remove('appdata', `movies/${id}`, 'kinvey');
    }

    return {
        addMovie,
        getAll,
        getMovie,
        updateMovie,
        removeMovie
    }


})();