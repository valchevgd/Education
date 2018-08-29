import java.util.Scanner;

public class P02_NumbersN_1 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());

        for (int i = n; i > 0 ; i--) {
            System.out.println(i);
        }
    }
}
