import java.util.Scanner;

public class P08_OddEvenSum {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());
        int oddSum = 0;
        int evenSum = 0;

        for (int i = 1; i <= num; i++) {
            int nextNum = Integer.parseInt(input.nextLine());

            if (i % 2 != 0){
                oddSum += nextNum;
            }else {
                evenSum += nextNum;
            }

        }

        if (oddSum - evenSum == 0){
            System.out.printf("Yes Sum = %d", oddSum);
        }else {
            System.out.printf("No Diff = %d", Math.abs(oddSum - evenSum));
        }
    }
}
