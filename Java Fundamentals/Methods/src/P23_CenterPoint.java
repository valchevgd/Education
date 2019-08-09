import java.util.Scanner;

public class P23_CenterPoint {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int x1 = scanner.nextInt();
        int y1 = scanner.nextInt();
        int x2 = scanner.nextInt();
        int y2 = scanner.nextInt();

        int xPoint = getPoint(x1, y1);
        int yPoint = getPoint(x2, y2);
        System.out.println(yPoint);
        System.out.println(xPoint);

        if (xPoint < yPoint) {

            printClosestPoints(x1, y1);
        } else {

            printClosestPoints(x2, y2);
        }


    }

    private static void printClosestPoints(int firstPoint, int secondPoint) {


        System.out.printf("(%d, %d)", firstPoint, secondPoint);
    }

    private static int getPoint(int firstInt, int secondInt) {

        return (int)(Math.pow(firstInt, 2) + Math.pow(secondInt, 2));
    }
}
