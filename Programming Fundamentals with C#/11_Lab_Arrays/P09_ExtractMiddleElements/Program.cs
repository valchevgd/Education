using System;

namespace P09_ExtractMiddleElements
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();
            string[] text = input.Split();
            int[] nums = ConvertToNums(text);

            if (nums.Length == 1)
            {
                Console.WriteLine("{ " + nums[0] + " }");
            }
            else if (nums.Length % 2 == 0)
            {
                int[] middleTwo = GetMiddleTwo(nums);

                Console.WriteLine("{ " + middleTwo[0] + ", " + middleTwo[1] + " }");
            }
            else
            {
                int[] middleThree = GetMiddleThree(nums);
                Console.WriteLine("{ " + middleThree[0] + ", " + middleThree[1] + ", " + middleThree[2] + " }");
            }
        }

        private static int[] GetMiddleThree(int[] nums)
        {
            int[] middle = new int[3];
            int middleCount = 0;
            for (int i = nums.Length / 2 - 1; i <= nums.Length / 2 + 1; i++)
            {
                middle[middleCount] = nums[i];
                middleCount++;
            }

            return middle;
        }

        private static int[] GetMiddleTwo(int[] nums)
        {
            int[] middle = new int[2];
            int middleCount = 0;
            for (int i = nums.Length / 2 - 1; i <= nums.Length / 2; i++)
            {
                middle[middleCount] = nums[i];
                middleCount++;
            }

            return middle;
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
