import java.util.Scanner;

public class P06_RhombusOfStars {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());

        int spaceCounter = n - 1;
        int starsCounter = 0;

        for (int i = 0; i < n; i++) {

            for (int j = 0; j < spaceCounter; j++) {
                System.out.print(" ");
            }

            spaceCounter --;
            System.out.print("*");

            for (int stars = 0; stars < starsCounter; stars++) {
                System.out.print(" *");
            }

            starsCounter ++;

            System.out.println();
        }

        spaceCounter = 1;
        starsCounter = n - 1;

        for (int i = 0; i < n - 1; i++) {


            for (int j = 0; j < spaceCounter; j++) {
                System.out.print(" ");
            }
            spaceCounter ++;


            System.out.print("*");

            for (int stars = 1; stars < starsCounter; stars++) {
                System.out.print(" *");
            }

            starsCounter --;

            System.out.println();
        }

    }
}
