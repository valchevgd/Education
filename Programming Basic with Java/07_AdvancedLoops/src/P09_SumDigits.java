import java.util.Scanner;

public class P09_SumDigits {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());
        int sum = 0;

        while (n != 0){
            sum += n % 10;
            n = n / 10;
        }

        System.out.println(sum);
    }
}
