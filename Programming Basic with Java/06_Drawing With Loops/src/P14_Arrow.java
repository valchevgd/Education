import java.util.Scanner;

public class P14_Arrow {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());

        int pointsCounter = 1;
        int middleCounter = n * 2 - 5;
        int formulaMiddlesRowsInsidePoints = (n * 2 - 1) - ((n / 2) * 2 + 2);

        String firstRow = "";
        for (int i = 0; i < n / 2; i++) {
            firstRow += ".";
        }
        for (int i = 0; i < (n * 2 - 1) - (n / 2 * 2); i++) {
            firstRow += "#";
        }
        for (int i = 0; i < n / 2; i++) {
            firstRow += ".";
        }

        System.out.println(firstRow);

        for (int i = 0; i < n - 2; i++) {
            String middleRows = "";

            for (int j = 0; j < n / 2; j++) {
                middleRows += ".";
            }

            middleRows += "#";

            for (int j = 0; j < formulaMiddlesRowsInsidePoints; j++) {
                middleRows += ".";
            }

            middleRows += "#";

            for (int j = 0; j < n / 2; j++) {
                middleRows += ".";
            }

            System.out.println(middleRows);
        }

        String startOfArrow = "";

        for (int i = 0; i < ((n * 2 - 1) - formulaMiddlesRowsInsidePoints) / 2; i++) {
            startOfArrow += "#";
        }

        for (int i = 0; i < formulaMiddlesRowsInsidePoints; i++) {
            startOfArrow += ".";
        }

        for (int i = 0; i < ((n * 2 - 1) - formulaMiddlesRowsInsidePoints) / 2; i++) {
            startOfArrow += "#";
        }

        System.out.println(startOfArrow);

        for (int i = 0; i < n - 2; i++) {
            String Arrow = "";
            for (int j = 0; j < pointsCounter; j++) {
                Arrow += ".";
            }
            Arrow += "#";
            for (int j = 0; j < middleCounter; j++) {
                Arrow += ".";
            }
            Arrow += "#";
            for (int j = 0; j < pointsCounter; j++) {
                Arrow += ".";
            }

            System.out.println(Arrow);

            pointsCounter ++;
            middleCounter -= 2;
        }

        String lastRow = "";

        for (int i = 0; i < n  - 1; i++) {
            lastRow += ".";
        }

        lastRow += "#";

        for (int i = 0; i < n - 1; i++) {
            lastRow += ".";
        }

        System.out.println(lastRow);
    }
}
