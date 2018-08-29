import java.util.Scanner;

public class P10_HalfSumElement {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());
        int totalSum = 0;
        int maxNum = 0;

        for (int i = 0; i < num; i++) {
            int nextNum = Integer.parseInt(input.nextLine());
            totalSum += nextNum;
            if (nextNum > maxNum){
                maxNum = nextNum;
            }
        }

        if (totalSum - maxNum == maxNum){
            System.out.printf("Yes Sum = %d", maxNum);
        }else {
            System.out.printf("No Diff = %d", Math.abs(maxNum - (totalSum - maxNum)));
        }
    }
}
