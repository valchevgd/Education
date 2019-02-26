import java.util.Scanner;

public class P04_calculateExpression {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        double a = input.nextDouble();
        double b = input.nextDouble();
        double c = input.nextDouble();

        double fOne = Math.pow((Math.pow(a, 2.0) + Math.pow( b, 2.0)) / (Math.pow(a, 2.0) - Math.pow( b, 2.0)), (a + b + c) / Math.sqrt(c) );
        double fTwo = Math.pow(Math.pow(a, 2) + Math.pow(b , 2) - Math.pow(c, 3), a - b);
        double difference = Math.abs(((a + b + c) / 3) - ((fOne + fTwo) / 2));

        System.out.printf("F1 result: %.2f; F2 result: %.2f; Diff: %.2f", fOne, fTwo, difference);

    }
}
