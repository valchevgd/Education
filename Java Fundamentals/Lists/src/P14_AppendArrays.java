import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

public class P14_AppendArrays {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String[] inputArrays = scanner.nextLine().split("\\|");

        List<String> output = new ArrayList<>();

        for (int i = inputArrays.length - 1; i >= 0 ; i--) {

            String[] temp = inputArrays[i].trim().split("\\s+");

            output.addAll(Arrays.asList(temp));
        }

        System.out.println(String.join(" ", output));
    }
}
