import java.util.Scanner;

public class P06_CalculateRectangleArea {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int width = scanner.nextInt();
        int height = scanner.nextInt();

        int area = getArea(width, height);

        System.out.println(area);
    }

    private static int getArea(int width, int height) {

        return width * height;
    }
}
