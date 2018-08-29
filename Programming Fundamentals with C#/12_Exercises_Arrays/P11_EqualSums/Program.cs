using System;
using System.Linq;

namespace P11_EqualSums
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] nums = Console.ReadLine().
                Split().
                Select(int.Parse).
                ToArray();

            
            int middleIndex = 0;
            bool equalsSum = false;

            for (int i = 0; i < nums.Length; i++)
            {
                int rightSum = 0;
                int leftSum = 0;

                for (int j = 0; j < i; j++)
                {
                    leftSum += nums[j];
                }

                for (int j = i + 1; j < nums.Length; j++)
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
                Console.WriteLine(middleIndex);
            }
            else
            {
                Console.WriteLine("no");
            }

        }
    }
}
