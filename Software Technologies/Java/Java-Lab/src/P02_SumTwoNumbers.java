import java.util.Scanner;

public class P02_SumTwoNumbers {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        double firstNum = Double.parseDouble(input.nextLine());
        double secondNum = Double.parseDouble(input.nextLine());

        double result = firstNum + secondNum;

        System.out.printf("%.2f", result);
    }
}
