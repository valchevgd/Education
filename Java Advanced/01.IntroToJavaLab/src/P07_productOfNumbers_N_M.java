import java.math.BigInteger;
import java.util.Scanner;

public class P07_productOfNumbers_N_M {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        int n = input.nextInt();
        int tempN = n;
        int m = input.nextInt();

        BigInteger result = new BigInteger("1");

        do {
            result = result.multiply(BigInteger.valueOf(tempN));
        }while (++tempN <= m);

        System.out.printf("product[%d..%d] = %s", n, m, result);

    }
}
