using System;

namespace P08_CondenseArrayToNumber
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();
            string[] text = input.Split();
            int[] nums = ConvertToNums(text);
            int condesned = CondensArray(nums);
            Console.WriteLine(condesned);
        }

        private static int CondensArray(int[] nums)
        {
            while (nums.Length > 1)
            {
                int[] sum = new int[nums.Length - 1];
                for (int index = 0; index < nums.Length - 1; index++)
                {
                    sum[index] = nums[index] + nums[index + 1];
                }

                nums = sum;
            }

            return nums[0];
            

        }

        private static int[] ConvertToNums(string[] text)
        {
            int[] newArr = new int[text.Length];
            for (int index = 0; index < text.Length; index++)
            {
                newArr[index] = int.Parse(text[index]);
            }

            return newArr;
        }
    }
}
