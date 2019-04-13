const songService = (() => {

    function createSong(data){

        return kinvey.post('appdata', 'songs', 'kinvey', data);
    }

    function getAllSongs () {
        return kinvey.get('appdata', 'songs', 'kinvey', '?query={}&sort={"likeCounter": -1}');
    }

    function getSong(id){

       return kinvey.get('appdata', `songs/${id}`, 'kinvey');
    }

    function updateSong(id, song){

        return kinvey.update('appdata',  `songs/${id}`, 'kinvey', song);
    }

    function removeSong(id){

        return kinvey.remove('appdata', `songs/${id}`, 'kinvey');
    }

    return {
        createSong,
        getAllSongs,
        getSong,
        updateSong,
        removeSong
    }
})();