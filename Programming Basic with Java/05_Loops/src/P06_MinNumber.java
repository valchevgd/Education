import java.util.Scanner;

public class P06_MinNumber {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int num = Integer.parseInt(input.nextLine());
        int minNum = Integer.MAX_VALUE;

        for (int i = 0; i < num ; i++) {
            int nextNum = Integer.parseInt(input.nextLine());
            if (nextNum < minNum){
                minNum = nextNum;
            }
        }

        System.out.println(minNum);
    }
}
