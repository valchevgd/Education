import java.util.Scanner;

public class P01_Moon {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        double speed = Double.parseDouble(input.nextLine());
        double fuel = Double.parseDouble(input.nextLine());

        int distanceToMoon = 2 * 384400;
        double time = distanceToMoon / speed + 3;
        double fuelNeeded = fuel * distanceToMoon / 100;

        System.out.printf("%.0f%n", Math.ceil(time));
        System.out.printf("%.0f", fuelNeeded);
    }
}
