import java.util.Scanner;

public class P03_PrintingTriangle {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int num = scanner.nextInt();

        for (int i = 1; i <= num ; i++) {

            printLine(i);
        }

        for (int i = num - 1; i >= 1 ; i--) {

            printLine(i);
        }
    }

    private static void printLine(int number) {

        for (int i = 1; i <= number ; i++) {

            System.out.printf("%d ", i);
        }

        System.out.println();
    }
}
