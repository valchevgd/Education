import java.util.Scanner;

public class P07_Skyscraper {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());

        for (int i = 0; i < n - 3; i++) {
            String antenna = "";
            for (int j = 0; j < n; j++) {
                antenna += " ";
            }
            antenna += "|";
            System.out.println(antenna);
        }

        String firstRow = "";
        for (int i = 0; i < n - 1; i++) {
            firstRow += " ";
        }
        firstRow += "_|_";
        System.out.println(firstRow);

        for (int i = 0; i < n - 3; i++) {
            String rows = "";
            for (int j = 0; j < n -1; j++) {
                rows += " ";
            }
            rows += "|-|";
            System.out.println(rows);
        }

        String anotherRow = "";
        for (int i = 0; i < n - 2; i++) {
            anotherRow += " ";
        }
        anotherRow += "_|-|_";
        System.out.println(anotherRow);

        if (n == 3){
            System.out.println(" |***|");
        }else {
            for (int i = 0; i < n - 3; i++) {
                String rows = "";
                for (int j = 0; j < n - 2; j++) {
                    rows += " ";
                }
                rows += "|***|";
                System.out.println(rows);
            }
        }

        if (n > 3){
            String middleRow = " ";
            for (int i = 0; i < n - 3; i++) {
                middleRow += "_";
            }
            middleRow += "|***|";
            for (int i = 0; i < n - 3; i++) {
                middleRow += "_";
            }
            System.out.println(middleRow);
        }

        for (int i = 0; i < n * 4 - 1; i++) {
            String middleRows = " ";
            for (int j = 0; j < n - 2; j++) {
                middleRows += "|";
            }
            middleRows += "---";
            for (int j = 0; j < n - 2; j++) {
                middleRows += "|";
            }
            System.out.println(middleRows);
        }



        String lastRow = "";
        lastRow += "_";
        for (int i = 0; i < n - 2; i++) {
            lastRow += "|";
        }
        lastRow += "---";
        for (int i = 0; i < n - 2; i++) {
            lastRow += "|";
        }
        lastRow += "_";

        System.out.println(lastRow);


        for (int i = 0; i < n  - 2; i++) {
            String basis = "";
            for (int j = 0; j < n * 2 + 1; j++) {
                basis += "|";
            }
            System.out.println(basis);
        }
    }
}
