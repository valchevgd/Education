import java.util.Scanner;

public class P06_CircleAreaAndPerimeter {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        double r = Double.parseDouble(input.nextLine());
        double area = Math.PI * r * r;
        double perimeter = 2 * Math.PI * r;
        System.out.println(area);
        System.out.println(perimeter);
    }
}
