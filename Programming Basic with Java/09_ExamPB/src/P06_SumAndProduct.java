import java.util.Scanner;

public class P06_SumAndProduct {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in); 
        
        int n = Integer.parseInt(input.nextLine());

        for (int i = 1; i <= 9; i++) {
            for (int j = 9; j >= i; j--) {
                for (int k = 0; k <= 9; k++) {
                    for (int l = 9; l >= k; l--) {
                        if (k != 0 && l != 0){
                            if ((i + j + k + l) == (i * j * k * l) && n % 10 == 5){
                                System.out.println(String.format("%d%d%d%d", i, j, k, l));
                                return;
                            }
                            if ((i * j * k * l) / (i + j + k + l) == 3 && n % 3 == 0){
                                System.out.println(String.format("%d%d%d%d", l, k, j, i));
                                return;
                            }
                        }
                    }
                }
            }
        }
        System.out.println("Nothing found");
    }
}
