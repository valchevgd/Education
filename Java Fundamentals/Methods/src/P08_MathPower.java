import java.text.DecimalFormat;
import java.util.Scanner;

public class P08_MathPower {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        double number = scanner.nextDouble();
        int power = scanner.nextInt();

        System.out.println(new DecimalFormat("0.####").format(mathPower(number, power)));
    }

    private static double mathPower(double number, int power) {

        return Math.pow(number, power);
    }
}
