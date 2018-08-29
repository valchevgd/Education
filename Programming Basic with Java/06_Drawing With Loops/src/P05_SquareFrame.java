import java.util.Scanner;

public class P05_SquareFrame {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());

        String firstAndLastRow = "";

        firstAndLastRow += "+";

        for (int j = 0; j < n - 2; j++) {
            firstAndLastRow += " -";
        }

        firstAndLastRow += " +";


        System.out.println(firstAndLastRow);

        for (int i = 0; i < n - 2; i++) {
            String middleRows = "";
                middleRows += "|";
            for (int j = 0; j < n -2; j++) {
                middleRows += " -";
            }
            middleRows += " |";

            System.out.println(middleRows);
        }


        System.out.println(firstAndLastRow);

    }
}
