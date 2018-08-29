import java.util.Scanner;

public class P15_Axe {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());

        int firstDashesCounter = n * 3;
        int middleCounter = 0;
        int backCounter = n * 2 - 2;

        for (int i = 0; i < n; i++) {
            String UpperRows = "";
            for (int j = 0; j < n * 3; j++) {
                UpperRows += "-";
            }
            UpperRows += "*";
            for (int j = 0; j < middleCounter; j++) {
                UpperRows += "-";
            }
            UpperRows += "*";
            for (int j = 0; j < backCounter ; j++) {
                UpperRows += "-";
            }

            System.out.println(UpperRows);

            middleCounter ++;
            backCounter --;
        }


        for (int i = 0; i < n / 2; i++) {
            String middleRows = "";

            for (int j = 0; j < n * 3 + 1; j++) {
                middleRows += "*";
            }
            for (int j = 0; j < n - 1; j++) {
                middleRows += "-";
            }
            middleRows += "*";
            for (int j = 0; j < n - 1; j++) {
                middleRows += "-";
            }

            System.out.println(middleRows);
        }

        middleCounter = n - 1;
        backCounter = n - 1;

        for (int i = 0; i < n / 2 - 1; i++) {
            String downsRows = "";

            for (int j = 0; j < firstDashesCounter; j++) {
                downsRows += "-";
            }
            downsRows += "*";

            for (int j = 0; j < middleCounter; j++) {
               downsRows += "-";
            }
            downsRows += "*";

            for (int j = 0; j < backCounter; j++) {
                downsRows += "-";
            }

            System.out.println(downsRows);

            firstDashesCounter --;
            middleCounter += 2;
            backCounter --;
        }

       String lastRow = "";
        for (int i = 0; i < firstDashesCounter; i++) {
            lastRow += "-";
        }
        for (int i = 0; i < middleCounter + 2; i++) {
            lastRow += "*";
        }
        for (int i = 0; i < backCounter; i++) {
            lastRow += "-";
        }

        System.out.println(lastRow);
    }
}
