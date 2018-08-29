import java.util.Scanner;

public class P13_AreaOfFigures {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String figure = input.nextLine();

        if ("square".equals(figure)){
            double side = Double.parseDouble(input.nextLine());
            double squareArea = side * side;
            System.out.printf("%.3f", squareArea);
        }else if ("rectangle".equals(figure)){
            double sideA = Double.parseDouble(input.nextLine());
            double sideB = Double.parseDouble(input.nextLine());
            double rectangleArea = sideA * sideB;
            System.out.printf("%.3f", rectangleArea);
        }else if ("circle".equals(figure)){
            double radius = Double.parseDouble(input.nextLine());
            double circleArea = Math.PI * radius * radius;
            System.out.printf("%.3f", circleArea);
        }else if ("triangle".equals(figure)){
            double side = Double.parseDouble(input.nextLine());
            double height = Double.parseDouble(input.nextLine());
            double triangleArea = side * height / 2;
            System.out.printf("%.3f", triangleArea);
        }
    }
}
