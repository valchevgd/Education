import java.util.Scanner;

public class P04_SumNumbers {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());
        int sum = 0;

        for (int i = 0; i < num; i++) {
            int nextNum = Integer.parseInt(input.nextLine());
            sum += nextNum;
        }

        System.out.println(sum);
    }
}
