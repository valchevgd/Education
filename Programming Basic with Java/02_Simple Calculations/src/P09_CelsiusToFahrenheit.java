import java.util.Scanner;

public class P09_CelsiusToFahrenheit {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        double celsius = Double.parseDouble(input.nextLine());
        double fahrenheit = celsius * 1.8 + 32;
        System.out.printf("%.2f", fahrenheit);
    }
}
