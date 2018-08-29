import java.util.Scanner;

public class P12_EqualPairs {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());
        int maxDiff = 0;
        int prevSum = 0;

        for (int i = 0; i < num; i++) {
            int nextNum1 = Integer.parseInt(input.nextLine());
            int nextNum2 = Integer.parseInt(input.nextLine());

            int sum = nextNum1 + nextNum2;

            if (prevSum != 0){
                int diff = sum - prevSum;
                if (Math.abs(diff) > Math.abs(maxDiff)){
                    maxDiff = diff;
                }
            }

            prevSum = sum;
        }

        if (maxDiff == 0){
            System.out.printf("Yes, value=%d", prevSum);
        }else {
            System.out.printf("No, maxdiff=%d",Math.abs(maxDiff));
        }
    }
}
