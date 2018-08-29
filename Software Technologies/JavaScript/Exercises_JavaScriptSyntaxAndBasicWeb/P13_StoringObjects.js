function solution(array){
    let students = [];
    for (let i = 0; i < array.length; i++){
        let temp = array[i].split(" -> ");
        let student = {name:temp[0], age:temp[1], grade:temp[2]}
        students.push(student);
    }
    for (let student of students){
        console.log(`Name: ${student.name}`)
        console.log(`Age: ${student.age}`)
        console.log(`Grade: ${student.grade}`)
    }
}

solution(["Pesho -> 13 -> 6.00", "Ivan -> 12 -> 5.57", "Toni -> 13 -> 4.90"]);