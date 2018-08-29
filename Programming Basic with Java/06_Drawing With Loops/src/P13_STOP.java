import java.util.Scanner;

public class P13_STOP {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());

        int stopFormula = ((n * 4 + 3) - 9) / 2;

        String firstRow = "";
        for (int i = 0; i < n + 1; i++) {
            firstRow += ".";
        }
        for (int i = 0; i < n * 2 + 1; i++) {
            firstRow += "_";
        }
        for (int i = 0; i < n + 1; i++) {
            firstRow += ".";
        }

        System.out.println(firstRow);

        int pointsCounter = n;
        int dashCounter = n * 2 - 1;

        for (int i = 0; i < n; i++) {
            String row = "";

            for (int j = 0; j < pointsCounter; j++) {
                row += ".";
            }
            row += "//";
            for (int j = 0; j < dashCounter; j++) {
                row += "_";
            }
            row += "\\\\";
            for (int j = 0; j < pointsCounter; j++) {
                row += ".";
            }

            System.out.println(row);

            pointsCounter --;
            dashCounter += 2;
        }

        String middleRow = "";
        middleRow += "//";
        for (int i = 0; i < stopFormula; i++) {
            middleRow += "_";
        }
        middleRow += "STOP!";
        for (int i = 0; i < stopFormula; i++) {
            middleRow += "_";
        }
        middleRow += "\\\\";

        System.out.println(middleRow);

        pointsCounter = 0;
        dashCounter = n * 4 - 1;

        for (int i = 0; i < n; i++) {
            String row = "";

            for (int j = 0; j < pointsCounter; j++) {
                row += ".";
            }

            row += "\\\\";

            for (int j = 0; j < dashCounter; j++) {
                row += "_";
            }

            row += "//";

            for (int j = 0; j < pointsCounter; j++) {
                row += ".";
            }

            System.out.println(row);

            pointsCounter ++;
            dashCounter -= 2;
        }
    }
}
