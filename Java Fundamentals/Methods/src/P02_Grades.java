import java.util.Scanner;

public class P02_Grades {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        double grade = scanner.nextDouble();

        printGradeInWords(grade);
    }

    private static void printGradeInWords(double grade) {

        String gradeInWords;

        if (grade < 3) {
            gradeInWords = "Fail";
        }else if(grade < 3.5) {
            gradeInWords = "Poor";
        }else if(grade < 4.5) {
            gradeInWords = "Good";
        }else if(grade < 5.5) {
            gradeInWords = "Very good";
        }else {
            gradeInWords = "Excellent";
        }

        System.out.println(gradeInWords);
    }
}
