import java.util.Scanner;

public class P11_DrawFort {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());
        int bonusElements = (n * 2) - 4 - ( n / 2 * 2);

        String firstRow = "";
        firstRow += "/";
        for (int j = 0; j < n / 2; j++) {
            firstRow += "^";
        }
        firstRow += "\\";

        if (n > 4) {
            for (int j = 0; j < bonusElements; j++) {
                firstRow += "_";
            }
        }

        firstRow += "/";
        for (int j = 0; j < n / 2; j++) {
            firstRow += "^";
        }
        firstRow += "\\";

        System.out.println(firstRow);

        if (n > 4){
            for (int i = 0; i < n - 3; i++) {
                String middlesRows = "";
                middlesRows += "|";
                for (int j = 0; j < (n * 2) - 2 ; j++) {
                    middlesRows += " ";
                }
                middlesRows += "|";

                System.out.println(middlesRows);

            }
        }else {
            for (int i = 0; i < n - 2; i++) {
                String middlesRows = "";
                middlesRows += "|";
                for (int j = 0; j < (n * 2) - 2 ; j++) {
                    middlesRows += " ";
                }
                middlesRows += "|";

                System.out.println(middlesRows);
            }
        }

        if (n > 4){
            String bonusRow = "";
            bonusRow += "|";
            for (int i = 0; i < n / 2 + 1; i++) {
                bonusRow += " ";
            }
            for (int i = 0; i < bonusElements; i++) {
                bonusRow += "_";
            }
            for (int i = 0; i < n / 2 + 1; i++) {
                bonusRow += " ";
            }
            bonusRow += "|";

            System.out.println(bonusRow);
        }

        String lastRow = "";
        lastRow += "\\";
        for (int i = 0; i < n/2 ; i++) {
            lastRow += "_";
        }
        lastRow += "/";

        if (n > 4){
            for (int i = 0; i < bonusElements; i++) {
                lastRow += " ";
            }
        }
        lastRow += "\\";
        for (int i = 0; i < n/2 ; i++) {
            lastRow += "_";
        }
        lastRow += "/";

        System.out.println(lastRow);
    }
}
