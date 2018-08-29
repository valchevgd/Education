import java.util.Scanner;

public class P08_Factorial {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());
        int num = 1;

        while (n != 0){
            num = num * n;
            n --;
        }

        System.out.println(num);
    }
}
