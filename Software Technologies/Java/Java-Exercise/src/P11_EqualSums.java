import java.util.Arrays;
import java.util.Scanner;

public class P11_EqualSums {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int[] nums = Arrays.stream(input.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();


        int middleIndex = 0;
        boolean equalsSum = false;

        for (int i = 0; i < nums.length; i++)
        {
            int rightSum = 0;
            int leftSum = 0;

            for (int j = 0; j < i; j++)
            {
                leftSum += nums[j];
            }

            for (int j = i + 1; j < nums.length; j++)
            {
                rightSum += nums[j];
            }

            if (leftSum == rightSum)
            {
                middleIndex = i;
                equalsSum = true;
            }
        }

        if (equalsSum)
        {
            System.out.println(middleIndex);
        }
        else
        {
            System.out.println("no");
        }
    }
}
