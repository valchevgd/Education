const userService = (() => {

    function isAuth(){
        return sessionStorage.getItem('authtoken') !== null;
    }

    function saveSession(response){

        sessionStorage.setItem('username', response.username);
        sessionStorage.setItem('authtoken', response._kmd.authtoken);
        sessionStorage.setItem('id', response._id);
    }

    function register(username, password){

        if(username.length < 3){

            notify.showError('The username should be at least 3 characters long');
            return
        }else if (password.length < 6){

            notify.showError('The password should be at least 6 characters long')
            return
        }

        return kinvey.post('user', '', 'basic', {username, password});
    }

    function login(username, password){

        return kinvey.post('user', 'login', 'basic', {username, password});
    }

    function logout(){

        return kinvey.post('user', '_logout', 'kinvey');
    }

    return {
        register,
        login,
        logout,
        saveSession,
        isAuth
    }
})()