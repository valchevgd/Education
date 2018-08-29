import java.util.Scanner;

public class P06_CarNumber {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int firstNum = Integer.parseInt(input.nextLine());
        int lastNum = Integer.parseInt(input.nextLine());

        for (int i = firstNum + 1; i <= lastNum ; i++) {
            for (int j = firstNum; j <= lastNum ; j++) {
                for (int k = firstNum; k <= lastNum ; k++) {
                    if ((j + k) % 2 == 0){
                        for (int l = firstNum ; l <=i; l++) {
                            if (i % 2 == 0 && l % 2 != 0){
                                System.out.print(String.format("%d%d%d%d ", i, j, k, l));
                            }else if (i % 2 != 0 && l % 2 == 0){
                                System.out.print(String.format("%d%d%d%d ", i, j, k, l));
                            }
                        }
                    }
                }
            }
        }
    }
}
