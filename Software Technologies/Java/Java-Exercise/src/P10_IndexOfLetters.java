import java.util.Scanner;

public class P10_IndexOfLetters {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        char[] nums = input.nextLine().toCharArray();
        char[] alphabet = new char[26];

        int index = 0;
        for (char i = 'a'; i <= 'z'; i++)
        {
            alphabet[index] = i;

            index++;
        }

        for (int i = 0; i < nums.length; i++)
        {
            for (int j = 0; j < alphabet.length; j++)
            {
                if (nums[i] == alphabet[j])
                {
                    System.out.printf(" %c -> %d%n",nums[i], j);
                }
            }
        }
    }
}
