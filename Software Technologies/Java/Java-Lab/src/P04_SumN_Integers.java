import java.util.Scanner;

public class P04_SumN_Integers {
    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());
        int sum =0;

        for (int i = 0; i < n; i++) {
            int nextNum = Integer.parseInt(input.nextLine());
            sum += nextNum;
        }

        System.out.println(sum);
    }
}
