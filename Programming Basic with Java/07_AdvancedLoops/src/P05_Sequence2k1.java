import java.util.Scanner;

public class P05_Sequence2k1 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());
        int num = 1;

        while (num <= n){
            System.out.println(num);
            num = num * 2 + 1;
        }
    }
}
