import java.util.Scanner;

public class P15_StupidPasswordGenerator {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int n = Integer.parseInt(input.nextLine());
        int l = Integer.parseInt(input.nextLine());

        int d1 = 1;
        int d2 = 1;
        int d3 = 1;
        char l1 = 'a';
        char l2 = 'a';

        for (d1 = 1; d1 <= n; d1++) {
            for (d2 = 1; d2 <= n; d2++) {
                for (l1 = 'a'; l1 < 'a' + l; l1++) {
                    for (l2 = 'a'; l2 < 'a' + l; l2++) {
                        for (d3 = Math.max(d1, d2) + 1; d3 <= n; d3++) {
                            System.out.print(String.format("%d%d%c%c%d ", d1, d2,l1, l2, d3));
                        }
                    }
                }
            }
        }
    }
}
