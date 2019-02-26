import java.util.Scanner;

public class P01_rectangleArea {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        double weight = input.nextDouble();
        double height = input.nextDouble();

        double area = weight * height;

        System.out.printf("%.2f", area);
    }
}
