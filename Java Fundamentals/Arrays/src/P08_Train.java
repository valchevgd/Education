import java.util.Arrays;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P08_Train {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int num = Integer.parseInt(scanner.nextLine());

        int[] people = new int[num];
        int sum = 0;

        for (int i = 0; i < num; i++) {

            people[i] = Integer.parseInt(scanner.nextLine());
            sum += people[i];
        }

        System.out.println(Arrays.
                stream(people)
                .mapToObj(String::valueOf)
                .collect(Collectors.joining(" ")));

        System.out.println(sum);
    }
}
