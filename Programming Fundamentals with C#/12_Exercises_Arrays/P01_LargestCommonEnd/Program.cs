using System;

namespace P01_LargestCommonEnd
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] firstArr = Console.ReadLine().Split();
            string[] secondArr = Console.ReadLine().Split();

            int stopIndex = Math.Min(firstArr.Length, secondArr.Length);

            int leftCount = 0;
            int rightCount = 0;

            for (int i = 0; i < stopIndex; i++)
            {
                if (firstArr[i] == secondArr[i])
                {
                    leftCount++;
                }

                if (firstArr[firstArr.Length - 1 - i] == secondArr[secondArr.Length - 1 - i])
                {
                    rightCount++;
                }
            }

            int maxCount = Math.Max(leftCount, rightCount);

            Console.WriteLine(maxCount);
        }
    }
}
