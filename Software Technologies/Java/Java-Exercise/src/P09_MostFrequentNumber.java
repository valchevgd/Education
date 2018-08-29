import java.util.Arrays;
import java.util.Scanner;

public class P09_MostFrequentNumber {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int[] nums = Arrays.stream(input.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        int maxCount = 0;
        int maxNum = 0;

        for (int i = 0; i < nums.length; i++)
        {
            int counter = 0;

            for (int j = i; j < nums.length; j++)
            {

                if (nums[i] == nums[j])
                {
                    counter++;
                }

                if (counter > maxCount)
                {
                    maxCount = counter;
                    maxNum = nums[i];
                }
            }
        }
        System.out.println(maxNum);
    }
}
