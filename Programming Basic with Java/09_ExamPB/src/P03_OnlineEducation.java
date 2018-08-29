import java.util.Scanner;

public class P03_OnlineEducation {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String firstFormOfEducation = input.nextLine();
        int firstStudents = Integer.parseInt(input.nextLine());
        String secondFormOfEducation = input.nextLine();
        int secondStudents = Integer.parseInt(input.nextLine());
        String thirdFormOfEducation = input.nextLine();
        int thirdStudents = Integer.parseInt(input.nextLine());

        int onlineStudents = 0;
        int onsiteStudents = 0;
        int totalStudents = 0;

        if ("online".equals(firstFormOfEducation)){
            onlineStudents += firstStudents;
            totalStudents += firstStudents;
        }else {
            onsiteStudents += firstStudents;
            totalStudents += firstStudents;
        }
        if ("online".equals(secondFormOfEducation)){
            onlineStudents += secondStudents;
            totalStudents += secondStudents;
        }else {
            onsiteStudents += secondStudents;
            totalStudents += secondStudents;
        }
        if ("online".equals(thirdFormOfEducation)){
            onlineStudents += thirdStudents;
            totalStudents += thirdStudents;
        }else {
            onsiteStudents += thirdStudents;
            totalStudents += thirdStudents;
        }

        if (onsiteStudents > 600){
            onlineStudents += (onsiteStudents - 600);
            onsiteStudents = 600;
        }

        System.out.printf("Online students: %d%n", onlineStudents);
        System.out.printf("Onsite students: %d%n", onsiteStudents);
        System.out.printf("Total students: %d%n", totalStudents);

    }
}
