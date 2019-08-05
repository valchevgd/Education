import java.util.Scanner;

public class P11_MathOperations {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int firstOperand = scanner.nextInt();
        char operator = scanner.next().charAt(0);
        int secondOperand = scanner.nextInt();

        double result = getResult(firstOperand, secondOperand, operator);

        System.out.printf("%.0f", result);
    }

    private static double getResult(int firstOperand, int secondOperand, char operator) {

        double result = 0;

        switch (operator) {

            case '+':
                result = firstOperand + secondOperand * 1.0;
                break;
            case '-':
                result = firstOperand - secondOperand * 1.0;
                break;
            case '*':
                result = firstOperand * secondOperand * 1.0;
                break;
            case '/':
                result = firstOperand / secondOperand * 1.0;
                break;
        }

        return result;
    }
}
