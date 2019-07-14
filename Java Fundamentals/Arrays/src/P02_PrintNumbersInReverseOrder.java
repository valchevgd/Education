import java.util.Arrays;
import java.util.Scanner;
import java.util.stream.Collectors;

public class P02_PrintNumbersInReverseOrder {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        int num = scanner.nextInt();
        int[] nums = new int[num];

        for (int i = nums.length - 1; i >= 0; i--) {
            nums[i] = scanner.nextInt();
        }

        System.out.println(Arrays.stream(nums)
                .mapToObj(String::valueOf)
                .collect(Collectors.joining(" "))
        );
    }
}
