import java.util.Scanner;

public class P12_Fibonacci {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());
        int f0 = 1;
        int f1 = 1;
        int sum = 0;

        while (num > 1){
            sum = f0 + f1;
            f0 = f1;
            f1 = sum;
            num --;
        }

        System.out.println(f1);
    }
}
