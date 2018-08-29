import java.util.Scanner;

public class P07_2DRectangleArea {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        double x1 = Double.parseDouble(input.nextLine());
        double y1 = Double.parseDouble(input.nextLine());
        double x2 = Double.parseDouble(input.nextLine());
        double y2 = Double.parseDouble(input.nextLine());
        double sideOne = Math.max(x1, x2) - Math.min(x1, x2);
        double sideTwo = Math.max(y1, y2) - Math.min(y1, y2);
        double area = sideOne * sideTwo;
        double perimeter = 2 * (sideOne + sideTwo);
        System.out.println(area);
        System.out.println(perimeter);
    }
}
