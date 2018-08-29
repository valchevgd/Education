import java.util.Scanner;

public class P13_NumberPyramid {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());
        int num = 1;

        for (int i = 1; i <= n; i++) {
            for (int j = 0; j < i; j++) {
                System.out.print(num + " ");
                num ++;
                if (num > n){
                    break;
                }
            }

            if (num > n){
                break;
            }

            System.out.println();
        }
    }
}
