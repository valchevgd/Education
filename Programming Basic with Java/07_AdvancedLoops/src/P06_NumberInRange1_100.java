import java.util.Scanner;

public class P06_NumberInRange1_100 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Number in Range [1...100]:");
        int n = Integer.parseInt(input.nextLine());
        System.out.println();

        while (n <= 0 || n > 100){
            System.out.println("Invalid number!");
            System.out.print("Number in Range [1...100]:");
            n = Integer.parseInt(input.nextLine());
            System.out.println();
        }

        System.out.println("The number is:" + n);
    }
}
