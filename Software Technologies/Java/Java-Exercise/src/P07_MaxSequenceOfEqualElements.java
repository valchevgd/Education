import java.util.Arrays;
import java.util.Scanner;

public class P07_MaxSequenceOfEqualElements {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int[] nums = Arrays.stream(input.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        int startIndex = 0;
        int bestLenght = 0;
        int start = 0;
        int lenght = 0;

        for (int i = 1; i < nums.length; i++)
        {


            if (nums[i - 1] == nums[i])
            {
                if (lenght == 0)
                {
                    start = i - 1;
                }
                lenght++;
            }
            else
            {
                start = 0;
                lenght = 0;
            }

            if (lenght > bestLenght)
            {
                startIndex = start;
                bestLenght = lenght;
            }
        }

        for (int i = startIndex; i <= startIndex + bestLenght; i++)
        {
            System.out.print(nums[i] + " ");
        }

    }
}
