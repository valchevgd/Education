function solve(input) {
    
    let output = [];

    let commander = {
        add : function (string) {
            output.push(string);
        },
        remove : function (string) {
            for (let i = 0; i < output.length; i++) {
                if (output[i] === string){
                    output.splice(i, 1)
                }
            }
        },
        print : function () {
            console.log(output.join(','));
        }

    };

    for (let i = 0; i < input.length; i++) {
        let temp = input[i].split(' ');
        if (temp.length === 1){
            commander.print();
        } else {
            let command = temp[0];
            commander[command](temp[1]);
        }
    }

}

solve(['add hello', 'add again', 'remove hello', 'add again', 'print']);