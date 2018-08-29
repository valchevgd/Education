using System;

namespace P04_TripleSum
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();

            long[] nums = StringToInt(input);
            bool aBEqualsC = ChekABEqualsC(nums);

            if (!aBEqualsC)
            {
                Console.WriteLine("No");
            }
        }

        private static bool ChekABEqualsC(long[] nums)
        {
            bool equals = false;
            for (long i = 0; i < nums.Length; i++)
            {
                long j = i + 1;

                for (j = i + 1; j < nums.Length; j++)
                {
                    long num = nums[i] + nums[j];
                    for (long k = 0; k < nums.Length; k++)
                    {
                        if (num == nums[k])
                        {
                            equals = true;
                            PrintResult(nums[i], nums[j], nums[k]);
                            break;
                        }
                    }
                }
            }

            return equals;
        }

        private static void PrintResult(long v1, long v2, long v3)
        {
            Console.WriteLine(v1 + " + " + v2 + " == " + v3);
        }

        private static long[] StringToInt(string input)
        {
            string[] deletedSpaces = input.Split(' ', StringSplitOptions.RemoveEmptyEntries);
            long[] arr = new long[deletedSpaces.Length];

            for (long index = 0; index < arr.Length; index++)
            {
                arr[index] = long.Parse(deletedSpaces[index]);
            }

            return arr;
        }
    }
}
