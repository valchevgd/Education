import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P15_Messaging {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String[] indexesAsString = scanner.nextLine().split(" ");
        List<String> stringInput = Arrays
                .stream(scanner.nextLine().split(""))
                .collect(Collectors.toList());

        String output = "";

        for (int i = 0; i < indexesAsString.length; i++) {

            int index = getIndex(indexesAsString[i]) % stringInput.size();
            output += stringInput.get(index);
            stringInput.remove(index);
        }

        System.out.println(output);
    }

    private static int getIndex(String string) {

        int sum = 0;
        String[] numbersAsString = string.split("");

        for (String s : numbersAsString) {

            sum += Integer.parseInt(s);
        }

        return sum;


    }
}
