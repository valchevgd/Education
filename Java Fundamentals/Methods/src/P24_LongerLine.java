import java.util.Scanner;

public class P24_LongerLine {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int x1 = scanner.nextInt();
        int y1 = scanner.nextInt();
        int x2 = scanner.nextInt();
        int y2 = scanner.nextInt();
        int x3 = scanner.nextInt();
        int y3 = scanner.nextInt();
        int x4 = scanner.nextInt();
        int y4 = scanner.nextInt();

        double firstLine = getLine(x1, y1, x2, y2);
        double secondLine = getLine(x3, y3, x4, y4);

        if (firstLine > secondLine) {

            System.out.printf("(%d, %d)(%d, %d)", x1, y1, x2, y2);
        } else {
            System.out.printf("(%d, %d)(%d, %d)", x3, y3, x4, y4);
        }
    }

    private static double getLine(int x1, int y1, int x2, int y2) {

        int firstPoint = getPoint(x1, y1);
        int secondPoint = getPoint(x2, y2);

        return Math.sqrt(Math.pow(firstPoint, 2) + Math.pow(secondPoint, 2));
    }

    private static int getPoint(int firstInt, int secondInt) {

        return (int)(Math.pow(firstInt, 2) + Math.pow(secondInt, 2));
    }
}
