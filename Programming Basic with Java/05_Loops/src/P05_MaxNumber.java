import java.util.Scanner;

public class P05_MaxNumber {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());
        int maxNum = Integer.MIN_VALUE;

        for (int i = 0; i < num ; i++) {
            int nextNum = Integer.parseInt(input.nextLine());
            if (nextNum > maxNum){
                maxNum = nextNum;
            }
        }

        System.out.println(maxNum);
    }
}
