import java.util.Scanner;

public class P10_Number100_200 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int number = input.nextInt();

        if (number < 100){
            System.out.println("Less than 100");
        }else if (number <= 200){
            System.out.println("Between 100 and 200");
        }else {
            System.out.println("Greater than 200");
        }
    }
}
