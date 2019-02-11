function solve(input, commands){
    let th = input[0];
    let students = [];
    let command = commands.split(' ')[0];
    let param = commands.split(' ')[1];

    for (let i = 1; i < input.length; i++){

        let student = [];
        let j = 0;
        for (let header of th){
            for (; j < input[i].length;){
                student[header] = input[i][j];
                break
            }
            j++;

        }

        students.push(student);
    }


    let output = getOutput();

    let thToPrint = th.join(' | ');

    console.log(thToPrint);
    for (let i = 0; i < output.length; i++){
        let student = output[i];
        let studentToPrint = [];
        for (let params in student){
            studentToPrint.push(student[params]);
        }

        console.log(studentToPrint.join(' | '));
    }


    function getOutput() {
        if (command === 'sort'){
            let sorted = students.sort((a, b) => {
                if (a.name < b.name){
                    return 1;
                } else {
                    return - 1;
                }
            });

            return sorted;
        }else if (command === 'filter') {
            let secondParam = commands.split(' ')[2];
            let toReturn = [];
            for (let student of students){
                if (student[param] === secondParam){
                    toReturn.push(student);
                }
            }

            return toReturn;
        }else if (command === 'hide'){
            let index = th.indexOf(param);
            let studentsToReturn = [];
            th.splice(index, 1);
            for (let student of students){
                let studentToPrint = [];
                for (let params in student){
                    studentToPrint.push(student[params]);
                }
                studentToPrint.splice(index, 1);
                studentsToReturn.push(studentToPrint);
            }

            return studentsToReturn;
        }
    }

}

solve([['name', 'age', 'grade'],
        ['Peter', '25', '5.00'],
        ['George', '34', '6.00'],
        ['Marry', '28', '5.49']],
    'hide age');