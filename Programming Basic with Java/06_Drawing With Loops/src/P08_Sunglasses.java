import java.util.Scanner;

public class P08_Sunglasses {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());
        String firstAndLastRows = "";


        for (int i = 0; i < n * 2; i++) {
            firstAndLastRows += "*";
        }
        for (int i = 0; i < n; i++) {
            firstAndLastRows += " ";
        }
        for (int i = 0; i < n * 2; i++) {
            firstAndLastRows += "*";
        }
        System.out.println(firstAndLastRows);

        for (int i = 0; i < n - 2; i++) {
            String middlesRows = "";
            middlesRows += "*";
            for (int j = 0; j < n * 2 - 2; j++) {
                middlesRows += "/";
            }
            middlesRows += "*";

            if ((n - 1) / 2 - 1 == i){
                for (int j = 0; j < n; j++) {
                    middlesRows += "|";
                }
            }else {
                for (int j = 0; j < n; j++) {
                    middlesRows += " ";
                }
            }
            middlesRows += "*";
            for (int j = 0; j < n * 2 - 2; j++) {
                middlesRows += "/";
            }
            middlesRows += "*";

            System.out.println(middlesRows);
        }

        System.out.println(firstAndLastRows);
    }
}
