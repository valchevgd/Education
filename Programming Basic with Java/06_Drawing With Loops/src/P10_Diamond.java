import java.util.Scanner;

public class P10_Diamond {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());


        int leftRight = (n - 1) / 2;


        for (int i = 0; i < (n + 1) / 2; i++) {

            int middle =  n - 2 * leftRight - 2 ;
            String nextRow = "";

            for (int j = 0; j < leftRight; j++) {
                nextRow += "-";
            }

            nextRow += "*";

            if (middle >= 0){
                for (int j = 0; j < middle; j++) {
                    nextRow += "-";
                }

                nextRow += "*";
            }

            for (int j = 0; j < leftRight; j++) {
                nextRow += "-";
            }

            System.out.println(nextRow);

            leftRight --;

        }

        leftRight = 1;

        for (int i = 0; i < (n - 1) / 2; i++) {

            int middle =  n - 2 * leftRight - 2 ;
            String nextRow = "";

            for (int j = 0; j < leftRight; j++) {
                nextRow += "-";
            }

            nextRow += "*";

            if (middle >= 0){
                for (int j = 0; j < middle; j++) {
                    nextRow += "-";
                }

                nextRow += "*";
            }

            for (int j = 0; j < leftRight; j++) {
                nextRow += "-";
            }

            System.out.println(nextRow);

            leftRight ++;
        }
    }
}
