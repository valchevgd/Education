import java.util.Scanner;

public class P18_NxN_Matrix {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int num = scanner.nextInt();

        printMatrix(num);
    }

    private static void printMatrix(int num) {

        for (int i = 0; i < num; i++) {

            for (int j = 0; j < num; j++) {

                System.out.printf("%d ", num);
            }

            System.out.println();
        }
    }
}
