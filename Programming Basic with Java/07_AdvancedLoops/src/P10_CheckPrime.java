import java.util.Scanner;

public class P10_CheckPrime {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());
        boolean prime = true;

        if (num < 2) {
            System.out.println("Not Prime");
        } else {

            for (int i = 2; i <= Math.sqrt(num); i++) {
                if (num % i == 0) {
                    prime = false;
                }
            }

            if (prime) {
                System.out.println("Prime");
            } else {
                System.out.println("Not Prime");
            }
        }
    }
}
