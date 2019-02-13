function solve(array) {



    let closure = ( () =>{
        let stringToKeep = '';

        return {
            append: (str) => stringToKeep += str,
            removeStart: (n) => stringToKeep = stringToKeep.substring(Number(n)),
            removeEnd: (n) => stringToKeep = stringToKeep.substring(0, stringToKeep.length - Number(n)),
            print: () => console.log(stringToKeep)
        }
    })();
    for (let st of array) {

        let [comm, value] = st.split(' ');

        closure[comm](value);
    }
}

solve(['append hello',
    'append again',
    'removeStart 3',
    'removeEnd 4',
    'print']);