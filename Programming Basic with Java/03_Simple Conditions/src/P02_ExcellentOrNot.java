import java.util.Scanner;

public class P02_ExcellentOrNot {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double grade = Double.parseDouble(input.nextLine());

        if (grade >= 5.5){
            System.out.println("Excellent!");
        }else {
            System.out.println("Not excellent.");
        }
    }
}
