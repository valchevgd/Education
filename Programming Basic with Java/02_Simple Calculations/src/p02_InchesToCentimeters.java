import java.util.Scanner;

public class p02_InchesToCentimeters {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        System.out.print("inches = ");
        double inches = Double.parseDouble(input.nextLine());
        double centimeters = inches * 2.54;
        System.out.println(centimeters);
    }
}
