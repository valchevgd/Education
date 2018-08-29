import java.util.Scanner;

public class P07_LeftAndRightSum {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());

        int leftSum = 0;
        int rightSum = 0;

        for (int i = 0; i < num * 2; i++) {
            int nextNum = Integer.parseInt(input.nextLine());

            if (i < num){
                leftSum += nextNum;
            }else {
                rightSum += nextNum;
            }
        }

        if (leftSum - rightSum == 0){
            System.out.printf("Yes, sum = %d", rightSum);
        }else {
            System.out.printf("No, diff = %d", Math.abs(rightSum - leftSum));
        }
    }
}
