import java.util.Scanner;

public class P12_Butterfly {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());

        for (int i = 0; i < n - 2; i++) {
            String row = "";

            if (i % 2 == 0){
                for (int j = 0; j < n - 2; j++) {
                    row += "*";
                }
                row += "\\ /";
                for (int j = 0; j < n - 2; j++) {
                    row += "*";
                }
            }else {
                for (int j = 0; j < n - 2; j++) {
                    row += "-";
                }
                row += "\\ /";
                for (int j = 0; j < n - 2; j++) {
                    row += "-";
                }
            }
            System.out.println(row);
        }

        String middle = "";
        for (int i = 0; i < n - 1; i++) {
            middle += " ";
        }
        middle += "@";

        System.out.println(middle);

        for (int i = 0; i < n - 2; i++) {
            String row = "";

            if (i % 2 == 0){
                for (int j = 0; j < n - 2; j++) {
                    row += "*";
                }
                row += "/ \\";
                for (int j = 0; j < n - 2; j++) {
                    row += "*";
                }
            }else {
                for (int j = 0; j < n - 2; j++) {
                    row += "-";
                }
                row += "/ \\";
                for (int j = 0; j < n - 2; j++) {
                    row += "-";
                }
            }
            System.out.println(row);
        }
    }
}
