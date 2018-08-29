function solution(array) {
    let student = {};
    for (let i = 0; i < array.length; i++) {
        let temp = array[i].split(" -> ");
        let key = temp[0];
        if (key === "age" || key === "grade"){
            let value = Number(temp[1]);
            student[`${key}`] = value;
        } else{
            let value = temp[1];
            student[`${key}`] = `${value}`;
        }
    }
    let jsonStr = JSON.stringify(student);

    console.log(jsonStr);
}

solution(["name -> Angel", "surname -> Georgiev", "age -> 20",
    "grade -> 6.00", "date -> 23/05/1995", "town -> Sofia"])