const kinvey = (() => {

    const BASE_URL = 'https://baas.kinvey.com/';
    const APP_KEY = 'kid_SkL9WdquE';
    const APP_SECRET = '9738914923774adf8798b206a019dbad';

    function makeAuth(auth){

        if(auth == 'basic'){

            return {
                'Authorization':`Basic ${btoa(APP_KEY + ':' + APP_SECRET)}`
            }
        }else{

            return {
                'Authorization':`Kinvey ${sessionStorage.getItem('authtoken')}`
            }
        }
    }

    function makeRequest(method, collection, endpoint, auth){

        return {
            url:`${BASE_URL}${collection}/${APP_KEY}/${endpoint}`,
            method,
            headers:makeAuth(auth)
        }
    }

    function get(){

    }

    function post(collection, endpoint, auth, data){

        let request = makeRequest('POST', collection, endpoint, auth);
        request.data = data;

        return $.ajax(request);
    }

    function update(){

    }

    function remove(){

    }

    return {
        get,
        post,
        update,
        remove
    }
})()