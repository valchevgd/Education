import java.util.Scanner;

public class P07_ChristmasTree {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());

        int spaceCounter = n - 1;
        int starsCounter = 1;
        String firstRow = "";


        for (int i = 0; i < n ; i++) {
            firstRow += " ";
        }
        firstRow += " |";
        System.out.println(firstRow);

        for (int i = 0; i < n; i++) {
            String downRows = "";
            for (int space = 0; space < spaceCounter; space++) {
                downRows += " ";
            }

            for (int stars = 0; stars < starsCounter; stars++) {
                downRows += "*";
            }

            spaceCounter --;

            downRows += " | ";

            for (int j = 0; j < starsCounter; j++) {
                downRows += "*";
            }

            starsCounter ++;
            System.out.print(downRows);
            System.out.println();

        }



    }
}
