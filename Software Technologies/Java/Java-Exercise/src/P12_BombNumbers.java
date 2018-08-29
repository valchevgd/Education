import java.io.Console;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;

public class P12_BombNumbers {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        String numbers = input.nextLine();
        String[] numsArr = numbers.split(" ");
        ArrayList<Double> nums = new ArrayList<>();

        for (String num : numsArr) {
            Double number = Double.parseDouble(num);
            nums.add(number);
        }


        String[] comands = input.nextLine().split(" ");

        double bomb = Double.parseDouble(comands[0]);
        double power = Double.parseDouble(comands[1]);

        for (int i = 0; i < nums.size(); i++) {
            if (nums.get(i) == bomb) {
                for (int j = 0; j < power; j++) {
                    if (i - 1 >= 0) {

                        nums.remove(i - 1);
                        i--;
                    }
                    if (i + 1 < nums.size()) {
                        nums.remove(i + 1);
                    }
                }

                nums.remove(i);
                i--;

            }
        }

        double sum = 0;

        for (double num : nums) {
            sum += num;
        }

        System.out.printf("%.0f",sum);
    }
}
