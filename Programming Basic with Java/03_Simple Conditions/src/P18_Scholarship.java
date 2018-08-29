import java.util.Scanner;

public class P18_Scholarship {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double income = Double.parseDouble(input.nextLine());
        double averageGrade = Double.parseDouble(input.nextLine());
        double minimalWage = Double.parseDouble(input.nextLine());

        double socialScholarship = minimalWage * 0.35;
        double scholarship = averageGrade * 25;

        if (averageGrade >= 5.5 && income <= minimalWage){
            if (socialScholarship > scholarship){
                System.out.printf("You get a Social scholarship %.0f BGN", Math.floor(socialScholarship));
            }else {
                System.out.printf("You get a scholarship for excellent results %.0f BGN", Math.floor(scholarship));
            }
        }else if (averageGrade >= 5.5){
            System.out.printf("You get a scholarship for excellent results %.0f BGN",Math.floor(scholarship) );
        }else if (averageGrade > 4.5 && income <= minimalWage){
            System.out.printf("You get a Social scholarship %.0f BGN", Math.floor(socialScholarship));
        }else {
            System.out.println("You cannot get a scholarship!");
        }


    }
}
