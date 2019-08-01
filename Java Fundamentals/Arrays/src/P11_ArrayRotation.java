import java.util.Scanner;

public class P11_ArrayRotation {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String[] array = scanner.nextLine().split(" ");
        int num = scanner.nextInt();
        int turns = num % array.length;

        for (int i = 0; i < turns; i++) {

            String firstElement = array[0];
            System.arraycopy(array, 1, array, 0, array.length - 1);

            array[array.length - 1] = firstElement;
        }

        System.out.println(String.join(" ", array));
    }
}
