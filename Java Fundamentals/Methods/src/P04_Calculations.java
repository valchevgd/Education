import java.util.Scanner;

public class P04_Calculations {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String operator = scanner.nextLine();
        int firstOperand = scanner.nextInt();
        int secondOperand = scanner.nextInt();

        switch (operator) {

            case "add":
                add(firstOperand, secondOperand);
                break;
            case "multiply":
                multiply(firstOperand, secondOperand);
                break;
            case "subtract":
                subtract(firstOperand, secondOperand);
                break;
            case "divide":
                divide(firstOperand, secondOperand);
                break;
        }
    }

    private static void add(int firsOperand, int secondOperand) {

        System.out.println(firsOperand + secondOperand);
    }

    private static void multiply(int firsOperand, int secondOperand) {

        System.out.println(firsOperand * secondOperand);
    }

    private static void subtract(int firsOperand, int secondOperand) {

        System.out.println(firsOperand - secondOperand);
    }

    private static void divide(int firsOperand, int secondOperand) {

        System.out.println(firsOperand / secondOperand);
    }
}
