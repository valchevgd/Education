import java.util.Scanner;

public class P16_Calculations {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int numOne = Integer.parseInt(input.nextLine());
        int numTwo = Integer.parseInt(input.nextLine());
        String operator = input.nextLine();
        double result = 0;

        if ("+".equals(operator)){
            result = numOne + numTwo;
            if (result % 2 == 0){
                System.out.printf("%d + %d = %.0f - even", numOne, numTwo, result);
            }else {
                System.out.printf("%d + %d = %.0f - odd", numOne, numTwo, result);
            }
        }else if ("-".equals(operator)){
            result = numOne - numTwo;
            if (result % 2 == 0){
                System.out.printf("%d - %d = %.0f - even", numOne, numTwo, result);
            }else {
                System.out.printf("%d - %d = %.0f - odd", numOne, numTwo, result);
            }
        }else if ("*".equals(operator)){
            result = numOne * numTwo;
            if (result % 2 == 0){
                System.out.printf("%d * %d = %.0f - even", numOne, numTwo, result);
            }else {
                System.out.printf("%d * %d = %.0f - odd", numOne, numTwo, result);
            }
        }else if ("%".equals(operator)){
            if (numTwo == 0){
                System.out.printf("Cannot divide %d by zero", numOne);
            }else {
                result = numOne % numTwo;
                System.out.printf("%d %% %d = %.0f", numOne, numTwo, result);
            }
        }else if ("/".equals(operator)) {
            if (numTwo == 0) {
                System.out.printf("Cannot divide %d by zero", numOne);
            } else {
                result = (numOne * 1.0) / numTwo;
                System.out.printf("%d / %d = %.2f", numOne, numTwo, result);
            }
        }
    }
}
