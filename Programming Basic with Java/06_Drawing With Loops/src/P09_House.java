import java.util.Scanner;

public class P09_House {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());


        int counterEven = (n - 2) / 2;
        int counterOdd = (n - 1) / 2;
        int starsCounter;

        if (n % 2 == 0){
            starsCounter = 2;


            for (int i = 0; i < (n + 1) / 2; i++) {

                String firstRow = "";
                for (int j = 0; j < counterEven; j++) {
                    firstRow += "-";
                }

                for (int j = 0; j < starsCounter; j++) {
                    firstRow += "*";
                }

                for (int j = 0; j < counterEven; j++) {
                    firstRow += "-";
                }
                System.out.println(firstRow);

                counterEven --;
                starsCounter += 2;
            }
        }else {
            starsCounter = 1;

            for (int i = 0; i < (n + 1) / 2; i++) {

                String firstRow = "";
                for (int j = 0; j < counterOdd; j++) {
                    firstRow += "-";
                }

                for (int j = 0; j < starsCounter; j++) {
                    firstRow += "*";
                }

                for (int j = 0; j < counterOdd; j++) {
                    firstRow += "-";
                }
                System.out.println(firstRow);

                counterOdd--;
                starsCounter += 2;

            }
        }

        for (int i = 0; i < n / 2; i++) {
            String middlesRows = "";

            middlesRows += "|";

            for (int j = 0; j < n - 2; j++) {
                middlesRows += "*";
            }

            middlesRows += "|";

            System.out.println(middlesRows);
        }

    }
}
